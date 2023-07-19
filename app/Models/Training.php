<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use App\Traits\BelongsToUser;
use App\Traits\HasMedia;
use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use HasMedia;
    use HasFactory;
    use SoftDeletes;
    use Multitenantable;
    use BelongsToUser;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'subject',
        'training_institute',
        'date_format',
        'training_from',
        'ad_training_from',
        'training_to',
        'ad_training_to',
        'training_period',
        'percentage',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
