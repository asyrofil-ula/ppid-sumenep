@extends('app')

@section('title', 'PPID Kabupaten Sumenep')

@section('content')

<section class="flex flex-col md:flex-row justify-center my-20 w-full p-5">
    <div
        class="flex flex-col p-6 md:p-10 leading-normal bg-white border border-gray-200 rounded-xl shadow-lg hover:shadow-xl w-full max-w-4xl">
        
        <!-- Logo PPID -->
        <div class="flex items-center justify-center min-h-[100px]">
            <img class="object-contain w-48 md:w-64" src="{{ asset('logo/logo_ppid.png') }}" alt="Logo PPID">
        </div>

        <!-- Jika judul adalah "Prosedur Permintaan Informasi", tampilkan gambar -->
        @if ($pelayanan_informasi->title == 'Prosedur Permintaan Informasi')
            <img class="w-full rounded-lg mt-4" src="https://ppid.sumenepkab.go.id/assets/img/prosedur_info_publik.jpg"
                alt="Prosedur Permintaan Informasi">
        @endif

        <!-- Judul -->
        <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 text-center md:text-left">
            {{ $pelayanan_informasi->title }}
        </h5>

        <!-- Konten dari database -->
        <div class="prose max-w-full text-gray-700 text-sm md:text-base">
            {!! $pelayanan_informasi->content !!}
        </div>

        <!-- Jika judul adalah "Prosedur Permintaan Informasi", tampilkan tombol -->
        @if ($pelayanan_informasi->title == 'Prosedur Permintaan Informasi')
            <div class="flex flex-col md:flex-row items-center gap-4 mt-6">
                <a href="https://drive.google.com/file/d/1iPqeLV1a5HW7gIjzPNYUIFl6nsNPBXx3/view?usp=drive_link"
                    download="document.pdf"
                    class="w-full md:w-auto text-center border-2 border-red-700 text-red-700 hover:text-white font-bold py-2 px-4 hover:bg-red-700 transition-all rounded-lg">
                    Download Formulir Permohonan Informasi
                </a>
                <a href="https://www.lapor.go.id/"
                    class="w-full md:w-auto text-center border-2 border-red-700 text-red-700 hover:text-white font-bold py-2 px-4 hover:bg-red-700 transition-all rounded-lg">
                    Layanan Permohonan Informasi Online
                </a>
            </div>
        @endif

    </div>
</section>

@endsection
