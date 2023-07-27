<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->boolean('active')->default(1);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
