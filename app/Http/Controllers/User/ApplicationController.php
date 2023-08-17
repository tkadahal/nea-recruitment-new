<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\MediaType;
use Illuminate\View\View;
use App\Models\ExamCenter;
use App\Models\Application;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use App\Services\ApplicationService;
use Illuminate\Http\RedirectResponse;

class ApplicationController extends Controller
{
    private $applicationService;

    public function __construct(ApplicationService $applicationService)
    {
        $this->applicationService = $applicationService;
    }

    public function index(): View
    {
        $currentDate = Carbon::now()->toDateString();
        $userId = auth()->id();

        $examCenters = ExamCenter::active()->get()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $advertisements = Advertisement::query()
            ->active()
            ->with(['category', 'group', 'subGroup', 'qualification', 'level', 'applications'])
            ->whereDate('start_date_en', '<=', $currentDate)
            ->whereDate('penalty_end_date_en', '>=', $currentDate)
            ->get();

        return view('user.applications.index', compact('advertisements', 'examCenters', 'userId'));
    }

    public function show(string $id): View
    {
        $user = auth()->user();

        $application = Advertisement::with('level', 'category', 'group', 'subGroup', 'qualification')->findorFail($id);

        $samabeshiGroups = $application->samabeshiGroups;

        $userSamabeshiMedia = $user->media()->where('media_type_id', MediaType::samabeshi)->get();

        return view('user.applications.show', compact('application', 'samabeshiGroups', 'user', 'userSamabeshiMedia'));
    }

    public function edit(string $id): View
    {
        $user = auth()->user();

        $application = Application::with(
            'advertisement',
            'advertisement.level',
            'advertisement.category',
            'advertisement.group',
            'advertisement.subGroup',
            'advertisement.qualification',
        )->findorFail($id);

        $advertisement = $application->advertisement;

        $advertisementSamabeshiGroups = $advertisement->samabeshiGroups;

        $userAppliedSamabeshiGroups = $application->samabeshiGroups;

        $samabeshiGroups = $advertisementSamabeshiGroups->map(function ($samabeshiGroup) use ($userAppliedSamabeshiGroups) {
            $samabeshiGroup['applied'] = $userAppliedSamabeshiGroups->contains('id', $samabeshiGroup['id']);

            return $samabeshiGroup;
        });

        $userSamabeshiMedia = $user->media()->where('media_type_id', 5)->get();

        $currentDate = Carbon::now()->toDateString();

        $amount = $currentDate >= $advertisement->start_date_en && $currentDate <= $advertisement->end_date_en
            ? $application->payable_amount
            : ($currentDate > $advertisement->end_date_en ? $application->payable_amount * 2 : 0);

        return view('user.applications.edit', compact('application', 'samabeshiGroups', 'userSamabeshiMedia', 'amount'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $advertisement = Advertisement::find($id);
        $user = auth()->user();

        // Already Applied Check
        // if ($user->applications()->where('advertisement_id', $advertisement->id)->exists()) {
        //     return redirect()->back()->withErrors(['error' => trans('global.application.info.alreadAppliedInfo')]);
        // }

        // Male User Check for Ladies Samabeshi Group
        if ($user->gender_id === 1 && collect($request->samabeshi_groups)->contains(2)) {
            return redirect()->back()->withErrors(['error' => trans('global.application.info.ladiesErrorInfo')]);
        }

        try {
            $this->applicationService->validateUserAgeAndGender($user, $advertisement);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

        try {
            $this->applicationService->validateQualificationForUser($user, $advertisement);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

        try {
            $this->applicationService->validateTrainingAndExperienceForUser($user, $advertisement);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

        $validatedData = $request->validate([
            'samabeshi_groups' => 'array',
        ]);

        $selectedGroups = $validatedData['samabeshi_groups'] ?? [];

        try {
            $payableAmount = $this->applicationService->calculateFee((array) $selectedGroups, (int) $advertisement->id);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

        $applicationData = $request->except('_token', '_method');
        $applicationData['uuid'] = Str::uuid();
        $applicationData['payable_amount'] = $payableAmount;
        $applicationData['advertisement_id'] = $id;
        $applicationId = $request->input('application_id');

        $application = Application::updateOrCreate(['id' => $applicationId], $applicationData);

        $application->samabeshiGroups()->sync($selectedGroups);

        return redirect()->route('application.index')->with('message', 'Application Applied Successfully');
    }

    public function payment($id): View
    {
        // $application = Application::with('advertisement')->findorFail($id);

        // $samabeshiGroups = $application->samabeshiGroups;

        $application = Application::with('advertisement')->findorFail($id);
        $advertisement = $application->advertisement;

        // Get all the samabeshi groups associated with the advertisement
        $advertisementSamabeshiGroups = $advertisement->samabeshiGroups;

        // Get the samabeshi groups on which the user has applied
        $userAppliedSamabeshiGroups = $application->samabeshiGroups;

        // Filter the advertisement samabeshi groups based on user application
        $samabeshiGroups = $advertisementSamabeshiGroups->map(function ($samabeshiGroup) use ($userAppliedSamabeshiGroups) {
            $samabeshiGroup['applied'] = $userAppliedSamabeshiGroups->contains('id', $samabeshiGroup['id']);

            return $samabeshiGroup;
        });

        return view('user.applications.payment', compact('application', 'samabeshiGroups'));
    }

    public function updateAdvAmount(Request $request)
    {
        $selectedGroups = is_array($request->input('samabeshiGroups')) ? $request->input('samabeshiGroups') : [];

        $advertisementId = (int) $request->input('advertisementId');

        $fee = $this->applicationService->calculateFee($selectedGroups, $advertisementId);

        return response()->json($fee);
    }

    public function loadApplications(Request $request)
    {
        $currentDate = Carbon::now()->toDateString();
        $userId = auth()->id();

        $category = $request->input('category');
        $examCenter = $request->input('examCenter');

        $query = Advertisement::query()
            ->with(['category', 'group', 'subGroup', 'qualification', 'applications', 'level'])
            ->whereDate('start_date_en', '<=', $currentDate)
            ->whereDate('penalty_end_date_en', '>=', $currentDate);

        if ($category == 0) {
            $query->whereHas('level', function ($query) {
                $query->where('title', '>=', 6);
            });
        } else {
            $query->whereHas('level', function ($query) {
                $query->where('title', '<', 6);
            });
        }

        if ($examCenter) {
            $query->where('exam_center_id', $examCenter);
        }

        $advertisements = $query->get();

        return view('user.applications.nav.application', compact('advertisements', 'userId'))->render();
    }
}
