@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    <div class="flex flex-col mt-20 justify-center items-center">
        <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl overflow-hidden max-w-xl w-full">
            <!-- Gambar yang diperkecil -->
            <img src="{{ asset('logo/logo_ppid.png') }}" alt="tentang">
            <div class="p-6">
                <div class="lg:ml-6 lg:col-start-2 lg:max-w-2xl">
                    <h4 class="mt-2 text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
                        TUGAS DAN WEWENANG
                    </h4><BR>

                    <div class="lg:ml-6 lg:col-start-2 lg:max-w-2xl">
                        <p class="text-base font-semibold leading-6 text-indigo-500 uppercase">
                            Tugas PPID Utama
                        </p>
                        <ul class="mt-3 space-y-3 font-medium">
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 leading-5 text-gray-600">
                                    Menyusun dan melaksanakan kebijakan informasi dan dokumentasi.
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
                                    Menyusun laporan pelaksanaan kebijakan informasi dan dokumentasi.
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
                                    Mengoordinasikan dan mengonsolidasikan pengumpulan bahan informasi dan dokumentasi dari
                                    PPID Pembantu.
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
                                    Menyimpan, mendokumentasikan, menyediakan, dan memberi pelayanan informasi dan
                                    dokumentasi kepada publik.
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
                                    Melakukan verifikasi bahan informasi dan dokumentasi publik.
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
                                    Melakukan uji konsekuensi atas informasi dan dokumentasi yang dikecualikan.
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
                                    Melakukan pemutakhiran informasi dan dokumentasi.
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
                                    Menyediakan informasi dan dokumentasi untuk diakses oleh masyarakat.
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
                                    Melakukan pembinaan, pengawasan, evaluasi, dan monitoring atas pelaksanaan kebijakan
                                    informasi dan dokumentasi yang dilakukan oleh PPID Pembantu.
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
                                    Melaksanakan rapat koordinasi dan rapat kerja secara berkala dan/atau sesuai dengan
                                    kebutuhan.
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
                                    Mengesahkan informasi dan dokumentasi yang layak untuk dipublikasikan.
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
                                    Menugaskan PPID Pembantu dan/atau Pejabat Fungsional untuk mengumpulkan, mengelola, dan
                                    memelihara informasi dan dokumentasi.
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
                                    Membentuk tim fasilitasi penanganan sengketa informasi yang ditetapkan dengan Keputusan
                                    Menteri dan Keputusan Kepala Daerah.
                            </li>
                        </ul>
                    </div><br>


                    <div class="lg:ml-6 lg:col-start-2 lg:max-w-2xl">
                        <p class="text-base font-semibold leading-6 text-indigo-500 uppercase">
                            Wewenang PPID Utama
                        </p>
                        <ul class="mt-3 space-y-3 font-medium">
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 leading-5 text-gray-600">
                                    Menolak memberikan informasi dan dokumentasi yang dikecualikan sesuai dengan ketentuan
                                    peraturan perundang-undangan.
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
                                    Meminta dan memperoleh informasi dan dokumentasi dari PPID Pembantu yang menjadi cakupan
                                    kerjanya.
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
                                    Mengoordinasikan pemberian pelayanan informasi dan dokumentasi dengan PPID Pembantu yang
                                    menjadi cakupan kerjanya.
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
                                    Menentukan atau menetapkan suatu informasi dan dokumentasi yang dapat diakses oleh
                                    publik.
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
                                    Menugaskan PPID Pembantu dan/atau Pejabat Fungsional untuk membuat, mengumpulkan, serta
                                    memelihara informasi dan dokumentasi untuk kebutuhan organisasi.
                                </p>
                        </ul>
                    </div><br>


                    <div class="lg:ml-6 lg:col-start-2 lg:max-w-2xl">
                        <p class="text-base font-semibold leading-6 text-indigo-500 uppercase">
                            Tugas PPID Pembantu
                        </p>
                        <ul class="mt-3 space-y-3 font-medium">
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 leading-5 text-gray-600">
                                    Membantu PPID Utama melaksanakan tanggungjawab, tugas, dan kewenangannya.
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
                                    Menyampaikan informasi dan dokumentasi kepada PPID Utama dilakukan paling sedikit 6
                                    (enam) bulan sekali atau sesuai kebutuhan.
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
                                    Melaksanakan kebijakan teknis informasi dan dokumentasi sesuai dengan tugas pokok dan
                                    fungsinya.
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
                                    Menjamin ketersediaan dan akselerasi layanan informasi dan dokumentasi bagi pemohon
                                    informasi secara cepat, tepat, berkualitas dengan mengedepankan prinsip-prinsip
                                    pelayanan prima.
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
                                    Mengumpulkan, mengolah dan mengompilasi bahan dan data lingkup komponen di lingkungan
                                    Kementerian Dalam Negeri/Perangkat Daerah di lingkungan Pemerintahan Daerah
                                    masing-masing menjadi bahan informasi publik.
                                </p>
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 leading-5 text-gray-600">
                                    Menyampaikan laporan pelaksanaan kebijakan teknis dan pelayanan informasi dan
                                    dokumentasi kepada PPID Utama secara berkala dan sesuai kebutuhan.
                                </p>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
