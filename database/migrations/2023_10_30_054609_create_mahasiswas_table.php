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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10);
            $table->string('fullname', 100);
            $table->integer('umur');
            $table->enum('jeniskelamin', ['Laki - Laki', 'Perempuan', 'Tidak Ingin Memberi Tahu']);
            $table->string('fakultas', 50);
            $table->string('prodi', 50);
            $table->string('email', 50);
            $table->string('hobi', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};