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
        Schema::create('tabel', function (Blueprint $table) {
            $table->string('ip');
            $table->unique('ip');
            $table->string('unit');
            $table->string('alamat');
            $table->string('os');
            $table->string('admin');
            $table->integer('toka');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel');
    }
};
