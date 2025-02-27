@extends('app')

@section('title', 'Register PPID Sumenep')

@section('content')
    <div class="my-40">
        <div class="max-w-screen-sm mx-auto">
            <div class="flex justify-center h-16 md:h-28 p-1">
                <img src="{{ asset('logo/logo_ppid.png') }}" alt="logo_ppid" class="h-full"><span
                    class="border-l-4 md:border-l-8-2 border-black"></span>
                <h1 class="flex flex-col justify-center w-fit md:text-3xl font-bold ml-4">
                    <span>Sistem Informasi dan</span>
                    <span>Dokumentasi Publik</span>
                </h1>
            </div>
            <div class="w-full bg-red-700 mt-10 py-10 pb-20 px-10 md:px-20 rounded-sm">
                <h1 class="text-2xl font-bold text-center text-white">DAFTAR</h1>
                <form method="POST" action="{{ route('register.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col mt-4">
                        <label for="name" class="text-white mb-1">Nama Lengkap</label>
                        <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap"
                            class="p-2 border-2 border-red-800 rounded">
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="perangkat_daerah" class="text-white mb-1">Pilih Nama Perangkat Desa</label>
                        <input type="text" name="perangkat_daerah" id="perangkat_daerah"
                            placeholder="Masukkan Nama Perangkat desa" class="p-2 border-2 border-red-800 rounded">
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="operator_ppid" class="text-white mb-1">Operator PPID</label>
                        <input type="text" name="operator_ppid" id="operator_ppid" placeholder="Masukkan Operator PPID"
                            class="p-2 border-2 border-red-800 rounded">
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="no_whatsapp" class="text-white mb-1">No Whatsapp</label>
                        <input type="text" name="no_whatsapp" id="no_whatsapp"
                            class="p-2 border-2 border-red-800 rounded" placeholder="+62 8xx-xxxx-xxxx">
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="email" class="text-white mb-1">Email</label>
                        <input type="email" name="email" id="email" class="p-2 border-2 border-red-800 rounded"
                            placeholder="example@gmail.com">
                    </div>
                    <div class="flex flex-col mt-6">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-2 flex-1">
                                <input type="text" id="file-name" class="flex-1 border rounded px-3 py-2 w-full truncate"
                                    placeholder="Upload Surat Tugas" readonly>
                                <button type="button" id="upload-button"
                                    class="w-10 h-10 flex items-center justify-center bg-red-200 rounded-full">
                                    ⬆️
                                </button>
                                <input type="file" id="file-input" class="hidden" accept=".pdf" name="file_pdf" />
                            </div>
                        </div>
                        <script>
                            document.getElementById('upload-button').addEventListener('click', function() {
                                document.getElementById('file-input').click(); // Trigger file input when button is clicked
                            });

                            document.getElementById('file-input').addEventListener('change', function(event) {
                                var file = event.target.files[0]; // Get the selected file
                                if (file) {
                                    document.getElementById('file-name').value = file.name; // Display file name in the text box
                                }
                            });
                        </script>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="w-full py-3 bg-red-400 border-2 border-red-400 text-white rounded font-bold md:text-xl hover:bg-red-500">Daftar</button>
                    </div>
                    <p class="text-white mt-10 text-center"> Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-white text-center mt-4 underline hover:text-red-200">
                            Login Sekarang</a>
                    </p>
                </form>
                @if ($errors->any())
                    <div class="bg-red-300 text-white p-4 mt-4 rounded">
                        <ul class="li list-decimal p-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
