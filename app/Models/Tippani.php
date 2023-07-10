<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use App\Traits\BelongsToUser;
use App\Traits\HasMedia;
use App\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tippani extends Model
{
    use HasMedia;
    use HasFactory;
    use SoftDeletes;
    use BelongsToUser;
    use Multitenantable;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'fiscal_year_id',
        'category_id',
        'title',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function fiscalYear(): BelongsTo
    {
        return $this->belongsTo(FiscalYear::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tippaniApprovals(): HasMany
    {
        return $this->hasMany(TippaniApproval::class);
    }

    public function mediaType(): HasManyThrough
    {
        return $this->hasManyThrough(MediaType::class, Media::class, 'resource_id', 'id', 'id', 'media_type_id');
    }

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
