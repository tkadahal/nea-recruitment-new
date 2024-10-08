<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->index()->constrained();

            $table->integer('rollno')->default(0);

            $table->boolean('is_checked')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_rejected')->default(false);

            $table->foreignId('checker')->nullable()->index()->constrained('admins');
            $table->foreignId('approver')->nullable()->index()->constrained('admins');
            $table->foreignId('rejector')->nullable()->index()->constrained('admins');

            $table->timestamp('checked_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->timestamps();
        });
    }
};
