<x-app-layout>
    @section('title', 'Mahasiswa')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-4">
                        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                            Daftar Mahasiswa
                        </h2>
                        <a href="{{ route('mahasiswa.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                            Tambah Mahasiswa
                        </a>
                    </div>

                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">NPM</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswas as $mahasiswa)
                                <tr>
                                    <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $mahasiswa->nama }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $mahasiswa->npm }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        {{-- <a href="{{ route('mahasiswa.show', $mahasiswa) }}"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2">
                                            Detail
                                        </a> --}}
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa) }}"
                                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded mr-2">
                                            Edit
                                        </a>
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="border px-4 py-2 text-center">Tidak ada data mahasiswa.
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
