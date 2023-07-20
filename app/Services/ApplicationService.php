<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Advertisement;
use App\Models\Designation;
use App\Models\User;
use Carbon\Carbon;

class ApplicationService
{
    public function validateUserAgeAndGender(User $user, Advertisement $advertisement)
    {
        if (! empty($user->sanket_num)) {
            return;
        }

        $designation = $this->getDesignationForUserGender($advertisement, $user->gender_id);

        if ($user->is_handicapped) {
            $designation->maximum_age = 40;
        }

        $birthdate = $user->dob_en;

        if (! $birthdate) {
            throw new \Exception(trans('global.application.info.missingbirthDateInfo'));
        }

        $applicantAge = $this->calculateAge($birthdate, $advertisement);

        if ($this->isAgeValid($applicantAge, $designation)) {
            throw new \Exception(trans('global.application.info.invalidAgeInfo'));
        }
    }

    public function calculateFee(array $selectedGroups, int $advertisementId): int
    {
        if (count(array_diff($selectedGroups, [1, 2])) > 0) {
            $mediaCount = auth()->user()->media()
                ->where('media_type_id', 5)
                ->count();

            if ($mediaCount === 0) {
                throw new \Exception(trans('global.application.info.samabeshiErrorInfo'));
            }
        }

        $numSelectedGroups = count($selectedGroups);

        if ($numSelectedGroups === 0) {
            $selectedGroups = [];
            abort(422, trans('global.application.info.zeroAmountError'));
        }

        $advertisement = Advertisement::find($advertisementId);

        $endDate = Carbon::parse($advertisement->end_date_en);
        $currentDate = Carbon::now();

        if ($currentDate > $endDate) {
            return ($advertisement->open_fee + (($numSelectedGroups - 1) * $advertisement->samabeshi_fee)) * 2;
        }

        return $advertisement->open_fee + (($numSelectedGroups - 1) * $advertisement->samabeshi_fee);
    }

    public function calculateAge($birthdate, Advertisement $advertisement): float
    {
        if (! $birthdate) {
            throw new \Exception(trans('global.application.info.missingbirthDateInfo'));
        }

        $birthdate = Carbon::parse($birthdate);
        $advertisementDate = Carbon::parse($advertisement->end_date_en);

        // return $birthdate->diffInYears($advertisementDate);
        $age = $birthdate->diffInYears($advertisementDate) +
            ($birthdate->diff($advertisementDate)->days / 365);

        return $age;
    }

    public function isAgeValid($age, $designation): bool
    {
        // dd($age, $designation->minimum_age, $designation->maximum_age);
        return $age < $designation->minimum_age || $age < $designation->maximum_age;
    }

    public function getDesignationForUserGender(Advertisement $advertisement, $genderId): ?Designation
    {
        $title = $advertisement->designation->title;

        $designations = Designation::where('title', $title)->get();

        $designation = $designations->first(function ($designation) use ($genderId) {
            return $designation->gender_id == $genderId;
        });

        if (! $designation) {
            throw new \Exception(trans('global.application.info.desinationNotFoundInfo'));
        }

        return $designation;
    }

    public function validateQualificationForUser(User $user, Advertisement $advertisement)
    {
        // $userQualifications = $user->educations()->pluck('qualification_id')->toArray();
        // $requiredQualificationId = $advertisement->qualification_id;
        // $requiredQualificationOrder = Qualification::find($requiredQualificationId)->order;

        // $userHighestQualificationOrder = Qualification::whereIn('id', $userQualifications)
        //     ->max('order');

        // if ($userHighestQualificationOrder < $requiredQualificationOrder) {
        //     throw new \Exception('Qualification required for this advertisement does not match your qualification.');
        // }
        $userQualifications = $user->educations()->pluck('qualification_id')->toArray();

        $requiredQualificationId = $advertisement->qualification_id;

        if (! in_array($requiredQualificationId, $userQualifications)) {
            throw new \Exception(trans('global.application.info.qualificationInfo'));
        }
    }
}
