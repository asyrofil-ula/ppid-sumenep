@extends('app')
@section('title', 'Prosedur Permintaan Informasi')
@section('content')
    <section id="hero" class="py-16 my-20 mx-auto">
        <div class="container mx-auto px-8">
            <div class="flex flex-col lg:flex-col gap-8">
                <div class="max-w-full bg-white rounded-lg shadow-lg p-8 md:p-12 ">
                    <div class="flex justify-center">

                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-80 md:rounded-none md:rounded-l-lg p-5"
                        src="{{ asset('logo/logo_ppid.png') }}" alt="">
                    </div>
                    <h5 class="text-3xl font-semibold text-gray-800 mb-4">Prosedur Sengketa Informasi</h5>
                    <div class="space-y-4 text-gray-700">
                        <p class="space-x-4">
                            Pengajuan sengketa informasi publik ke komisi informasi diajukan pemohon informasi publik
                            selambat-lambatnya 14 HARI KERJA sejak diterimanya tanggapan tertulis atas surat keberatan
                            pemohon informasi publik kepada atasan PPID badan publik atau berakhirnya masa 30 HARI KERJA
                            bagi atasan PPID badan publik untuk memberikan tanggapan secara tertulis atas surat keberatan
                            dari pemohon informasi publik.
                        </p>
                        <ol class="list-decimal pl-6 space-y-2">
                            <li>Pengajuan sengketa informasi publik bisa dilakukan langsung ke kantor Komisi Informasi.</li>
                            <li>Pemohon wajib melengkapi berkas permohonan sengketa informasi sebelum mendapatkan nomor
                                registrasi.</li>
                            <li>Setelah registrasi, komisi informasi mulai proses penyelesaian sengketa dalam 14 hari kerja.
                            </li>
                        </ol>
                    </div>

                    <h5 class="text-2xl font-semibold text-gray-800 mt-8">Permohonan Penyelesaian Sengketa Informasi dapat
                        diajukan secara langsung (datang langsung) :</h5>
                    <ol class="list-decimal pl-6 space-y-2 text-gray-700">
                        <li>Pemohon mengisi Form Permohonan Penyelesaian Sengketa Informasi.</li>
                        <li>Membawa bukti surat permohonan informasi dan tanda terimanya.</li>
                        <li>Membawa bukti jawaban permohonan informasi dari Badan Publik (jika ada).</li>
                        <li>Membawa bukti pengajuan keberatan dan tanda terimanya.</li>
                        <li>Membawa bukti jawaban keberatan (jika ada).</li>
                        <li>Membawa bukti identitas (KTP/Badan Hukum/surat kuasa).</li>
                    </ol>

                    <h5 class="text-2xl font-semibold text-gray-800 mt-8">Permohonan Penyelesaian Sengketa Informasi dapat
                        diajukan secara tertulis (surat) atau online:</h5>
                    <ol class="list-decimal pl-6 space-y-2 text-gray-700">
                        <li>Mengirim Surat Permohonan Penyelesaian Sengketa Informasi ke Ketua Komisi Informasi.</li>
                        <li>Melampirkan bukti surat permohonan informasi, jawaban informasi, pengajuan keberatan, dan
                            identitas.</li>
                    </ol>
                </div>

                <!-- Sidebar or Additional Info (optional) -->
                <div class="w-full bg-white rounded-lg shadow-lg p-8">
                    <h5 class="text-2xl font-semibold text-gray-800 mb-6">Informasi Lebih Lanjut</h5>
                    <p class="text-gray-700 mb-4">Untuk informasi lebih lanjut terkait prosedur sengketa informasi, Anda
                        dapat menghubungi tim Sekretariat Komisi Informasi atau mengunjungi situs web kami.</p>
                    <div class="flex justify-center mt-6">
                        <a href="#"
                            class="border-2 border-red-700 hover:text-white font-bold py-2 px-4 hover:bg-red-700 transition duration-300">
                            Hubungi Admin PPID untuk Bantuan Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
