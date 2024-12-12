<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Kartu Kontrol Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-4">
                        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                            Daftar Kartu Kontrol Bimbingan
                        </h2>
                        <a href="{{ route('kartu_kontrol.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                            Tambah Kartu Kontrol
                        </a>
                    </div>

                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Nama Mahasiswa</th>
                                <th class="px-4 py-2">Nama Kegiatan</th>
                                <th class="px-4 py-2">Perkembangan</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kartuKontrols as $kartuKontrol)
                                <tr>
                                    <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $kartuKontrol->mahasiswa->nama }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $kartuKontrol->nama_kegiatan }}</td>
                                    <td class="border px-4 py-2 text-center">{{ ucfirst($kartuKontrol->perkembangan) }}
                                    </td>
                                    <td class="border px-4 py-2 text-center">
                                        <a href="{{ route('kartu_kontrol.edit', $kartuKontrol->id) }}"
                                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded mr-2">
                                            Edit
                                        </a>
                                        <a href="{{ route('kartu_kontrol.show', $kartuKontrol->id) }}"
                                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2">Detail</a>
                                        <form action="{{ route('kartu_kontrol.destroy', $kartuKontrol->id) }}"
                                            method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="border px-4 py-2 text-center">Tidak ada data kartu
                                        kontrol.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
