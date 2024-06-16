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
        Schema::create('tokohs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tokoh_daerah')->constrained(
                table: 'provinsis', 
                indexName: 'tokoh_provinsi_id'
            );
            $table->string('nama_tokoh', length: 255);
            $table->date('tanggal_lahir');
            $table->string('penjelasan_tokoh', length: 2555);
            $table->string('gambar_tokoh', length: 555);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokohs');
    }
};
