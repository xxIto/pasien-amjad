<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKontrolBimbingan extends Model
{
    use HasFactory;

    // protected $table = 'kartu_kontrol_bimbingan';

    protected $fillable = [
        'mahasiswa_id',
        'nama_kegiatan',
        'tujuan_kegiatan',
        'hambatan',
        'kesimpulan',
        'saran',
        'perkembangan',
        'rencana_kegiatan_selanjutnya'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
