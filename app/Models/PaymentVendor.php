<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Builders\ModelBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentVendor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'payment_gateway',
        'merchant_id',
        'merchant_code',
        'app_id',
        'app_name',
        'token_url',
        'checkout_url',
        'verify_url',
        'recheck_url',
        'username',
        'verify_password',
        'cert_password',
        'public_key',
        'secret_key',
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
