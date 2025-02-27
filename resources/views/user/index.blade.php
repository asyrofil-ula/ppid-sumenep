@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    {{-- header --}}
    <section class="relative bg-red-700 mt-10 md:pt-0 mb-20" style="height: 75vh">
        <div class="flex flex-col h-full w-full md:flex-row md:items-center md:justify-center">
            <div class="mx-10 h-full flex items-center justify-center order-1 md:order-0">
                <img src="{{ asset('logo/header2.png') }}" class="h-full md:h-screen z-20" alt="kantor_pemda"
                    style="filter: drop-shadow(0.5rem 0.5rem 0rem black);" />
            </div>
            <div class="flex flex-col items-center justify-center h-full order-0 md:w-1/2 md:order-1">
                <h1 class="text-white font-bold text-3xl p-5 my-5 text-center md:text-left md:text-6xl z-20">Selamat Datang
                    di
                    Portal PPID
                    Kabupaten Sumenep
                </h1>
            </div>
            <span class="absolute right-10 opacity-10 z-10"><img src="{{ asset('icon/sport.png') }}" alt=""></span>
        </div>
    </section>

    {{-- Layanan Publik --}}
    @php
        use App\Models\AplikasiLayanan;
        $aplikasi_layanan = AplikasiLayanan::where('is_active', 1)->get();
    @endphp
    <section class="max-w-screen-xl mx-auto mb-20 px-10 md:px-0">
        <div class="mx-auto">
            <div class="p-4">
                <h1 class="font-bold text-2xl md:text-4xl my-10">Layanan Publik</h1>
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-8">
                    @foreach ($aplikasi_layanan as $item)
                        <a href="{{ $item->url }}" data-aos="fade-up" data-aos-once="true" duration="2000"
                            target="_blank"
                            class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                            <div class="w-24 h-24 mb-2">
                                <img src="{{ asset('icon/apk.svg') }}" alt="">
                            </div>
                            <span
                                class="text-center font-bold text-sm md:text-xl mt-3 truncate">{{ $item->nama_aplikasi }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Permohonan informasi --}}
    <section class="max-w-screen-xl mx-auto mb-20 px-10 md:px-0">
        <div class="mx-auto">
            <div class="p-4">
                <h1 class="font-bold text-2xl md:text-4xl my-10">Permohonan Informasi</h1>
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-8">
                    <a href="{{ route('maklumat-pelayanan') }}" data-aos="fade-up" data-aos-once="true" duration="2000"
                        class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <div class="w-24 h-24 mb-2">
                            <img src="{{ asset('icon/service.png') }}" alt="">
                        </div>
                        <span class="text-center font-bold text-sm md:text-lg mt-3 truncate">Maklumat
                            Pelayanan</span>
                    </a>
                    <a href="{{ route('prosedur-permintaan-informasi-ppid-sumenep') }}" data-aos="fade-up"
                        data-aos-once="true" duration="2000"
                        class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <div class="w-24 h-24 mb-2">
                            <img src="{{ asset('icon/customer-service.png') }}" alt="">
                        </div>
                        <span class="text-center font-bold text-sm md:text-lg mt-3 truncate">Prosedur Permintaan
                            Informasi</span>
                    </a>
                    <a href="{{ route('prosedur-pengajuan-keberatan-ppid-sumenep') }}" data-aos="fade-up"
                        data-aos-once="true" duration="2000"
                        class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <div class="w-24 h-24 mb-2">
                            <img src="{{ asset('icon/self-service.png') }}" alt="">
                        </div>
                        <span class="text-center font-bold text-sm md:text-lg mt-3 truncate">Prosedur Pengajuan
                            Keberatan</span>
                    </a>
                    <a href="{{ route('prosedur-sengketa-informasi-ppid-sumenep') }}" data-aos="fade-up"
                        data-aos-once="true" duration="2000"
                        class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <div class="w-24 h-24 mb-2">
                            <img src="{{ asset('icon/public-service.png') }}" alt="">
                        </div>
                        <span class="text-center font-bold text-sm md:text-lg mt-3 truncate">Prosedur Sengketa
                            Informasi</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- galeri --}}
    @php
        use App\Models\Galeri;
        $galeri = Galeri::where('is_active', 1)->orderByDesc('updated_at')->take(8)->get();
    @endphp
    <section class="max-w-screen-xl mx-auto mb-20 px-10 md:px-0">
        <div class="mx-auto">
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <h1 class="font-bold text-2xl md:text-4xl my-10">Galeri Foto</h1>
                    <a href="{{ route('galeri') }}" class="font-bold text-sm md:text-lg my-10 hover:underline">Lihat Gambar
                        Lainnya
                        -></a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($galeri as $data)
                        @if ($data->count() == 0)
                            <div class="flex items-center justify-center">
                                <h1 class="text-center font-bold text-2xl md:text-4xl my-10">Tidak ada gambar</h1>
                            </div>
                        @else
                            <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                                <div class="overflow-hidden aspect-[1.91/1]">
                                    <img src="{{ asset('storage/' . $data->path_img) }}" alt="{{ $data->title }}"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <span class="text-white font-bold text-xl text-center">{{ $data->title }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Berita --}}
    <section class="max-w-screen-xl mx-auto mb-20 px-6 md:px-0">
        <div class="max-w-screen-xl mx-auto p-6 md:px-0 md:py-5">
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-2xl md:text-4xl my-6">Berita Terkini</h1>
                <a href="https://sumenepkab.go.id/berita" target="_blank"
                    class="font-semibold text-sm md:text-lg text-red-600 hover:underline">
                    Lihat Berita Lainnya →
                </a>
            </div>
            <div class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-hide pb-4">
                <!-- Card Berita -->
                <div
                    class="min-w-[300px] max-w-[320px] p-5 bg-white border border-gray-200 rounded-lg shadow-md snap-start">
                    <a href="javascript:void(0)">
                        <img src="https://sumenepkab.go.id/uploads/images/news_news/de78df4b78075d00d9053831631fbec6a714701a.jpg"
                            alt="Gelar Penyuluhan Bela Negara" class="mb-3 w-full h-[180px] object-cover rounded-md">
                        <h5 class="mb-2 text-lg font-bold text-gray-900">Gelar Penyuluhan Bela Negara Bagi Siswa SMA Negeri
                            1 Sapeken</h5>
                    </a>
                    <p class="mb-3 text-gray-700 line-clamp-3 text-sm">
                        Media Center, Senin ( 10/06 ) Demi mewujudkan rasa kecintaan generasi muda kepada Negara Kesatuan Republik Indonesia (NKRI) Babinsa Koramil 0827/19 Sapeken Serka Airul Wafa memberikan pembekalan melalui penyuluhan Bela Negara kepada siswa-siswi SMA Negeri 1 Sapeken Kabupaten Sumenep.
                    </p>
                    <a href="https://sumenepkab.go.id/berita/baca/gelar-penyuluhan-bela-negara-bagi-siswa-sma-negeri-1-sapeken"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-red-600 border border-red-600 rounded-md hover:bg-red-600 hover:text-white transition-all">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4 ml-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                <div
                    class="min-w-[300px] max-w-[320px] p-5 bg-white border border-gray-200 rounded-lg shadow-md snap-start">
                    <a href="javascript:void(0)">
                        <img src="https://sumenepkab.go.id/uploads/images/news_news/88fc89e741b3f62dc59eb289f1999f59f38d24ec.jpg"
                            alt="Gelar Penyuluhan Bela Negara" class="mb-3 w-full h-[180px] object-cover rounded-md">
                        <h5 class="mb-2 text-lg font-bold text-gray-900">Menbud: Monumen Tugu
                            Keris Berpotensi Dukung Perkembangan</h5>
                    </a>
                    <p class="mb-3 text-gray-700 line-clamp-3 text-sm">
                        Media Center, Kamis ( 30/01 )
                        Monumen
                        Tugu Keris
                        Arya Wiraraja sebagai salah satu pendorong ekonomi masyarakat, karena keberadaannya menjadi objek
                        wisata
                    </p>
                    <a href="https://sumenepkab.go.id/berita/baca/menbud-monumen-tugu-keris-berpotensi-dukung-perkembangan-ekonomi-masyarakat"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-red-600 border border-red-600 rounded-md hover:bg-red-600 hover:text-white transition-all">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4 ml-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                <div
                    class="min-w-[300px] max-w-[320px] p-5 bg-white border border-gray-200 rounded-lg shadow-md snap-start">
                    <a href="javascript:void(0)">
                        <img src="https://sumenepkab.go.id/uploads/images/news_news/c678770e003751cc615007f33e4ce63d8443f6bd.jpg"
                            alt="Gelar Penyuluhan Bela Negara" class="mb-3 w-full h-[180px] object-cover rounded-md">
                        <h5 class="mb-2 text-lg font-bold text-gray-900">Kasdim 0827/Sumenep:
                            Penerimaan Prajurit TNI AD Gratis</h5>
                    </a>
                    <p class="mb-3 text-gray-700 line-clamp-3 text-sm">
                        Media Center, Selasa (28/01) Dandim
                        0827/Sumenep yang diwakili Kasdim Mayor Cba Ari Pamungkas Dian Buwono menjadi narasumber utama dalam
                        podcast yang diselenggarakan oleh RRI Sumenep
                    </p>
                    <a href="https://sumenepkab.go.id/berita/baca/kasdim-0827sumenep-penerimaan-prajurit-tni-ad-gratis"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-red-600 border border-red-600 rounded-md hover:bg-red-600 hover:text-white transition-all">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4 ml-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                <div
                    class="min-w-[300px] max-w-[320px] p-5 bg-white border border-gray-200 rounded-lg shadow-md snap-start">
                    <a href="javascript:void(0)">
                        <img src="https://sumenepkab.go.id/uploads/images/news_news/1ca90db3b8914a483db1dde2278909fb8244a000.jpg"
                            alt="Gelar Penyuluhan Bela Negara" class="mb-3 w-full h-[180px] object-cover rounded-md">
                        <h5 class="mb-2 text-lg font-bold text-gray-900">Kemenag Sumenep Gelar
                            Sosialisasi Gerakan Anti Kekerasan dan Bullying</h5>
                    </a>
                    <p class="mb-3 text-gray-700 line-clamp-3 text-sm">
                        Media Center, Rabu (05/02) Sebagai
                        upaya mencegah terjadinya kekerasan, Kementerian Agama Kabupaten Sumenep menggelar Sosialisasi
                        Gerakan Anti Kekerasan dan Bullying sebagai implementasi Moderasi Beragama
                    </p>
                    <a href="https://sumenepkab.go.id/berita/baca/kemenag-sumenep-gelar-sosialisasi-gerakan-anti-kekerasan-dan-bullying"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-red-600 border border-red-600 rounded-md hover:bg-red-600 hover:text-white transition-all">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4 ml-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                <!-- Tambahkan Card Lainnya Sesuai Template di Atas -->

            </div>
        </div>
    </section>


    {{-- Infografis --}}
    @php
        use App\Models\Infografis;
        use App\Models\DetailJenisInformasi;
        $infografis = Infografis::where('is_active', 1)->orderBy('created_at', 'desc')->take(4)->get();
        // $detail_jenis_informasi = DetailJenisInformasi::all();
    @endphp
    <section class="max-w-screen-xl mx-auto mb-20 px-10 md:px-0">
        <div class="flex items-center justify-between mb-8">
            <h1 class="font-bold text-2xl md:text-4xl">Infografis</h1>
            <a href="{{ route('infografis-ppid') }}" class="group flex items-center font-bold text-sm md:text-lg ">
                <span>Lihat Infografis Lainnya</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform duration-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($infografis as $data)
                @if ($data->is_active == true)
                    <div
                        class="group bg-white border border-gray-100 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col h-full">
                        <div class="relative overflow-hidden aspect-[4/5]">
                            <img src="{{ asset('storage/' . $data->path_dokumen) }}" alt="{{ $data->nama_dokumen }}"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                                width="1080" height="1350" />
                            <div class="absolute inset-0 bg-gradient-to-t from-red-800 to-transparent opacity-70"></div>
                        </div>

                        <div
                            class="relative flex-1 bg-gradient-to-r from-red-700 to-red-800 p-6 flex flex-col justify-between">
                            <div class="absolute top-0 right-0 w-24 h-24 opacity-10">
                                <img src="{{ asset('icon/keris.png') }}" class="w-full" alt="Keris" />
                            </div>

                            <h2 class="text-xl font-bold text-white mb-4 line-clamp-2">{{ $data->nama_infografis }}</h2>
                            <p class="text-red-100 text-sm mb-4 line-clamp-3">
                                {{ $data->description ?? 'Informasi visual interaktif yang menyajikan data dan wawasan penting dalam format yang mudah dipahami.' }}
                            </p>
                            <div class="flex items-center mb-4">
                                <div class="flex items-center bg-red-900/30 rounded-full px-3 py-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-100 mr-1"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="text-red-100 text-xs font-medium">
                                        Posted by: <span class="text-white ml-1">{{ $data->post_by }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>


    <section class="max-w-screen-xl mx-auto mb-20 px-10 md:px-0">
        <h1 class="font-bold text-2xl md:text-4xl my-10">Media Sosial</h1>
        <div class="grid grid-cols-2 gap-2 md:grid-cols-5 md:gap-8 select-none">
            <!-- Instagram -->
            <a href="https://www.instagram.com/kominfosumenep/" target="_blank"
                class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-instagram w-24 h-24 mb-2"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
                <span class="text-center font-bold text-sm md:text-xl truncate">Instagram</span>
            </a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/kominfo.sumenep" target="_blank"
                class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-facebook w-24 h-24 mb-2"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
                <span class="text-center font-bold text-sm md:text-xl truncate">Facebook</span>
            </a>

            <!-- YouTube -->
            <a href="https://www.youtube.com/@kominfosumenep" target="_blank"
                class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-youtube w-24 h-24 mb-2"
                    viewBox="0 0 16 16">
                    <path
                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.043-.064 1.956l-.007.105-.022.26-.01.104c-.048.52-.119 1.023-.22 1.402a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.38-.175-.883-.224-1.402l-.013-.104-.022-.26-.008-.104c-.064-.914-.072-1.77-.074-1.957v-.075c.001-.194.01-1.043.064-1.956l.007-.105.022-.26.01-.104c.048-.52.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>
                <span class="text-center font-bold text-sm md:text-xl truncate">YouTube</span>
            </a>

            <!-- Twitter -->
            <a href="https://twitter.com/kominfosumenep" target="_blank"
                class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-twitter-x w-24 h-24 mb-2"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633z" />
                </svg>
                <span class="text-center font-bold text-sm md:text-xl truncate">Twitter</span>
            </a>

            <!-- TikTok -->
            <a href="https://www.tiktok.com/@kominfo.sumenep?is_from_webapp=1&sender_device=pc" target="_blank"
                class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-tiktok w-24 h-24 mb-2"
                    viewBox="0 0 16 16">
                    <path
                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                </svg>
                <span class="text-center font-bold text-sm md:text-xl truncate">TikTok</span>
            </a>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Enhanced Smooth Scroll dengan Momentum
        const scrollable = document.getElementById('scrollable');
        let isDown = false;
        let startX;
        let scrollLeft;
        let momentum;
        let lastTime = 0;

        scrollable.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - scrollable.offsetLeft;
            scrollLeft = scrollable.scrollLeft;
            scrollable.style.cursor = 'grabbing';
            cancelMomentum();
        });

        scrollable.addEventListener('mouseleave', () => {
            isDown = false;
            scrollable.style.cursor = 'grab';
        });

        scrollable.addEventListener('mouseup', () => {
            isDown = false;
            scrollable.style.cursor = 'grab';
            startMomentum();
        });

        scrollable.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - scrollable.offsetLeft;
            const walk = (x - startX) * 2;
            scrollable.scrollLeft = scrollLeft - walk;
        });

        // Momentum Effect
        function startMomentum() {
            momentum = requestAnimationFrame(momentumLoop);
        }

        function cancelMomentum() {
            cancelAnimationFrame(momentum);
        }

        function momentumLoop(timestamp) {
            const elapsed = timestamp - lastTime;
            lastTime = timestamp;

            if (Math.abs(scrollable.scrollLeft - scrollLeft) > 0.1) {
                scrollable.scrollLeft += (scrollLeft - scrollable.scrollLeft) * 0.2;
                momentum = requestAnimationFrame(momentumLoop);
            }
        }

        // Touch Support
        scrollable.addEventListener('touchstart', (e) => {
            startX = e.touches[0].pageX - scrollable.offsetLeft;
            scrollLeft = scrollable.scrollLeft;
            cancelMomentum();
        });

        scrollable.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const x = e.touches[0].pageX - scrollable.offsetLeft;
            const walk = (x - startX) * 2;
            scrollable.scrollLeft = scrollLeft - walk;
        });
    </script>
@endpush
