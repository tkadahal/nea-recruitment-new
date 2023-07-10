<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminRoleTable extends Migration
{
    public function up(): void
    {
        Schema::create('admin_role', function (Blueprint $table) {
            $table->foreignId('admin_id')->constrained();
            $table->foreignId('role_id')->constrained();
        });
    }
}
