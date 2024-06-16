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
        Schema::create('pustakas', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_budaya', ['tradisi', 'kesenian', 'kuliner']);
            // $table->integer('kategori-daerah')->unique();
            $table->foreignId('pustaka_daerah')->constrained(
                table: 'provinsis',
                indexName: 'pustaka_provinsi_id'
            );
            $table->string('nama_pustaka', length: 255);
            $table->string('penjelasan_pustaka', length: 2555);
            $table->string('gambar_pustaka', length: 555);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pustakas');
    }
};
