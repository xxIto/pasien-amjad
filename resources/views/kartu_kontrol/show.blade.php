<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Kartu Kontrol Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-4">
                        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                            Detail Kartu Kontrol Bimbingan
                        </h2>
                        <a href="{{ route('kartu_kontrol.index') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                            Kembali ke Daftar
                        </a>
                    </div>

                    <div class="space-y-4">
                        <p><strong>Nama Kegiatan:</strong> {{ $kartuKontrol->nama_kegiatan }}</p>
                        <p><strong>Tujuan Kegiatan:</strong> {{ $kartuKontrol->tujuan_kegiatan }}</p>
                        <p><strong>Hambatan:</strong> {{ $kartuKontrol->hambatan }}</p>
                        <p><strong>Kesimpulan:</strong> {{ $kartuKontrol->kesimpulan }}</p>
                        <p><strong>Saran:</strong> {{ $kartuKontrol->saran }}</p>
                        <p><strong>Perkembangan:</strong> {{ ucfirst($kartuKontrol->perkembangan) }}</p>
                        <p><strong>Rencana Kegiatan Selanjutnya:</strong>
                            {{ $kartuKontrol->rencana_kegiatan_selanjutnya }}</p>
                        <p><strong>Nama Mahasiswa:</strong> {{ $kartuKontrol->mahasiswa->nama }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
