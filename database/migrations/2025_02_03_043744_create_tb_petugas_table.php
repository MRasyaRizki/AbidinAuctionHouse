<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('tb_petugas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_petugas');
        $table->string('username')->unique();
        $table->string('password');
        $table->foreignId('id_level')->constrained('tb_level');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_petugas');
    }
};
