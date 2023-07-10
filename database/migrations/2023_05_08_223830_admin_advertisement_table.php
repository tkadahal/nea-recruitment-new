<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_advertisement', function (Blueprint $table) {
            $table->foreignId('admin_id')->index()->constrained();
            $table->foreignId('advertisement_id')->index()->constrained();
        });
    }
};
