<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_id',
        'reference_id',
        'transaction_id',
        'amount',
        'paid_amount',
        'payment_status',
        'payment_gateway',
        'created_at',
        'updated_at',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }

    public function paymentVerification(): HasOne
    {
        return $this->hasOne(PaymentVerification::class);
    }

    public function newEloquentBuilder($query): ModelBuilder
    {
        return new ModelBuilder(
            $query,
        );
    }
}
