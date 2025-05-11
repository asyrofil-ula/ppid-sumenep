@extends('app')

@section('title', 'Reset Password PPID Sumenep')

@section('content')
    <div class="my-20">
        <div class="max-w-screen-sm mx-auto px-4 md:px-0 ">
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
            <div class="flex justify-center items-center p-5">
                <div class="w-full bg-gradient-to-br from-red-700 to-red-800 p-8 md:p-10 rounded-xl shadow-xl">
                    <h1 class="text-2xl md:text-3xl font-bold text-center text-white">Lupa Password</h1>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="block">
                            <label for="email" class="block text-sm font-medium text-white">Email</label>
                            <div class="mt-1">
                                <input id="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" name="email" type="email" autocomplete="email" required>
                            </div>
                            @error('email')
                            <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="w-full py-3 bg-red-400 border-2 border-red-400 text-white font-bold rounded hover:bg-red-500 transition duration-300">
                                Kirim Link Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
