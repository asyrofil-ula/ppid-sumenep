@extends('app')

@section('title', 'Login PPID Sumenep')

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
            <div class="w-full bg-red-700 mt-10 p-4 px-20 h-96 rounded-sm">
                <h1 class="text-2xl font-bold text-center text-white">MASUK</h1>
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="flex flex-col mt-4">
                        <label for="name" class="text-white mb-1">Username</label>
                        <input type="text" name="name" id="name" class="p-2 border border-gray-800 rounded"
                            placeholder="Masukkan name">
                    </div>
                    @error('name')
                        <li class="text-white text-sm">{{ $message }}</li>
                    @enderror
                    <div class="flex flex-col mt-4">
                        <label for="password" class="text-white mb-1">Password</label>
                        <input type="password" name="password" id="password" class="p-2 border border-gray-800 rounded"
                            placeholder="Masukkan password">
                    </div>
                    @error('password')
                        <li class="text-white text-sm">{{ $message }}</li>
                    @enderror
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="w-full py-3 bg-red-400 border-2 border-red-400 text-white rounded hover:bg-red-500">Login</button>
                    </div>
                    <p class="text-white mt-10 text-center"> Belum punya akun?
                        <a href="{{ route('register') }}" class="text-white text-center mt-4 underline hover:text-red-200">
                            Hubungi Admin</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
