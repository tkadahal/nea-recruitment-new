<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sub_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->index()->constrained();

            $table->string('title');

            $table->boolean('active')->default(1);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
