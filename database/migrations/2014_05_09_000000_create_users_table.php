<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gender_id')->nullable()->constrained();
            $table->bigInteger('applicant_id')->unique();

            $table->string('sanket_num')->nullable();
            $table->string('name');
            $table->string('name_np')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            $table->bigInteger('mobile_number')->index();

            $table->string('dob_np')->nullable();
            $table->date('dob_en')->index()->nullable();

            $table->string('citizenship_number')->nullable();
            $table->foreignId('citizenship_district_id')->nullable()->constrained('districts');
            $table->string('citizenship_issued_date')->nullable();

            $table->boolean('is_handicapped')->default(0);

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at', 'email']);
        });
    }
}
