<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Application;
use App\Models\ExamCenter;
use App\Services\ApplicationService;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

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

        $examCenters = ExamCenter::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $advertisements = Advertisement::query()
            ->with(['category', 'group', 'subGroup', 'qualification', 'applications'])
            ->whereDate('start_date_en', '<=', $currentDate)
            ->whereDate('penalty_end_date_en', '>=', $currentDate)
            ->get();

        return view('user.applications.index', compact('advertisements', 'examCenters', 'userId'));


        // $currentDate = Carbon::now()->toDateString();
        // $showApplied = request()->query('show_applied');
        // $userId = auth()->id();

        // $query = Advertisement::query()
        //     ->with(['category', 'group', 'subGroup', 'qualification', 'applications.payments'])
        //     ->whereDate('start_date_en', '<=', $currentDate)
        //     ->whereDate('penalty_end_date_en', '>=', $currentDate);

        // if ($showApplied) {
        //     $query->whereHas('applications', function ($query) use ($userId) {
        //         $query->where('user_id', $userId);
        //     });
        // } else {
        //     $query->whereDoesntHave('applications', function ($query) use ($userId) {
        //         $query->where('user_id', $userId);
        //     });
        // }

        // $advertisements = $query->get();

        // return view('user.applications.index', compact('advertisements'));

        // $currentDate = now()->toDateString();

        // $query = Advertisement::query()
        //     ->with(['category', 'group', 'subGroup', 'qualification', 'applications' => function ($query) {
        //         $query->where('active', true);
        //     }])
        //     ->whereDate('start_date_en', '<=', $currentDate)
        //     ->whereDate('penalty_end_date_en', '>=', $currentDate)
        //     ->has('applications', '>', 0);

        // $applications = $query->get();

        // dd($applications);

        // $query = Advertisement::query()
        //     ->with(['category', 'group', 'subGroup', 'qualification', 'applications'])
        //     ->whereDate('start_date_en', '<=', $currentDate)
        //     ->whereDate('penalty_end_date_en', '>=', $currentDate)
        //     ->whereDoesntHave('applications');
        // $applications = $query->get();

        // return view('user.applications.index', compact('applications'));

        // dd(request());
        // $currentDate = Carbon::now()->toDateString();
        // $applications = Advertisement::query()
        //     ->with(['category', 'group', 'subGroup', 'qualification', 'applications'])
        //     ->whereDate('start_date_en', '<=', $currentDate)
        //     ->whereDate('penalty_end_date_en', '>=', $currentDate)
        //     ->when(request()->query('show_applied'), function ($query) {
        //         $query->whereHas('applications', function ($subQuery) {
        //             $subQuery->where('user_id', auth()->id());
        //         });
        //     })
        //     ->get();
        // return view('user.applications.index', compact('applications'));

        // $currentDate = Carbon::now()->toDateString();

        // $applications = Advertisement::query()
        //     ->with(['category', 'group', 'subGroup', 'qualification', 'applications'])
        //     ->whereDate('start_date_en', '<=', $currentDate)
        //     ->whereDate('penalty_end_date_en', '>=', $currentDate)
        //     ->get();

        // $userApplications = $applications->map(function ($application) {
        //     $existingApplication = $application->applications
        //         ->where('user_id', auth()->id())
        //         ->first();

        //     $application->userApplication = $existingApplication;

        //     return $application;
        // });

        // return view('user.applications.index', compact('applications'));
    }

    public function show(string $id): View
    {
        $application = Advertisement::with('category', 'group', 'subGroup', 'qualification')->findorFail($id);

        $samabeshiGroups = $application->samabeshiGroups;

        $user = auth()->user();

        $userSamabeshiMedia = $user->media()->where('media_type_id', 5)->get();

        return view('user.applications.show', compact('application', 'samabeshiGroups', 'user', 'userSamabeshiMedia'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $advertisement = Advertisement::find($id);
        $user = auth()->user();

        // Already Applied Check
        if ($user->applications()->where('advertisement_id', $advertisement->id)->exists()) {
            return redirect()->back()->withErrors(['error' => trans('global.application.info.alreadAppliedInfo')]);
        }

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

        $validatedData = $request->validate([
            'samabeshi_groups' => 'array',
        ]);

        $selectedGroups = $validatedData['samabeshi_groups'] ?? [];

        try {
            $payableAmount = $this->applicationService->calculateFee((array) $selectedGroups, (int) $advertisement->id);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

        // if ($payableAmount === 0) {
        //     return redirect()->back()->withErrors(['error' => 'Payable amount cannot be zero.']);
        // }

        $applicationData = $request->all();
        $applicationData['uuid'] = Str::uuid();
        $applicationData['payable_amount'] = $payableAmount;
        $applicationData['advertisement_id'] = $id;

        $application = Application::create($applicationData);

        $application->samabeshiGroups()->attach($selectedGroups);

        return redirect('/application?show_applied=1');
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
            ->with(['category', 'group', 'subGroup', 'qualification', 'applications'])
            ->whereDate('start_date_en', '<=', $currentDate)
            ->whereDate('penalty_end_date_en', '>=', $currentDate);

        if ($category == 0) {
            $query->where('designation_id', '>=', 6);
        } else {
            $query->where('designation_id', '<', 6);
        }

        if ($examCenter) $query->where('exam_center_id', $examCenter);

        $advertisements = $query->get();

        return view('user.applications.nav.application', compact('advertisements', 'userId'))->render();
    }
}
