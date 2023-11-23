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
            $table->enum('gender', ['Laki - Laki', 'Perempuan', 'Tidak Ingin Memberi Tahu'])->default('Laki - Laki');
            $table->string('alamat', 100)->nullable(true);
            $table->string('hobi', 100);
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
