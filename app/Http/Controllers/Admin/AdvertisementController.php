<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use App\Models\Level;
use App\Models\Category;
use App\Models\Position;
use App\Models\SubGroup;
use Illuminate\View\View;
use App\Models\ExamCenter;
use App\Models\FiscalYear;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Qualification;
use App\Models\SamabeshiGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;

class AdvertisementController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('advertisement_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advertisements = Advertisement::with(
            [
                'fiscalYear',
                'category',
                'group',
                'subGroup',
                'level',
                'position',
            ]
        )->get();

        return view('admin.advertisements.index', compact('advertisements'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('advertisement_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examCenters = ExamCenter::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $groups = Group::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subGroups = SubGroup::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $levels = Level::all()->unique('title')->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $positions = Position::all()->unique('title')->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $designations = Designation::all()->unique('title')->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $qualifications = Qualification::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $fiscalYears = FiscalYear::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $samabeshiGroups = SamabeshiGroup::all()->pluck('title', 'id');

        return view('admin.advertisements.create', compact('examCenters', 'groups', 'subGroups', 'categories', 'levels', 'positions', 'designations', 'qualifications', 'samabeshiGroups', 'fiscalYears'));
    }

    public function store(StoreAdvertisementRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('advertisement_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advertisement = Advertisement::create($request->validated());

        $advertisement->samabeshiGroups()->attach($request->input('samabeshi_groups'));

        return redirect()->route(route: 'admin.advertisement.index')
            ->with('message', 'advertisement created successfully.');
    }

    public function show(Advertisement $advertisement): View
    {
        abort_if(Gate::denies('advertisement_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advertisement->load(['group', 'subGroup', 'category', 'designation', 'level', 'position', 'qualification', 'fiscalYear']);

        return view('admin.advertisements.show', compact('advertisement'));
    }

    public function edit(Advertisement $advertisement): View
    {
        abort_if(Gate::denies('advertisement_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examCenters = ExamCenter::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $groups = Group::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subGroups = SubGroup::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $levels = Level::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $positions = Position::all()->unique('title')->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $designations = Designation::all()->unique('title')->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $qualifications = Qualification::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $fiscalYears = FiscalYear::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $samabeshiGroups = SamabeshiGroup::all();

        $advertisement->load(
            [
                'examCenter',
                'group',
                'subGroup',
                'category',
                'designation',
                'qualification',
                'samabeshiGroups',
                'level',
                'position',
                'fiscalYear',
            ]
        );

        $selectedSamabeshiGroups = $advertisement->samabeshiGroups;

        $samabeshiGroups = $samabeshiGroups->map(function ($samabeshiGroup) use ($selectedSamabeshiGroups) {
            $samabeshiGroup['applied'] = $selectedSamabeshiGroups->contains('id', $samabeshiGroup['id']);

            return $samabeshiGroup;
        });

        return view('admin.advertisements.edit', compact('advertisement', 'examCenters', 'groups', 'subGroups', 'categories', 'levels', 'positions', 'designations', 'qualifications', 'samabeshiGroups', 'selectedSamabeshiGroups', 'fiscalYears'));
    }

    public function update(UpdateAdvertisementRequest $request, Advertisement $advertisement): RedirectResponse
    {
        abort_if(Gate::denies('advertisement_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advertisement->update($request->validated());

        $advertisement->samabeshiGroups()->sync($request->input('samabeshi_groups'));

        return redirect()->route(route: 'admin.advertisement.index')
            ->with('message', 'advertisement updated successfully.');
    }

    public function destroy(Advertisement $advertisement): RedirectResponse
    {
        abort_if(Gate::denies('advertisement_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advertisement->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('advertisement_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Advertisement::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function getGroups($categoryId)
    {
        $groups = Group::where('category_id', $categoryId)->pluck('title', 'id');

        return response()->json($groups);
    }

    public function getSubGroups($groupId)
    {
        $subGroups = SubGroup::where('group_id', $groupId)->pluck('title', 'id');

        return response()->json($subGroups);
    }

    public function getLevels($groupId, $subGroupId)
    {
        $levels = Level::where('group_id', $groupId)
            ->whereIn('id', function ($query) use ($groupId, $subGroupId) {
                $query->select('level_id')
                    ->from('positions')
                    ->where('group_id', $groupId)
                    ->where('sub_group_id', $subGroupId);
            })
            ->pluck('title', 'id');

        return response()->json($levels);
    }


    public function getPositions($subGroupId, $levelId)
    {
        $positions = Position::where('sub_group_id', $subGroupId)
            ->where('level_id', $levelId)
            ->pluck('title', 'id');

        return response()->json($positions);
    }
}
