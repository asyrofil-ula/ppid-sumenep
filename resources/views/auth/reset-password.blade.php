@extends('app')
@section('title', 'Reset Password PPID Sumenep')
@section('content')

    <div class="my-20">
        <div class="max-w-screen-sm mx-auto px-4">
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
            <hr class="border-t-2 border-gray-400 w-full my-4">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold mb-4">Reset Password</h2>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ old('email', request()->email) }}">

                    <label class="block mb-2">Password Baru</label>
                    <input type="password" name="password" class="w-full p-2 border rounded mb-4" required>

                    <label class="block mb-2">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="w-full p-2 border rounded mb-4" required>

                    @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                    <button type="submit"
                        class="w-full bg-red-400 text-white border-2 border-red-400 font-bold py-2 hover:bg-red-500 rounded">
                        Reset Password
                    </button>
                </form>
            </div>

        </div>
    </div>

@endsection
