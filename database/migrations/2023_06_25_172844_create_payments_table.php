<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->index()->constrained();

            $table->string('reference_id')->index();
            $table->string('transaction_id')->index()->nullable();

            $table->float('amount');
            $table->float('paid_amount')->nullable();

            $table->enum('payment_status', ['0', '1', '2', '3'])->default(0);
            $table->enum('payment_gateway', ['esewa', 'connectips', 'imepay', 'khalti']);

            $table->timestamps();
        });
    }
};
