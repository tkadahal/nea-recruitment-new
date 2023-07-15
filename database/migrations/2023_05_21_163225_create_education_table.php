<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained();
            $table->foreignId('qualification_id')->index()->constrained();
            $table->foreignId('university_id')->index()->constrained();
            $table->foreignId('division_id')->index()->constrained();

            $table->string('institution');
            $table->string('percentage');

            $table->enum('date_format', ['BS', 'AD']);

            $table->string('transcript_issue_date')->nullable();

            $table->string('pass_year');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
