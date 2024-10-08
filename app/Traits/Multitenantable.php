<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Multitenantable
{
    public static function bootMultitenantable()
    {
        if (auth()->check()) {

            static::creating(function ($model) {
                $model->user_id = auth()->id();
            });

            static::addGlobalScope('user_id', function (Builder $builder) {
                return $builder->where(function ($query) {
                    if (static::class === \App\Models\User::class) {
                        $query->where('user_id', auth()->id());
                    }
                });
            });
        }
    }
}
