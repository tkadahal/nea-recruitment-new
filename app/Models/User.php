<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasMedia;
    use HasFactory;
    use Notifiable;
    use SoftDeletes;
    use HasApiTokens;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'sanket_num',
        'name',
        'name_np',
        'email',
        'mobile_number',
        'dob_np',
        'dob_en',
        'gender_id',
        'is_handicapped',
        'citizenship_number',
        'citizenship_district_id',
        'citizenship_issued_date',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function ($user) {
            $lastUser = static::orderByDesc('id')->first();

            if ($lastUser) {
                $user->applicant_id = $lastUser->applicant_id + 1;
            } else {
                $user->applicant_id = 100001;
            }
        });
    }

    public function setPasswordAttribute($input): void
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function citizenshipDistrict(): BelongsTo
    {
        return $this->belongsTo(District::class, 'citizenship_district_id');
    }

    public function contact(): HasOne
    {
        return $this->hasOne(Contact::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function trainings(): HasMany
    {
        return $this->hasMany(Training::class);
    }

    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }
}
