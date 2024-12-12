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
        Schema::create('kartu_kontrol_bimbingan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa')->onDelete('cascade'); // Menghubungkan ke tabel mahasiswa
            $table->string('nama_kegiatan');
            $table->text('tujuan_kegiatan');
            $table->text('hambatan');
            $table->text('kesimpulan');
            $table->text('saran');
            $table->enum('perkembangan', ['pkl', 'kkn', 'seminal', 'skripsi']);
            $table->text('rencana_kegiatan_selanjutnya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartu_kontrol_bimbingan');
    }
};
