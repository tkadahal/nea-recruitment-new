<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('application_fees', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->integer('open')->default(0);
            $table->integer('female')->default(0);
            $table->integer('janajati')->default(0);
            $table->integer('madhesi')->default(0);
            $table->integer('dalit')->default(0);
            $table->integer('disabled')->default(0);
            $table->integer('rural')->default(0);

            $table->boolean('active')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
