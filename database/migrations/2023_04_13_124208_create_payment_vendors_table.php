<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_vendors', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('payment_gateway');
            $table->string('merchant_id')->nullable();
            $table->string('merchant_code')->nullable();
            $table->string('app_id')->nullable();
            $table->string('app_name')->nullable();
            $table->string('token_url')->nullable();
            $table->string('checkout_url')->nullable();
            $table->string('verify_url')->nullable();
            $table->string('recheck_url')->nullable();
            $table->string('username')->nullable();
            $table->string('verify_password')->nullable();
            $table->string('cert_password')->nullable();
            $table->string('public_key')->nullable();
            $table->string('secret_key')->nullable();

            $table->boolean('active')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
