<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait MultitenantableForUser
{
    public static function bootMultitenantableForUser(): void
    {
        if (! app()->runningInConsole() && auth()->check()) {
            static::creating(function ($model) {
                $model->user_id = auth()->id();
            });
            static::addGlobalScope('user_id', function (Builder $builder) {
                return $builder->where(function ($query) {
                    if (static::class === \App\Models\User::class) {
                        $query->where('id', auth()->id());
                    } else {
                        $query->where('user_id', auth()->id());
                    }
                    //$query->where('user_id', auth()->id());
                });
            });
        }
    }
}
