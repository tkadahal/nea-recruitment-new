<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index()->constrained();
            $table->foreignId('admin_id')->nullable()->index()->constrained();

            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('title');
            $table->text('description')->nullable();

            $table->enum('answered', ['0', '1'])->default(0);

            $table->boolean('active')->default(1);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);

            $table->foreign('parent_id')->references('id')->on('supports')->onDelete('cascade');
        });
    }
};
