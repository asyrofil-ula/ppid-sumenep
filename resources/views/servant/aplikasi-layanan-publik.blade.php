@extends('app')

@section('title', 'Aplikasi Layanan Publik')

@section('content')
<div class="my-20 px-4">
    <div class="flex items-center p-4 mt-20  justify-center min-h-[100px]">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('logo/logo_ppid.png') }}" alt="Logo" class="h-12">
        </div>
        <div class="border-l-2 border-gray-400 h-10 mx-4"></div>
        <p class="text-lg font-bold text-gray-700">Sistem Informasi dan <br> Dokumentasi Publik</p>
    </div>
    <hr class="border-t-2 border-gray-400 w-full my-4">
    <div class="max-w-screen-lg mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
        
        <!-- FORM -->
        <div class="card w-full bg-white p-6 shadow-md border-l-4 border-red-500 rounded-md flex flex-col items-center space-y-4 md:space-y-6 md:space-x-0 justify-center">
            <div class="flex flex-col text-center">
                @if (Auth::user()->role == 'pembantu')
                    <h1 class="text-xl md:text-2xl font-bold">ADMIN PPID Pembantu</h1>
                @elseif(Auth::user()->role == 'user')
                    <h1 class="text-xl md:text-2xl font-bold">PPID Desa</h1>
                @else
                    <h1 class="text-xl md:text-2xl font-bold">ADMIN PPID</h1>
                @endif
                <h2 class="text-sm md:text-lg font-bold mt-2">
                    Aplikasi Layanan Publik Dinas Komunikasi dan Informatika
                </h2>
            </div>

            <form method="POST" action="{{ route('aplikasi-layanan-publik.store') }}" enctype="multipart/form-data" class="mt-6 flex flex-col flex-grow">
                @csrf

                <!-- Nama Aplikasi -->
                <div class="flex flex-col">
                    <label for="nama_aplikasi" class=" text-sm md:text-base mb-1">Nama Aplikasi <span class="text-red-500">*</span></label>
                    <input type="text" name="nama_aplikasi" class="p-2 border border-gray-800 rounded text-sm md:text-base" placeholder="Nama Aplikasi" required>
                    @error('nama_aplikasi')
                        <span class=" mt-1 text-sm">- {{ $message }}</span>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="flex flex-col my-4">
                    <label for="description" class=" text-sm md:text-base mb-1">Deskripsi Singkat <span><span class="text-red-500">*</span></span></label>
                    <textarea name="description" rows="3" class="p-2 w-full text-sm md:text-base border border-gray-300 rounded-lg"
                        placeholder="Deskripsi Singkat tentang Aplikasi" required></textarea>
                    @error('description')
                        <span class=" mt-1 text-sm">- {{ $message }}</span>
                    @enderror
                </div>

                <!-- Alamat Website + Checkbox -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                    <div class="flex flex-col">
                        <label for="link" class=" text-sm md:text-base mb-1">Alamat Website <span class="text-red-500">*</span></label>
                        <input type="text" name="link" class="p-2 border border-gray-800 rounded text-sm md:text-base" placeholder="Alamat Website">
                        @error('link')
                            <span class=" mt-1 text-sm">- {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center mt-2 md:mt-7">
                        <input type="checkbox" class="w-6 h-6 border rounded text-red-500 mr-2" name="is_active">
                        <span class=" text-sm md:text-base">Tampilkan Informasi</span>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="w-full py-3 bg-red-400 border-2 border-red-400 text-white font-bold rounded hover:bg-red-500 transition duration-300 text-sm md:text-base">
                        Simpan
                    </button>
                </div>
            </form>
        </div>

        <!-- PANEL INFORMASI (PANDUAN + PERINGATAN) -->
        <div class="space-y-6 flex flex-col h-full min-h-[400px]">

            <!-- 📘 Panduan Pengisian -->
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500 flex-grow">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    📘 Panduan Pengisian
                </h2>
                <ul class="space-y-3 text-gray-600 text-sm">
                    <li><strong>📂 Persiapkan Dokumen:</strong> Siapkan semua informasi sebelum mengisi formulir.</li>
                    <li><strong>✏️ Isi Data dengan Lengkap:</strong> Kolom bertanda * wajib diisi.</li>
                    <li><strong>📄 Unggah File yang Sesuai:</strong> File harus dalam format PDF (jika ada).</li>
                    <li><strong>🔍 Periksa Kembali:</strong> Pastikan semua data benar sebelum disimpan.</li>
                </ul>
            </div>

            <!-- ⚠️ Peringatan -->
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-5 rounded-lg shadow-md flex-grow">
                <h3 class="text-lg font-bold text-yellow-800 mb-2">⚠️ Peringatan!</h3>
                <p class="text-yellow-700 text-sm">
                    Data yang sudah tersimpan <strong>tidak dapat diedit atau dihapus</strong>. Pastikan seluruh informasi yang dimasukkan sudah benar sebelum menyimpan data.
                </p>
                <div class="mt-3 bg-yellow-100 p-3 rounded-md text-sm text-yellow-800 border border-yellow-300">
                    <p class="font-semibold">Jika terdapat kesalahan data setelah disimpan:</p>
                    <ul class="list-disc list-inside mt-1 space-y-1">
                        <li>Hubungi administrator sistem di <strong>(0328) 123456</strong></li>
                        <li>Kirim email ke <strong>ppid@sumenepkab.go.id</strong></li>
                    </ul>
                </div>
            </div>

            <!-- Error Handling -->
            @if ($errors->any())
                <div class="bg-red-300 text-white p-4 rounded">
                    <ul class="list-disc list-inside text-sm md:text-base">
                        @foreach ($errors->all() as $error)
                            <li>❌ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
</div>

    <hr class="border-t-2 border-gray-400 w-full my-4">

    <div class="max-w-screen-xl mx-auto relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-black">
            <thead class="w-full bg-red-400 text-black">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Aplikasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi Singkat Tentang Aplikasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat Website
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($aplikasi_layanan_publik as $key => $app)
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                            {{ $aplikasi_layanan_publik->firstItem() + $key }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $app->nama_aplikasi }}
                        </td>
                        <td class="px-6 py-4 truncate">
                            {{ $app->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $app->is_active ? 'Aktif' : 'Tidak Aktif' }}
                        </td>
                        <td class="px-6 py-4 truncate">
                            {{ $app->url }}
                        </td>
                        <td class="flex px-5 py-3 gap-5">
                            <!-- Edit Icon -->
                            <div class="group relative">
                                <a href="{{ route('aplikasi-layanan-publik.edit') }}"
                                    class="text-blue-600 hover:text-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                    </svg>
                                </a>
                                <span
                                    class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 text-xs text-gray-700 opacity-0 group-hover:opacity-100 transition-opacity">Edit</span>
                            </div>
                            <!-- Delete Icon -->
                            <div class="group relative">
                                <a href="{{ route('aplikasi-layanan-publik.destroy') }}"
                                    class="text-red-600 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg>
                                </a>
                                <span
                                    class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 text-xs text-gray-700 opacity-0 group-hover:opacity-100 transition-opacity">Delete</span>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4">
            {{ $aplikasi_layanan_publik->links('pagination::tailwind') }}
        </div>
    </div>
@endsection
