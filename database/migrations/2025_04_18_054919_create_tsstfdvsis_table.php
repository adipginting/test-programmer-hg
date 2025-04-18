<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tsstfdvsis', function (Blueprint $table) {
            $table->char('kddvsi', 2)->primary();
            $table->char('nama', 100);
            $table->double('dvsic', 3, 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsstfdvsis');
    }
};
