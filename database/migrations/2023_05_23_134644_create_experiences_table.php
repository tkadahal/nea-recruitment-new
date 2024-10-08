<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained();
            $table->foreignId('recruitment_type_id')->index()->constrained();

            $table->string('office');
            $table->string('post');
            $table->string('level');

            $table->enum('date_format', ['BS', 'AD']);

            $table->string('start_date');
            $table->string('end_date');

            $table->date('ad_experience_from')->index()->nullable();
            $table->date('ad_experience_to')->index()->nullable();

            $table->bigInteger('experience_period');

            $table->text('job_description')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
