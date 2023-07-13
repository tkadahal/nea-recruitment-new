<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained();
            $table->foreignId('perma_province')->index()->constrained('provinces');
            $table->foreignId('perma_district')->index()->constrained('districts');
            $table->foreignId('perma_municipality')->index()->constrained('municipalities');
            $table->string('perma_tol');
            $table->integer('perma_ward_number');

            $table->foreignId('temp_province')->index()->constrained('provinces');
            $table->foreignId('temp_district')->index()->constrained('districts');
            $table->foreignId('temp_municipality')->index()->constrained('municipalities');
            $table->string('temp_tol');
            $table->integer('temp_ward_number');

            $table->foreignId('father_country_id')->index()->constrained('countries');
            $table->foreignId('mother_country_id')->index()->constrained('countries');
            $table->foreignId('grandfather_country_id')->index()->constrained('countries');
            $table->foreignId('spouse_country_id')->nullable()->constrained('countries');

            $table->string('phone_number')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('grandfather_name');
            $table->string('spouse_name')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }
};
