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
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
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
        'institution',
        'qualification_id',
        'university_id',
        'division_id',
        'percentage',
        'pass_year',
        'date_format',
        'transcript_issue_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }

    public function qualification(): BelongsTo
    {
        return $this->belongsTo(Qualification::class);
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
