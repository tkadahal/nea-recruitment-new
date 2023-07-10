<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->constrained();
            $table->foreignId('group_id')->constrained();
            $table->foreignId('sub_group_id')->constrained();
            $table->foreignId('level_id')->constrained();

            $table->foreignId('designation_id')->constrained();
            $table->foreignId('qualification_id')->constrained();
            $table->foreignId('exam_center_id')->constrained();
            $table->foreignId('fiscal_year_id')->constrained();

            $table->string('advertisement_num');

            $table->integer('open_fee');
            $table->integer('samabeshi_fee')->nullable();
            $table->integer('training_period')->nullable();
            $table->integer('experience_period')->nullable();

            $table->date('start_date_np');
            $table->date('start_date_en');
            $table->date('end_date_np');
            $table->date('end_date_en');
            $table->date('penalty_end_date_np');
            $table->date('penalty_end_date_en');

            $table->boolean('active')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
