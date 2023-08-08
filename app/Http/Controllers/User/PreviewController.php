<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class PreviewController extends Controller
{
    public function index(): View
    {
        $user = User::query()
            ->with([
                'educations',
                'contact',
                'contact.permaProvince',
                'contact.tempProvince',
                'contact.permaDistrict',
                'contact.tempDistrict',
                'contact.permaMunicipality',
                'contact.tempMunicipality',
                'contact.fatherCountry',
                'educations.media',
                'educations.media.mediaType',
                'trainings',
                'trainings.media',
                'trainings.media.mediaType',
                'experiences',
                'experiences.media',
                'experiences.media.mediaType',
                'media',
                'media.mediaType',
            ])
            ->where('id', auth()->id())
            ->first();

        return view('user.preview', compact('user'));
    }
}
