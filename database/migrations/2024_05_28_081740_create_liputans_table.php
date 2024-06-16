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
        Schema::create('liputans', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_budaya', ['tradisi', 'kesenian', 'kuliner']);
            $table->foreignId('liputan_daerah')->constrained(
                table: 'provinsis',
                indexName: 'liputan_provinsi_id'
            );
            $table->string('nama_liputan', length: 255);
            $table->string('penjelasan_liputan', length: 2555);
            $table->string('gambar_liputan', length: 555);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liputans');
    }
};
