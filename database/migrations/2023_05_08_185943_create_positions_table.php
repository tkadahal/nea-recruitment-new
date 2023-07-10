<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->index()->constrained();
            $table->foreignId('group_id')->index()->constrained();
            $table->foreignId('level_id')->index()->constrained();

            $table->string('title');

            $table->boolean('active')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
