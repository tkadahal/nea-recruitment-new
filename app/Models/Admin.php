<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'last_login_at',
        'last_login_ip',
        'password',
        'exam_center_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function authenticated(Request $request, $user): void
    {
        $user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp(),
        ]);
    }

    public function setPasswordAttribute($input): void
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class
        );
    }

    public function assignRole(Role $role): mixed
    {
        return $this->role()->save($role);
    }

    public function hasRole($role): mixed
    {
        if (is_string($role)) {
            return $this->roles->contains('title', $role);
        }

        return (bool) $role->intersect($this->roles)->count();
    }

    public function advertisements(): BelongsToMany
    {
        return $this->belongsToMany(
            Advertisement::class
        );
    }

    public function examCenter(): BelongsTo
    {
        return $this->belongsTo(ExamCenter::class);
    }
}
