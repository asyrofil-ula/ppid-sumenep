@extends('app')

@section('title', 'Aplikasi Layanan Publik')

@section('content')
    <div class="my-40">
        <div class="max-w-screen-sm mx-auto">
            <div class="flex justify-center h-16 md:h-28 p-1">
                <img src="{{ asset('logo/logo_ppid.png') }}" alt="logo_ppid" class="h-full"><span
                    class="border-l-4 md:border-l-8-2 border-black"></span>
                <h1 class="flex flex-col justify-center w-fit md:text-3xl font-bold ml-4">
                    <span>Sistem Informasi dan</span>
                    <span>Dokumentasi Publik</span>
                </h1>
            </div>
            <div class="w-full bg-red-700 mt-10 p-4 px-20 h-100 rounded-sm">
                @if (Auth::user()->role == 'pembantu')
                    <h1 class="text-2xl font-bold text-center text-white">ADMIN PPID Pembantu</h1>
                @elseif(Auth::user()->role == 'user')
                    <h1 class="text-2xl font-bold text-center text-white">PPID Desa</h1>
                @else
                    <h1 class="text-2xl font-bold text-center text-white">ADMIN PPID</h1>
                @endif
                <h2 class="text font-bold text-center text-white">Aplikasi Layanan Publik Dinas Komunikasi dan Informatika
                </h2>
                <form method="POST" action="{{ route('aplikasi-layanan-publik.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col mt-4">
                        <label for="nama_aplikasi" class="text-white mb-1">Nama Aplikasi</label>
                        <input type="text" name="nama_aplikasi" id="" class="p-2 border border-gray-800 rounded"
                            placeholder="Nama Aplikasi">
                        @error('nama_aplikasi')
                            <span class="text-white mt-1 text-sm">- {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col my-4">
                        <label for="description" class="text-white mb-1">Deskripsi Singkat tentang Aplikasi</label>
                        <textarea name="description" id="description" row="50"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Deskripsi Singkat tentang Aplikasi"></textarea>
                        @error('description')
                            <span class="text-white mt-1 text-sm">- {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex w-full justify-between items-end">
                        <div class="flex flex-col w-full mr-5">
                            <label for="link" class="text-white mb-1">Alamat Website</label>
                            <input type="text" name="link" id="link" class="p-2 border border-gray-800 rounded"
                                placeholder="Alamat Website">
                        </div>
                        <input type="checkbox" class="w-6 h-6 border rounded text-red-500" name="is_active">
                    </div>
                    @error('link')
                        <span class="text-white mt-1 text-sm">- {{ $message }}</span>
                    @enderror
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="w-full py-3 bg-red-400 border-2 border-red-400 text-white rounded hover:bg-red-500">Simpan</button>
                    </div>
                </form>
            </div>
            <div class="bg-red-700 text-white p-4 mt-4 rounded">
                <ul>
                    <li>Jangan lupa di checklist agar informasi dapat di tampilkan</li>
                </ul>
            </div>
            @if ($errors->any())
                <div class="bg-red-300 text-white p-4 mt-4 rounded">
                    <ul class="li list-decimal p-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>


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
                @foreach ($aplikasi_layanan_publik as $app)
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                            {{ $no++ }}
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
    </div>
@endsection
