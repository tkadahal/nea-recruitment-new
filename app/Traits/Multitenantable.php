<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Multitenantable
{
    public static function bootMultitenantable(): void
    {
        if (! app()->runningInConsole() && auth()->check()) {
            $isAdmin = auth('admin')->user()->roles->contains(1);
            static::creating(function ($model) {
                $model->user_id = auth('admin')->id();
            });
            static::addGlobalScope('user_id', function (Builder $builder) use ($isAdmin) {
                if (! $isAdmin) {
                    return $builder->where(function ($query) {
                        $query->where('user_id', auth('admin')->id())
                            ->orWhereHas('tippaniApprovals', function ($subquery) {
                                $subquery->where('approver_office_id', auth('admin')->user()->office_id);
                            });
                    });
                }
                // else {
                //     $builder->withoutGlobalScope('user_id');
                //     return $builder;
                // }
            });
        }
    }
}
