<?php

declare(strict_types=1);

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

class NotMatchingMobileNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $loggedInUser = Auth::user();
        $loggedInUserMobileNumber = $loggedInUser->mobile_number;

        if (($value == $loggedInUserMobileNumber)) {
            $fail(trans('uservalidation.not_own_number'));
        }
    }
}
