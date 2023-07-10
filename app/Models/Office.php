<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Office extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $primaryKey = 'UPPER_OFFICE_CD';
    // public $incrementing = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ID',
        'OFFICE_CD',
        'OFFICE_DESC',
        'UPPER_OFFICE_CD',
        'STATUS',
        'ZONE',
        'DISTRICT',
        'REGION',
        'GROUP_DETAIL_FLAG',
        'CREATED_AT',
        'UPDATED_AT',
        'DELETED_AT',
    ];

    public function tippaniApprovals(): HasMany
    {
        return $this->hasMany(TippaniApproval::class, 'ID', 'approver_office_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'UPPER_OFFICE_CD', 'OFFICE_CD');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'UPPER_OFFICE_CD', 'OFFICE_CD');
    }

    public function childrenRecursive(): mixed
    {
        return $this->children()->with('childrenRecursive');
    }

    public function descendantsAndSelf(): mixed
    {
        return $this->newNestedSetQuery()
            ->whereDescendantOrSelf($this);
    }
}
