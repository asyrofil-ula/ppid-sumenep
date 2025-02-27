@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    <section class="flex justify-center my-40">
        <a href="javascript:void(0)"
            class="flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow-lg hover:shadow-2xl md:max-w-4xl w-full p-10">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-80 md:rounded-none md:rounded-l-lg "
                src="{{ asset('logo/logo_ppid.png') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal w-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">MAKLUMAT PELAYANAN</h5><br>
                <p class="mb-3 font-normal text-gray-700">Maklumat Pelayanan Informasi Publik Pemerintah Kabupaten Sumenep
                    berkomitmen dalam menyelenggarakan Pelayanan Informasi Publik sesuai dengan amanat perundang-undangan:
                </p>
                <ul class="ml-4 space-y-1 text-gray-700 list-decimal">
                    <li>
                        Melayani permohonan informasi publik dengan tanggap dan tepat waktu.
                    </li>
                    <li>
                        Menyediakan informasi publik yang benar, terpercaya, dan dapat dipertanggungjawabkan.
                    </li>
                    <li>
                        Memberikan kemudahan akses informasi publik melalui berbagai fasilitas dan media.
                    </li>
                    <li>
                        Menyiapkan dan mengumumkan Daftar Informasi Publik.
                    </li>
                    <li>
                        Memberikan pelayanan terbaik oleh petugas informasi publik.
                    </li>
                    <li>
                        Menyiapkan sistem informasi yang ramah bagi pengguna dan senantiasa diperbarui.
                    </li>
                    <li>
                        Mengevaluasi kinerja petugas pelaksana secara rutin demi pelayanan informasi yang maksimal.
                    </li>
                </ul>
            </div>
        </a>
    </section>
@endsection
