<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('advertisement_samabeshi_group', function (Blueprint $table) {
            $table->foreignId('advertisement_id')->constrained();
            $table->foreignId('samabeshi_group_id')->constrained();
        });
    }
};
