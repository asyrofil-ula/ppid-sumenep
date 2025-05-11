@extends('app')

@section('title', 'Register PPID Sumenep')

@section('content')
    <div class="my-20">
        <div class="max-w-screen-xl mx-auto px-4">
            <!-- Header with enhanced styling -->
            <div class="flex justify-center items-center h-20 md:h-28 mb-8">
                <div class="flex items-center py-3 px-6 rounded">
                    <img src="{{ asset('logo/logo_ppid.png') }}" alt="logo_ppid" class="h-14 md:h-16">
                    <span class="border-l-2 border-gray-400 h-10 md:h-12 mx-4"></span>
                    <h1 class="flex flex-col justify-center md:text-3xl font-bold text-gray-800">
                        <span>Sistem Informasi dan</span>
                        <span>Dokumentasi Publik</span>
                    </h1>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-8 mt-6">
                <!-- Registration Form with enhanced styling -->
                <div class="w-full md:w-2/3 bg-gradient-to-br from-red-700 to-red-800 py-8 px-6 md:px-10 rounded-xl shadow-xl">
                    <div class="ounded-lg p-3 mb-6 backdrop-blur-sm">
                        <h1 class="text-2xl md:text-3xl font-bold text-center text-white">PENDAFTARAN AKUN PPID</h1>
                    </div>
                    
                    <form method="POST" action="{{ route('register.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col">
                                <label for="name" class="text-white mb-1 font-medium">Nama Lengkap</label>
                                <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap"
                                    class="p-3 bg-white/10 border border-red-300/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300 text-white placeholder-red-100/60">
                            </div>
                            
                            <div class="flex flex-col">
                                <label for="perangkat_daerah" class="text-white mb-1 font-medium">Perangkat Desa</label>
                                <input type="text" name="perangkat_daerah" id="perangkat_daerah"
                                    placeholder="Masukkan Nama Perangkat Desa" 
                                    class="p-3 bg-white/10 border border-red-300/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300 text-white placeholder-red-100/60">
                            </div>
                            
                            <div class="flex flex-col">
                                <label for="operator_ppid" class="text-white mb-1 font-medium">Operator PPID</label>
                                <input type="text" name="operator_ppid" id="operator_ppid" placeholder="Masukkan Operator PPID"
                                    class="p-3 bg-white/10 border border-red-300/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300 text-white placeholder-red-100/60">
                            </div>
                            
                            <div class="flex flex-col">
                                <label for="no_whatsapp" class="text-white mb-1 font-medium">No Whatsapp</label>
                                <input type="text" name="no_whatsapp" id="no_whatsapp" placeholder="+62 8xx-xxxx-xxxx"
                                    class="p-3 bg-white/10 border border-red-300/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300 text-white placeholder-red-100/60">
                            </div>
                            
                            <div class="flex flex-col md:col-span-2">
                                <label for="email" class="text-white mb-1 font-medium">Email</label>
                                <input type="email" name="email" id="email" placeholder="example@gmail.com"
                                    class="p-3 bg-white/10 border border-red-300/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300 text-white placeholder-red-100/60">
                            </div>
                        </div>
                        
                        <div class="flex flex-col mt-6">
                            <label class="text-white mb-2 font-medium">Surat Tugas</label>
                            <div class="flex items-center">
                                <div class="relative flex-1">
                                    <input type="text" id="file-name" 
                                        class="w-full p-3 pr-12 rounded-lg bg-white/10 border border-red-300/30 text-white placeholder-red-100/60 focus:outline-none"
                                        placeholder="Upload Surat Tugas (Format PDF)" readonly>
                                    <button type="button" id="upload-button"
                                        class="absolute right-2 top-1/2 transform -translate-y-1/2 w-9 h-9 flex items-center justify-center bg-red-200 text-red-800 rounded-full hover:bg-red-300 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <input type="file" id="file-input" class="hidden" accept=".pdf" name="file_pdf" />
                                </div>
                            </div>
                            <p class="text-xs text-red-200 mt-2">*Format PDF maksimal 2MB</p>
                        </div>
                        
                        <div class="mt-8">
                            <button type="submit"
                                class="w-full py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-lg font-bold text-lg hover:from-red-600 hover:to-red-700 transition duration-300 shadow-lg transform hover:scale-[1.02]">
                                DAFTAR SEKARANG
                            </button>
                        </div>
                        
                        <div class="mt-8 text-center">
                            <p class="text-red-100"> Sudah punya akun?
                                <a href="{{ route('login') }}" class="text-white font-medium ml-1 hover:underline">
                                    Login Sekarang</a>
                            </p>
                        </div>
                    </form>
                    
                    @if ($errors->any())
                        <div class="bg-red-900/60 text-white p-4 mt-6 rounded-lg border border-red-400">
                            <h3 class="font-bold mb-2">Terdapat kesalahan:</h3>
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <!-- Enhanced Registration Guide Panel -->
                <div class="w-full md:w-1/3">
                    <div class="bg-gradient-to-br from-amber-50 to-amber-100 p-6 rounded-xl shadow-lg border-l-4 border-amber-400 mb-6">
                        <h2 class="text-xl font-bold text-amber-800 mb-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Panduan Registrasi
                        </h2>
                        <ul class="list-none space-y-3 text-gray-700 text-sm">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Isikan seluruh data dengan lengkap dan benar</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Nomor WhatsApp harus aktif untuk verifikasi</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Upload Surat Tugas dalam format PDF (maksimal 2MB)</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Pastikan email yang digunakan aktif untuk menerima notifikasi</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Proses verifikasi membutuhkan waktu 1-2 hari kerja</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl shadow-lg border-l-4 border-blue-400 mb-6">
                        <h3 class="font-bold text-blue-800 text-lg flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            Perhatian
                        </h3>
                        <p class="text-gray-700 mt-3 text-sm line-clamp-3">Pendaftaran ini diperuntukkan bagi petugas PPID Desa di Kabupaten Sumenep. Pastikan Anda telah mendapatkan surat penugasan resmi sebelum melakukan pendaftaran.</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-6 rounded-xl shadow-lg">
                        <h3 class="font-semibold text-gray-800 text-lg flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Butuh Bantuan?
                        </h3>
                        <div class="mt-3 space-y-3">
                            <p class="text-gray-600">Hubungi admin PPID Kabupaten Sumenep:</p>
                            <div class="flex items-center text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="font-medium">(0328) 662635</span>
                            </div>
                            <div class="flex items-center text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="font-medium">ppid@sumenepkab.go.id</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
@endsection