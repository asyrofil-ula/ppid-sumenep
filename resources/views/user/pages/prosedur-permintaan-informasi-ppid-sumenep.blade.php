@extends('app')
@section('title', 'Prosedur Permintaan Informasi')
@section('content')
    <section class="flex flex-col md:flex-row justify-center my-20 w-full border bg-white p-5">
        <img class="w-full md:w-1/2 rounded-lg p-5" src="https://ppid.sumenepkab.go.id/assets/img/prosedur_info_publik.jpg"
            alt="Prosedur Permintaan Informasi">
        <div class="flex flex-col p-4 leading-normal w-full md:w-1/2">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900">Prosedur Permintaan Informasi</h5><br>
            <p class="font-normal text-gray-700 mb-4">
                Berikut adalah prosedur permintaan informasi publik di Kabupaten Sumenep. Silakan mengikuti
                langkah-langkah berikut untuk mengajukan permohonan informasi.
            </p>
            <ol class="ml-4 space-y-1 text-gray-700 list-decimal">
                <li>Pemohon informasi datang ke desk layanan informasi mengisi formulir permintaan informasi dengan
                    melampirkan foto copy KTP pemohon dan pengguna informasi, bagi lembaga publik/ormas dilengkapi foto
                    copy akta pendirian, surat keterangan terdaftar di Bakesbangpol Kabupaten Sumenep/setempat, surat
                    keterangan domisili lembaga publik/ormas.</li>
                <li>Maksud dan tujuan permintaan informasi harus jelas penggunaannya.</li>
                <li>Petugas memberi tanda bukti penerimaan permintaan informasi publik kepada pemohon informasi publik.</li>
                <li>Petugas memproses permintaan pemohon informasi publik sesuai dengan formulir permintaan informasi
                    publik yang telah ditandatangani oleh pemohon informasi publik.</li>
                <li>Petugas menyerahkan informasi sesuai dengan yang diminta oleh pemohon/pengguna informasi. Jika
                    informasi yang diminta masuk dalam kategori dikecualikan, PPID menyampaikan alasan sesuai dengan
                    keterangan perundangan yang berlaku.</li>
                <li>Petugas memberikan tanda bukti penyerahan informasi publik kepada pengguna informasi publik.</li>
                <li>Petugas membukukan dan mencatat.</li>
            </ol>
            <div class="flex flex-col md:flex-row items-center gap-5 mt-6">
                <div class="text-center w-full md:w-auto">
                    <a href="https://drive.google.com/file/d/1iPqeLV1a5HW7gIjzPNYUIFl6nsNPBXx3/view?usp=drive_link"
                        download="document.pdf"
                        class="border-2 border-red-700 hover:text-white font-bold py-2 px-4 hover:bg-red-700">
                        Download Formulir Permohonan Informasi
                    </a>
                </div>
                <div class="text-center w-full md:w-auto">
                    <a href="https://www.lapor.go.id/"
                        class="border-2 border-red-700 hover:text-white font-bold py-2 px-4 hover:bg-red-700">
                        Layanan Permohonan Informasi Online
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
