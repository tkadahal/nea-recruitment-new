<?php

declare(strict_types=1);

namespace App\Http\Controllers\Form;

use App\Helpers\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\District;
use App\Models\Gender;
use App\Models\MediaType;
use App\Services\MediaService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    protected $mediaHelper;

    protected string $path;

    public function __construct(MediaService $mediaService, MediaHelper $mediaHelper)
    {
        parent::__construct($mediaService);
        $this->mediaHelper = $mediaHelper;
        $this->path = (string) auth()->id();
    }

    public function index(): View
    {
        $genders = Gender::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $districts = District::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $user = auth()->user()->load(['gender', 'district', 'media']);

        return view('form.personals', compact('user', 'genders', 'districts'));
    }

    public function store(UpdateUserRequest $request): RedirectResponse
    {
        $user = auth()->user();
        $photoItem = $user->media()->where('media_type_id', MediaType::photo)->first() ?? null;
        $signItem = $user->media()->where('media_type_id', MediaType::sign)->first() ?? null;
        $citizenshipFrontItem = $user->media()->where('media_type_id', MediaType::citizenshipFront)->first() ?? null;
        $citizenshipBackItem = $user->media()->where('media_type_id', MediaType::citizenshipBack)->first() ?? null;

        if ($request->hasFile('photo')) {
            if (isset($photoItem) && ! empty($photoItem)) {
                MediaHelper::deleteFile($photoItem);
            }
            $path = MediaHelper::saveMedia(MediaType::photo, $request->file('photo'), auth()->id());

            $user->media()->create($path);
        }

        if ($request->hasFile('sign')) {
            if (isset($signItem) && ! empty($signItem)) {
                MediaHelper::deleteFile($signItem);
            }
            $path = MediaHelper::saveMedia(MediaType::sign, $request->file('sign'), auth()->id());

            $user->media()->create($path);
        }

        if ($request->hasFile('citizenship_front')) {
            if (isset($citizenshipFrontItem) && ! empty($citizenshipFrontItem)) {
                MediaHelper::deleteFile($citizenshipFrontItem);
            }
            $path = MediaHelper::saveMedia(MediaType::citizenshipFront, $request->file('citizenship_front'), auth()->id());

            $user->media()->create($path);
        }

        if ($request->hasFile('citizenship_back')) {
            if (isset($citizenshipBackItem) && ! empty($citizenshipBackItem)) {
                MediaHelper::deleteFile($citizenshipBackItem);
            }
            $path = MediaHelper::saveMedia(MediaType::citizenshipBack, $request->file('citizenship_back'), auth()->id());

            $user->media()->create($path);
        }

        $user->updateOrCreate(['id' => $user->id], $request->validated());

        return redirect()->back();
    }
}
