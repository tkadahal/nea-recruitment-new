<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaType extends Model
{
    use HasFactory;
    use SoftDeletes;

    const photo = '1';

    const sign = '2';

    const citizenshipFront = '3';

    const citizenshipBack = '4';

    const samabeshi = '5';

    const character = '6';

    const transcript = '7';

    const training = '8';

    const experience = '9';

    const equivalence = '10';

    const council = '11';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function medias(): HasMany
    {
        return $this->hasMany(Media::class);
    }

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
