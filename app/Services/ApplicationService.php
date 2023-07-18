<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Advertisement;
use App\Models\Designation;
use App\Models\Qualification;
use App\Models\User;
use Carbon\Carbon;

class ApplicationService
{
    public function validateUserAgeAndGender(User $user, Advertisement $advertisement)
    {
        $birthdate = $user->dob_en;

        if (!$birthdate) {
            throw new \Exception('Birthdate is missing or invalid.');
        }

        $applicantAge = $this->calculateAge($birthdate);
        $designation = $this->getDesignationForUserGender($advertisement, $user->gender_id);

        if ($this->isAgeValid($applicantAge, $designation)) {
            throw new \Exception('Oops !!! Looks like your age doesnot meet the age requirement for this application.');
        }
    }

    public function calculateFee(array $selectedGroups, int $advertisementId): int
    {
        if (count(array_diff($selectedGroups, [1, 2])) > 0) {
            $mediaCount = auth()->user()->media()
                ->where('media_type_id', 5)
                ->count();

            if ($mediaCount === 0) {
                throw new \Exception('Please upload samabeshi document first.');
            }
        }

        $numSelectedGroups = count($selectedGroups);

        if ($numSelectedGroups === 0) {
            throw new \Exception('Payable amount cannot be zero. Select Samabeshi Groups.');
        }

        $advertisement = Advertisement::find($advertisementId);

        $endDate = Carbon::parse($advertisement->end_date_en);
        $currentDate = Carbon::now();

        if ($currentDate > $endDate) {
            return ($advertisement->open_fee + (($numSelectedGroups - 1) * $advertisement->samabeshi_fee)) * 2;
        }

        return $advertisement->open_fee + (($numSelectedGroups - 1) * $advertisement->samabeshi_fee);
    }

    public function calculateAge($birthdate): int
    {
        if (!$birthdate) {
            throw new \Exception('Birthdate is missing or invalid.');
        }

        $birthdate = Carbon::parse($birthdate);
        $currentDate = Carbon::now();

        return $birthdate->diffInYears($currentDate);
    }

    public function isAgeValid($age, $designation): bool
    {
        return $age <= $designation->minimum_age || $age > $designation->maximum_age;
    }

    public function getDesignationForUserGender(Advertisement $advertisement, $genderId): ?Designation
    {
        $title = $advertisement->designation->title;

        $designations = Designation::where('title', $title)->get();

        $designation = $designations->first(function ($designation) use ($genderId) {
            return $designation->gender_id == $genderId;
        });

        if (!$designation) {
            throw new \Exception('Designation not found for the user\'s gender.');
        }

        return $designation;
    }

    public function validateQualificationForUser(User $user, Advertisement $advertisement)
    {
        $userQualifications = $user->educations()->pluck('qualification_id')->toArray();
        $requiredQualificationId = $advertisement->qualification_id;
        $requiredQualificationOrder = Qualification::find($requiredQualificationId)->order;

        $userHighestQualificationOrder = Qualification::whereIn('id', $userQualifications)
            ->max('order');

        if ($userHighestQualificationOrder < $requiredQualificationOrder) {
            throw new \Exception('Qualification required for this advertisement does not match your qualification.');
        }
        // $userQualifications = $user->educations()->pluck('qualification_id')->toArray();

        // $requiredQualificationId = $advertisement->qualification_id;

        // if (!in_array($requiredQualificationId, $userQualifications)) {
        //     throw new \Exception('Qualification required for this advertisement doesnot match your qualification.');
        // }
    }
}
