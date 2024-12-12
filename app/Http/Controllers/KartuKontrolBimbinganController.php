<?php

namespace App\Http\Controllers;

use App\Models\KartuKontrolBimbingan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KartuKontrolBimbinganController extends Controller
{
    public function index()
    {
        $kartuKontrols = KartuKontrolBimbingan::all();
        return view('kartu_kontrol.index', compact('kartuKontrols'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all(); // Ambil data mahasiswa untuk dipilih
        return view('kartu_kontrol.create', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'nama_kegiatan' => 'nullable|string',
            'tujuan_kegiatan' => 'nullable|string',
            'hambatan' => 'nullable|string',
            'kesimpulan' => 'nullable|string',
            'saran' => 'nullable|string',
            'perkembangan' => 'nullable|string',
            'rencana_kegiatan_selanjutnya' => 'nullable|string',
        ]);

        // Mengganti null dengan '-'
        $validated['nama_kegiatan'] = $validated['nama_kegiatan'] ?? '-';
        $validated['tujuan_kegiatan'] = $validated['tujuan_kegiatan'] ?? '-';
        $validated['hambatan'] = $validated['hambatan'] ?? '-';
        $validated['kesimpulan'] = $validated['kesimpulan'] ?? '-';
        $validated['saran'] = $validated['saran'] ?? '-';
        $validated['perkembangan'] = $validated['perkembangan'] ?? '-';
        $validated['rencana_kegiatan_selanjutnya'] = $validated['rencana_kegiatan_selanjutnya'] ?? '-';

        // Menyimpan data ke database
        KartuKontrolBimbingan::create($validated);

        return redirect()->route('kartu_kontrol.index')
            ->with('success', 'Kartu Kontrol Bimbingan berhasil ditambahkan.');
    }

    public function edit(KartuKontrolBimbingan $kartuKontrol)
    {
        $mahasiswa = Mahasiswa::all();
        return view('kartu_kontrol.edit', compact('kartuKontrol', 'mahasiswa'));
    }

    public function update(Request $request, KartuKontrolBimbingan $kartuKontrol)
    {
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswa,id',
            'nama_kegiatan' => 'required|string|max:255',
            'tujuan_kegiatan' => 'required|string',
            'hambatan' => 'required|string',
            'kesimpulan' => 'required|string',
            'saran' => 'required|string',
            'perkembangan' => 'required|in:pkl,kkn,seminal,skripsi',
            'rencana_kegiatan_selanjutnya' => 'required|string'
        ]);

        $kartuKontrol->update($request->all());

        return redirect()->route('kartu_kontrol.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function show($id)
    {
        $kartuKontrol = KartuKontrolBimbingan::findOrFail($id);

        return view('kartu_kontrol.show', compact('kartuKontrol'));
    }

    public function destroy(KartuKontrolBimbingan $kartuKontrol)
    {
        $kartuKontrol->delete();
        return redirect()->route('kartu_kontrol.index')->with('success', 'Data berhasil dihapus.');
    }
}
