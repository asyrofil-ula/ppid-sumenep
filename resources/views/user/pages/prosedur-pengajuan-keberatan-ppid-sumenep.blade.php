@extends('app')
@section('title', 'Prosedur Permintaan Informasi')
@section('content')
    <section id="hero" class="py-16 my-20 mx-auto">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row justify-between gap-6">
                <div class="max-w-full lg:w-1/2 mx-auto">
                    <div class="bg-white shadow-lg rounded-lg p-6 mx-auto">
                        <div class="mt-4 p-10">
                            <div class="flex justify-center mb-8">

                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-80 md:rounded-none md:rounded-l-lg "
                                src="{{ asset('logo/logo_ppid.png') }}" alt="">
                            </div>
                            <h5 class="text-2xl font-bold text-gray-900">Prosedur Pengajuan Keberatan</h5>
                            <p class="text-gray-700 mt-4">
                                Pemohon informasi publik dapat mengajukan keberatan secara tertulis kepada Atasan PPID
                                paling lambat 30 (tiga puluh) hari kerja setelah ditemukannya alasan sebagai berikut:
                            </p>
                            <ol class="list-decimal pl-6 mt-4 text-gray-700">
                                <li>Penolakan atas permohonan informasi publik.</li>
                                <li>Tidak disediakannya informasi berkala.</li>
                                <li>Tidak ditanggapinya permohonan informasi publik.</li>
                                <li>Permohonan informasi publik ditanggapi tidak sebagaimana yang diminta.</li>
                                <li>Tidak dipenuhinya permohonan informasi publik.</li>
                                <li>Pengenaan biaya yang tidak wajar.</li>
                                <li>Penyampaian informasi publik yang melebihi waktu yang diatur dalam peraturan
                                    perundang-undangan.</li>
                            </ol>
                            <p class="text-gray-700 mt-4">
                                Dalam hal pengajuan keberatan disampaikan secara tidak tertulis, Tim Sekretariat PPID
                                mengarahkan Pemohon Informasi Publik yang mengajukan keberatan atau pihak penerima kuasa
                                untuk mengisi formulir keberatan sesuai format. Dalam mengajukan keberatan, pemohon wajib
                                menyertakan identitas pemohon yang sah sebagaimana syarat dalam permohonan informasi.
                            </p>
                            <p class="text-gray-700 mt-4">
                                Pemohon Keberatan harus menyertakan dokumen sebagai berikut:
                            </p>
                            <ol class="list-decimal pl-6 mt-4 text-gray-700">
                                <li>Surat tanggapan/jawaban permohonan informasi dari PPID.</li>
                                <li>Formulir tanda terima permohonan informasi.</li>
                            </ol>
                            <p class="text-gray-700 mt-4">
                                Tim Sekretariat PPID wajib memberikan salinan formulir keberatan disertai nomor registrasi
                                keberatan kepada Pemohon Informasi Publik yang mengajukan keberatan atau kuasanya sebagai
                                tanda terima pengajuan keberatan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
