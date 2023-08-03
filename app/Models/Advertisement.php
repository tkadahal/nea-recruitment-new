<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'fiscal_year_id',
        'group_id',
        'sub_group_id',
        'category_id',
        'level_id',
        'position_id',
        'designation_id',
        'open_fee',
        'samabeshi_fee',
        'training_period',
        'experience_period',
        'qualification_id',
        'exam_center_id',
        'advertisement_num',
        'start_date_np',
        'start_date_en',
        'end_date_np',
        'end_date_en',
        'penalty_end_date_np',
        'penalty_end_date_en',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function subGroup(): BelongsTo
    {
        return $this->belongsTo(SubGroup::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function fiscalYear(): BelongsTo
    {
        return $this->belongsTo(FiscalYear::class);
    }

    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class);
    }

    public function qualification(): BelongsTo
    {
        return $this->belongsTo(Qualification::class);
    }

    public function examCenter(): BelongsTo
    {
        return $this->belongsTo(ExamCenter::class);
    }

    public function samabeshiGroups(): BelongsToMany
    {
        return $this->belongsToMany(SamabeshiGroup::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(Admin::class);
    }

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
