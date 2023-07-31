<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentVerification extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'rollno',
        'payment_id',
        'is_checked',
        'is_approved',
        'is_rejected',
        'checker',
        'approver',
        'rejector',
        'checked_at',
        'approved_at',
        'rejected_at',
        'created_at',
        'updated_at',
    ];

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }

    public function checker(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'checker');
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'approver');
    }

    public function rejector(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'rejector');
    }

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
