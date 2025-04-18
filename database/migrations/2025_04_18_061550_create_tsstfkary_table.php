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
        Schema::create('tsstfkary', function (Blueprint $table) {
            $table->char('kdkary', 9)->primary();
            $table->char('nama', 100);
            $table->string('email', 255);
            $table->char('phone', 14);
            $table->char('kddvsi', 2)->unique();
            $table->date('dob');
            $table->date('regdtm');

            $table->foreign('kddvsi')
                ->references('kddvsi')
                ->on('tsstfdvsi')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsstfkary');
    }
};
