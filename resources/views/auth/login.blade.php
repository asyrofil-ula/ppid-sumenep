@extends('app')

@section('title', 'Login PPID Sumenep')

@section('content')
    <div class="my-20">
        <div class="max-w-screen-sm mx-auto px-4">
            <!-- Header with enhanced styling -->
            <div class="flex justify-center items-center h-20 md:h-28 mb-8">
                <div class="flex items-center py-3 px-6 rounded-lg">
                    <img src="{{ asset('logo/logo_ppid.png') }}" alt="logo_ppid" class="h-14 md:h-16">
                    <span class="border-l-2 border-gray-400 h-10 md:h-12 mx-4"></span>
                    <h1 class="flex flex-col justify-center md:text-3xl font-bold text-gray-800">
                        <span>Sistem Informasi dan</span>
                        <span>Dokumentasi Publik</span>
                    </h1>
                </div>
            </div>
            <div class="mt-6 mb-4 bg-white p-5 rounded-lg shadow-md border-l-4 border-red-500">
                <div class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h3 class="font-bold text-gray-800 mb-1">Informasi Login</h3>
                        <p class="text-gray-600 text-sm line-clamp-3">Untuk mendapatkan akses, silakan hubungi administrator PPID Kabupaten Sumenep melalui kontak yang tersedia di halaman registrasi.</p>
                    </div>
                </div>
            </div>
            <!-- Login Form with enhanced styling -->
            <div class="w-full bg-gradient-to-br from-red-700 to-red-800 p-8 md:p-10 rounded-xl shadow-xl">
                <div class=" rounded-lg p-3 mb-8 backdrop-blur-sm">
                    <h1 class="text-2xl md:text-3xl font-bold text-center text-white">MASUK AKUN</h1>
                </div>

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="flex flex-col mb-6">
                        <label for="name" class="text-white mb-2 font-medium flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                            Username
                        </label>
                        <input type="text" name="name" id="name"
                            class="p-3 bg-white/10 border border-red-300/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300 text-white placeholder-red-100/60"
                            placeholder="Masukkan username">
                        @error('name')
                            <div class="mt-1 flex items-center text-red-200 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-8">
                        <label for="password" class="text-white mb-2 font-medium flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                            Password
                        </label>
                        <div class="relative">
                            <input type="password" name="password" id="password"
                                class="w-full p-3 bg-white/10 border border-red-300/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300 text-white placeholder-red-100/60"
                                placeholder="Masukkan password">
                            <button type="button" id="show-password" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white/70 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <div class="mt-1 flex items-center text-red-200 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </div>
                        @enderror
                          <a href="{{ route('password.request') }}" class="text-xs text-red-100 hover:underline">Lupa password?</a>
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                            class="w-full py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-lg font-bold text-lg hover:from-red-600 hover:to-red-700 transition duration-300 shadow-lg transform hover:scale-[1.02]">
                            MASUK
                        </button>
                    </div>

                    <div class="mt-6 text-center">
                        <p class="text-red-100"> Belum punya akun?
                            <a href="{{ route('register') }}" class="text-white font-medium ml-1 hover:underline">
                                Daftar</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('show-password').addEventListener('mousedown', function() {
            document.getElementById('password').type = 'text';
        });

        document.getElementById('show-password').addEventListener('mouseup', function() {
            document.getElementById('password').type = 'password';
        });

        document.getElementById('show-password').addEventListener('mouseleave', function() {
            document.getElementById('password').type = 'password';
        });
    </script>
@endsection
