@extends('app')
@section('title', 'PPID Kabupaten Sumenep')

@section('content')

    <div class="flex items-center p-4 mt-20  justify-center min-h-[100px]">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('logo/logo_ppid.png') }}" alt="Logo" class="h-12">
        </div>
        <div class="border-l-2 border-gray-400 h-10 mx-4"></div>
        <p class="text-lg font-bold text-gray-700">Sistem Informasi dan <br> Dokumentasi Publik</p>
    </div>

    <hr class="border-t-2 border-gray-400 w-full my-4">
    <div class="flex justify-center items-center min-h-full">
        <div class="card w-[600px] bg-white">
            <div class="p-6 rounded-md w-[600px]">
                @if (Auth::user()->role == 'admin')
                    <h1 class="text-xl font-bold text-center w-full mb-6">
                        ADMIN PPID : Informasi Publik Dinas Komunikasi dan Informatika
                    </h1>
                @elseif(Auth::user()->role == 'pembantu')
                    <h1 class="text-xl font-bold text-center w-full mb-6">
                        ADMIN PPID Pembantu : Informasi Publik Dinas Komunikasi dan Informatika
                    </h1>
                @else
                    <h1 class="text-xl font-bold text-center w-full mb-6">
                        PPID Desa : Informasi Publik Dinas Komunikasi dan Informatika
                    </h1>
                @endif
                <form class="space-y-4" method="POST" action="{{ route('informasi-public-detail.store') }}">
                    @csrf
                    {{-- informasi publik --}}
                    <div class="flex items-center space-x-4">
                        <label class="font-semibold w-1/3">Informasi Publik</label>
                        <select class="flex-1 border rounded px-3 py-2 w-full truncate" name="informasi_publik_id" required>
                            @foreach ($informasi_publik as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_informasi }}</option>
                            @endforeach
                        </select>
                        @error('informasi_publik_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- deskripsi --}}
                    <div class="flex items-center space-x-4">
                        <label class="font-semibold w-1/3">Deskripsi</label>
                        <input type="text" class="flex-1 border rounded px-3 py-2 w-full truncate"
                            placeholder="Deskripsi" name="description">
                        <input type="checkbox" class="w-6 h-6 border rounded text-red-500" name="is_active">

                    </div>
                    <button type="submit"
                        class="w-full bg-red-400 text-white border-2 border-red-400 font-bold py-2 hover:bg-red-500 rounded">
                        Simpan
                    </button>
                </form>
                <div class="bg-red-500 text-white p-4 mt-4 rounded">
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
                        Informasi Publik
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi Informasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Upload
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
                @foreach ($informasi_publik_detail as $app)
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                            {{ $no++ }}
                        </th>
                        @foreach ($informasi_publik as $item)
                            @if ($item->id == $app->informasi_publik_id)
                                <td class="px-6 py-4">{{ $item->nama_informasi }}</td>
                            @endif
                        @endforeach
                        <td class="px-6 py-4 truncate">
                            {{ $app->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $app->is_active ? 'Aktif' : 'Tidak Aktif' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($app->created_at)->locale('id')->isoFormat('D MMMM YYYY') }}
                        </td>
                        <td class="flex px-5 py-3 gap-5">
                            <!-- Edit Icon -->
                            <div class="group relative">
                                <a href="{{ route('aplikasi-layanan-publik.edit') }}"
                                    class="text-blue-600 hover:text-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
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
