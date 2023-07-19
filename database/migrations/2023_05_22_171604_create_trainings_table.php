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

            $table->string('percentage')->nullable();

            $table->enum('date_format', ['BS', 'AD']);

            $table->string('training_from');
            $table->string('training_to');

            $table->date('ad_training_from')->nullable();
            $table->date('ad_training_to')->nullable();

            $table->bigInteger('training_period');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
