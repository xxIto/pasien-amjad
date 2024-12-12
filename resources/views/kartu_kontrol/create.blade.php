<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Kartu Kontrol Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('kartu_kontrol.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="mahasiswa_id" class="block text-gray-700">Mahasiswa</label>
                            <select name="mahasiswa_id" id="mahasiswa_id" class="w-full mt-2 border-gray-300 rounded-md"
                                required>
                                <option value="">Pilih Mahasiswa</option>
                                @foreach ($mahasiswa as $mhs)
                                    <option value="{{ $mhs->id }}">{{ $mhs->nama }} - {{ $mhs->npm }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="nama_kegiatan" class="block text-gray-700">Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan"
                                class="w-full mt-2 border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="tujuan_kegiatan" class="block text-gray-700">Tujuan Kegiatan</label>
                            <textarea name="tujuan_kegiatan" id="tujuan_kegiatan" rows="4" class="w-full mt-2 border-gray-300 rounded-md"
                                required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="hambatan" class="block text-gray-700">Hambatan</label>
                            <textarea name="hambatan" id="hambatan" rows="4" class="w-full mt-2 border-gray-300 rounded-md" required>{{ old('hambatan', '-') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="kesimpulan" class="block text-gray-700">Kesimpulan</label>
                            <textarea name="kesimpulan" id="kesimpulan" rows="4" class="w-full mt-2 border-gray-300 rounded-md" required>{{ old('kesimpulan', '-') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="saran" class="block text-gray-700">Saran</label>
                            <textarea name="saran" id="saran" rows="4" class="w-full mt-2 border-gray-300 rounded-md" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="perkembangan" class="block text-gray-700">Perkembangan</label>
                            <select name="perkembangan" id="perkembangan" class="w-full mt-2 border-gray-300 rounded-md"
                                required>
                                <option value="pkl">PKL</option>
                                <option value="kkn">KKN</option>
                                <option value="seminal">Seminar</option>
                                <option value="skripsi">Skripsi</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="rencana_kegiatan_selanjutnya" class="block text-gray-700">Rencana Kegiatan
                                Selanjutnya</label>
                            <textarea name="rencana_kegiatan_selanjutnya" id="rencana_kegiatan_selanjutnya" rows="4"
                                class="w-full mt-2 border-gray-300 rounded-md" required></textarea>
                        </div>

                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
