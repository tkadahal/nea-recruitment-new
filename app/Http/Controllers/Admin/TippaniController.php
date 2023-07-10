<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTippaniCommentRequest;
use App\Http\Requests\StoreTippaniRequest;
use App\Http\Requests\UpdateTippaniRequest;
use App\Models\Category;
use App\Models\FiscalYear;
use App\Models\Media;
use App\Models\MediaType;
use App\Models\Status;
use App\Models\Tippani;
use App\Models\TippaniApproval;
use App\Services\MediaService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class TippaniController extends Controller
{
    protected $mediaHelper;

    public function __construct(MediaService $mediaService, MediaHelper $mediaHelper)
    {
        parent::__construct($mediaService);
        $this->mediaHelper = $mediaHelper;
    }

    public function index(): View
    {
        abort_if(Gate::denies('tippani_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $users = Tippani::select('user_id')
        //     ->distinct()
        //     ->get()
        //     ->transform(function ($tippani) {
        //         return (object) [
        //             'id' => $tippani->user->id,
        //             'name' => $tippani->user->name,
        //         ];
        //     });

        // $fiscalYears = Tippani::select('fiscal_year_id')
        //     ->distinct()
        //     ->get()
        //     ->transform(function ($tippani) {
        //         return (object) [
        //             'id' => $tippani->fiscalYear->id,
        //             'title' => $tippani->fiscalYear->title,
        //         ];
        //     });

        // $statuses = TippaniApproval::select('status_id')
        //     ->distinct()
        //     ->get()
        //     ->transform(function ($tippaniApproval) {
        //         return (object) [
        //             'id' => $tippaniApproval->status->id,
        //             'title' => $tippaniApproval->status->title,
        //         ];
        //     });

        $user = auth()->user();

        $tippanis = Tippani::with([
            'fiscalYear',
            'category',
            'tippaniApprovals',
            'media',
        ])
            ->when(! auth()->user()->roles->contains(1), function ($query) use ($user) {
                $query->where(function ($query) use ($user) {
                    $query->where('user_id', $user->id)
                        ->orWhere(function ($subquery) use ($user) {
                            $subquery->whereHas('tippaniApprovals', function ($subsubquery) use ($user) {
                                $subsubquery->where('approver_office_id', $user->office_id);
                            });
                        });
                });
            })
            ->latest()
            ->get();

        $tippanis->transform(function ($tippani) use ($user) {
            $tippaniApprovals = $tippani->tippaniApprovals ?? '';
            $latest_status_id = optional($tippani->tippaniApprovals->last())->status_id;
            $is_approver = optional($tippani->tippaniApprovals->last())->approver_office_id;

            $is_creator = $tippani->user_id ?? '';

            // Handling Buttons for Users
            $tippani->show_edit_delete_button =
                (! $tippaniApprovals->count() && $user->id == $is_creator)
                || ($tippaniApprovals->count() && $user->id == $is_creator && $user->office_id == $is_approver && $latest_status_id == 3)
                ? true : false;

            $tippani->show_action_button =
                (! $tippaniApprovals->count() && $user->id == $is_creator)
                || (($tippaniApprovals->count() && $user->id == $is_creator && $user->office_id == $is_approver && $latest_status_id == 3) && ! in_array($latest_status_id, [4, 5]))
                || (($tippaniApprovals->count() && $user->id != $is_creator && $user->office_id == $is_approver && $latest_status_id == 2) && ! in_array($latest_status_id, [4, 5]))
                || (($tippaniApprovals->count() && $user->id != $is_creator && $user->office_id == $is_approver && $latest_status_id == 3) && ! in_array($latest_status_id, [4, 5]))
                ? true : false;

            return $tippani;
        });

        return view('admin.tippanis.index', compact('tippanis', 'user'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('tippani_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaTypes = MediaType::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $fiscalYears = FiscalYear::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.tippanis.create', compact('mediaTypes', 'categories', 'fiscalYears'));
    }

    public function store(StoreTippaniRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('tippani_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $path = $this->mediaService->handleMultipleMediaFromRequest($request, $this->path);

        $tippani = Tippani::create($request->validated());

        if ($path) {
            foreach ($path as $mediaData) {
                $tippani->media()->create($mediaData);
            }
        }

        return redirect()->route(route: 'admin.tippani.index')
            ->with('message', 'Tippani created successfully.');
    }

    public function show(Tippani $tippani): View
    {
        abort_if(Gate::denies('tippani_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tippani->load(['category', 'media.user', 'user', 'tippaniApprovals.approverOffice', 'tippaniApprovals.senderOffice', 'fiscalYear', 'media.mediaType']);

        return view('admin.tippanis.show', compact('tippani'));
    }

    public function edit(Tippani $tippani): View
    {
        abort_if(Gate::denies('tippani_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaTypes = MediaType::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $fiscalYears = FiscalYear::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tippani->load(['category', 'media', 'fiscalYear', 'mediaType']);

        return view('admin.tippanis.edit', compact('tippani', 'mediaTypes', 'categories', 'fiscalYears'));
    }

    public function update(UpdateTippaniRequest $request, Tippani $tippani): RedirectResponse
    {
        abort_if(Gate::denies('tippani_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $path = $this->mediaService->handleMultipleMediaFromRequest($request, $this->path);

        $tippani->update(attributes: $request->validated());

        if ($path) {
            foreach ($path as $mediaData) {
                $tippani->media()->create($mediaData);
            }
        }

        return redirect()->route(route: 'admin.tippani.index')
            ->with('message', 'Tippani updated successfully.');
    }

    public function destroy(Tippani $tippani): RedirectResponse
    {
        abort_if(Gate::denies('tippani_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tippani->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('tippani_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Tippani::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function editMedia(Request $request): RedirectResponse
    {
        $tippani = Tippani::findorFail($request->modelId);
        $mediaItem = $tippani->media()->where('id', $request->mediaId)->firstOrFail();

        $path = $this->mediaService->handleMediaFromRequest($request, $this->path, $mediaItem);

        if ($path) {
            $mediaData = array_merge($path, [
                'media_type_id' => $mediaItem->media_type_id,
                'is_modified' => true,
            ]);
            $tippani->media()->updateOrCreate(['id' => $mediaItem->id], $mediaData);
        }

        return redirect()->back()
            ->with(key: 'message', value: 'Media Item Updated Successfully');
    }

    public function deleteMedia(Request $request): RedirectResponse
    {
        try {
            $mediaItem = Media::findOrFail($request->mediaId);
            MediaHelper::deleteFile($mediaItem);
            $mediaItem->delete();

            return redirect()->back()
                ->with(key: 'success', value: 'Media item deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(key: 'error', value: 'Failed to delete media item: '.$e->getMessage());
        }
    }

    public function sendForAction(Request $request)
    {
        $tippaniId = $request->id;

        $statuses = Status::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tippaniApprovals = TippaniApproval::with('tippani', 'status')->where('tippani_id', $tippaniId)->get();

        $is_creator = Tippani::where('id', $tippaniId)->value('user_id') ?? '';
        $is_sender = optional($tippaniApprovals->last())->sender_office_id ?? '';
        $is_approver = optional($tippaniApprovals->last())->approver_office_id ?? '';
        $latest_status_id = optional($tippaniApprovals->last())->status_id ?? '';

        $statuses = $statuses->when(
            ! $tippaniApprovals->count() && auth()->id() == $is_creator,
            function ($collection) {
                return collect([
                    2 => 'Send For Approval',
                ]);
            }
        )->when(
            $tippaniApprovals->count()
                && optional($tippaniApprovals->last())->sender_office_id == $is_sender
                && in_array(optional($tippaniApprovals->last())->status_id, [2, 3, 4, 5]),
            function ($collection) {
                return collect([
                    0 => 'No Action Needed',
                ]);
            }
        )->when(
            $tippaniApprovals->count()
                && auth()->id() != $is_creator
                && auth()->user()->office_id == $is_approver
                && in_array(optional($tippaniApprovals->last())->status_id, [2, 3])
                && ! in_array(optional($tippaniApprovals->last())->status_id, [4, 5]),
            function ($collection) {
                return collect([
                    2 => 'Send For Approval',
                    3 => 'Send For Modification',
                    4 => 'Approve',
                    5 => 'Reject',
                ]);
            }
        )->when(
            $tippaniApprovals->count()
                && auth()->id() == $is_creator
                && auth()->user()->office_id == $is_approver
                && in_array(optional($tippaniApprovals->last())->status_id, [2, 3])
                && ! in_array(optional($tippaniApprovals->last())->status_id, [4, 5]),
            function ($collection) {
                return collect([
                    2 => 'Send For Approval',
                ]);
            }
        );

        return view('admin.tippanis.comment', compact('tippaniId', 'statuses'));
    }

    public function action(StoreTippaniCommentRequest $request, $id)
    {
        $user = auth()->user();

        if ($request->status_id == 2) {
            $approver_office_id = $user->office->parent->ID;
        } elseif ($request->status_id == 3) {
            $approver_office_id = TippaniApproval::getFirstSender(auth()->user()->office_id, $id);
        } else {
            $approver_office_id = null;
        }

        $approval = new TippaniApproval([
            'tippani_id' => $id,
            'sender_office_id' => $user->office_id,
            'approver_office_id' => $approver_office_id,
            'status_id' => $request->status_id,
            'comment' => $request->input('comment'),
        ]);
        $approval->save();

        return redirect()->route('admin.tippani.index');
    }

    public function addRevised(Request $request, $tippaniId)
    {
        $tippani = Tippani::findOrFail($tippaniId);

        $request->merge(['mediaType' => 1]);

        $path = $this->mediaService->handleMediaFromRequest($request, $this->path);

        if ($path) {
            $tippani->media()->create($path);
        }

        return redirect()->back()
            ->with(key: 'message', value: 'Media Item Updated Successfully');
    }
}
