@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')

    <div class="flex justify-center my-40">
        <a href="javascript:void(0)"
            class="flex flex-col items-center  bg-white border border-gray-200 rounded-xl shadow-lg hover:shadow-2xl md:max-w-4xl w-full p-10">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-80 md:rounded-none md:rounded-l-lg"
                src="{{ asset('logo/logo_ppid.png') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal w-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">VISI dan MISI PPID SUMENEP</h5><br>
                <h1 class="mb-2 font-bold tracking-tight text-gray-900">TAGLINE</h1>
                <p class="mb-3 font-normal text-gray-700">BISMILLAH MELAYANI</p>
                <h1 class="mb-2 font-bold tracking-tight text-gray-900">VISI</h1>
                <p class="mb-3 font-normal text-gray-700">SUMENEP UNGGUL MANDIRI DAN SEJAHTERA</p>
                <h2 class="mb-2 text-lg font-semibold text-gray-900">MISI</h2>
                <ul class="space-y-1 text-gray-700 list-decimal">
                    <li>
                        Membangun Kualitas Sumber Daya Manusia (SDM) Berdaya Saing Bidang Pendidikan, Kesehatan Dan Ketenaga
                        Kerjaan.
                    </li>
                    <li>
                        Meningkatkan Kesejahteraan Masyarakat Melalui Penguatan Ekonomi Berbasis Kawasan Dari Hulu ke Hilir.
                    </li>
                    <li>
                        Mewujudkan Tata Kelola Pemerintahan Yang Transparan, Inovatif Dan Responsif Dalam Melayani
                        Masyarakat.
                    </li>
                    <li>
                        Melaksanakan Pembangunan Berazas Gotong Royong Dan Berkearifan Lokal.
                    </li>
                    <li>
                        Memperkuat Pembangunan Infrastruktur Berbasis Lingkungan Hidup Yang Berimbang Antara Daratan Dan
                        Kepulauan.
                    </li>
                </ul>

            </div>
        </a>
    </div>

@endsection
