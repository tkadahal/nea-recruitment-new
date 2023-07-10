<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('application_samabeshi_group', function (Blueprint $table) {
            $table->foreignId('application_id')->index()->constrained();
            $table->foreignId('samabeshi_group_id')->index()->constrained();
        });
    }
};
