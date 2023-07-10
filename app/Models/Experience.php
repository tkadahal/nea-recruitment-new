<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use App\Traits\BelongsToUser;
use App\Traits\HasMedia;
use App\Traits\MultitenantableForUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasMedia;
    use HasFactory;
    use SoftDeletes;
    use BelongsToUser;
    use MultitenantableForUser;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'office',
        'post',
        'level',
        'recruitment_type_id',
        'start_date',
        'end_date',
        'job_description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function recruitmentType(): BelongsTo
    {
        return $this->belongsTo(RecruitmentType::class);
    }

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
