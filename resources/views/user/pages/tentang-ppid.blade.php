@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    <div class="flex flex-col mt-20 justify-center items-center">
        <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl overflow-hidden max-w-xl w-full p-10">
            <!-- Gambar yang diperkecil -->
            <img src="{{ asset('logo/logo_ppid.png') }}" alt="tentang">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">TENTANG PPID</h2>
                <p class="text-gray-700 leading-tight mb-4">
                    Keterbukaan informasi publik merupakan salah satu prinsip penting dalam penyelenggaraan pemerintahan
                    yang baik (good governance). Keterbukaan informasi publik memungkinkan masyarakat untuk memperoleh
                    informasi yang diperlukan untuk mengambil keputusan dan ikut serta dalam pengambilan kebijakan. Ada
                    beberapa alasan mengapa keterbukaan informasi publik penting untuk mewujudkan good governance, antara
                    lain:
                </p>
                <section class="mt-16 max-w-xl mx-auto px-2">
                    <ul class="mt-6 space-y-4 text-lg text-gray-600">
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="ml-3">Meningkatkan partisipasi masyarakat. Keterbukaan informasi publik
                                memungkinkan masyarakat untuk berpartisipasi dalam pengambilan kebijakan publik. Dengan
                                mengetahui informasi yang relevan, masyarakat dapat memberikan masukan dan saran kepada
                                pemerintah.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="ml-3">Meningkatkan transparansi dan akuntabilitas pemerintah. Keterbukaan
                                informasi publik dapat membantu masyarakat untuk mengawasi kinerja pemerintah. Dengan
                                mengetahui informasi tentang kinerja pemerintah, masyarakat dapat menilai apakah pemerintah
                                telah menjalankan tugasnya secara transparan dan akuntabel.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="ml-3">Meningkatkan efektivitas dan efisiensi pemerintahan. Keterbukaan informasi
                                publik dapat membantu pemerintah untuk mengambil keputusan yang lebih tepat. Dengan
                                mengetahui informasi yang relevan, pemerintah dapat menghindari kesalahan dalam pengambilan
                                keputusan.</strong></span>
                        </li>

                    </ul>
                </section><br>
                <p class="text-gray-700 leading-tight mb-4">
                    Keterbukaan informasi publik di Indonesia diatur dalam Undang-Undang Nomor 14 Tahun 2008 tentang
                    Keterbukaan Informasi Publik (UU KIP). UU KIP memberikan hak kepada setiap orang untuk memperoleh
                    informasi publik dari badan publik. Badan publik adalah lembaga negara, lembaga pemerintahan, lembaga
                    nonpemerintah, atau badan swasta yang diperlakukan sama dengan badan publik berdasarkan ketentuan
                    peraturan perundang-undangan. Pemerintah Kabupaten Sumenep telah melaksanakan UU KIP dengan membentuk
                    Pejabat Pengelola Informasi dan Dokumentasi (PPID) di setiap instansi pemerintahan. PPID merupakan
                    pejabat yang bertanggung jawab dalam pengelolaan informasi publik di instansinya. PPID memiliki tugas
                    untuk menyediakan akses informasi publik bagi masyarakat atau pemohon informasi. Pembentukan PPID di
                    Pemerintah Kabupaten Sumenep merupakan upaya untuk mewujudkan keterbukaan informasi publik dan good
                    governance. Dengan adanya PPID, masyarakat dapat dengan mudah memperoleh informasi publik yang
                    diperlukan. Hal ini dapat meningkatkan partisipasi masyarakat dalam pengambilan kebijakan publik,
                    meningkatkan transparansi dan akuntabilitas pemerintah, serta meningkatkan efektivitas dan efisiensi
                    pemerintahan.
                </p>
            </div>
        </div>
    </div>

@endsection
