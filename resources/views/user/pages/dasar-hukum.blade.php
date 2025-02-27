@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    <div class="flex flex-col mt-20 justify-center items-center">
        <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl overflow-hidden max-w-xl w-full p-10">
            <!-- Gambar yang diperkecil -->
            <img src="{{ asset('logo/logo_ppid.png') }}" alt="tentang">
            <div class="p-6">
                <div class="lg:ml-6 lg:col-start-2 lg:max-w-2xl">
                    <h4 class="mt-2 text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                        Dasar Hukum
                    </h4>

                    <ul class="mt-8 space-y-3 font-medium">
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi.
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik.
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                Undang-Undang Nomor 43 Tahun 2009 tentang Kearsipan.
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintah Daerah sebagaimana telah beberapa kali
                                diubah terakhir dengan Undang-Undang Nomor 9 Tahun 2015.
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                Peraturan Pemerintah Nomor 61 Tahun 2010 tentang Pelaksanaan Undang-Undang Nomor 14 Tahun
                                2008 tentang Keterbukaan Informasi Publik.
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                Peraturan Menteri Dalam Negeri Nomor Nomor 3 Tahun 2017 tentang Pedoman Pengelolahan
                                Pelayanan Informasi dan Dokumentasi Kementerian Dalam Negeri dan Pemerintah Daerah.
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="ml-3 leading-5 text-gray-600">
                                Peraturan Komisi Informasi Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
