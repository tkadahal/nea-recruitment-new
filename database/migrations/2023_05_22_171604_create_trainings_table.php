<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained();

            $table->string('subject');
            $table->string('training_institute');

            $table->string('percentage');

            $table->date('training_from');
            $table->date('training_to')->default(now());

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
