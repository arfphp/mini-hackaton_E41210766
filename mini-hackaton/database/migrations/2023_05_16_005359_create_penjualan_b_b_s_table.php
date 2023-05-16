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
        Schema::create('penjualan_b_b_s', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('jenis_batu_bata')->unique();
            $table->integer('harga');
            $table->integer('stock');
            $table->integer('terjual');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan_b_b_s');
    }
};
