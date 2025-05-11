@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
<div class=" flex justify-center items-center w-screen h-screen p-5 my-40">
    <div class="border bg-white shadow-teal-300 shadow-md max-w-2xl p-6 rounded-lg hover:border-3">
        <h2 class="text-4xl font-mono font-extrabold py-3 text-center text-red-500">STUKTURAL PPID SUMENEP</h2>
        <div class="flex justify-center mt-1">
            <img src="{{ asset('logo/stukturalppid.jpg') }}" alt="dummyimage" class="my-2" />
        </div>
    </div>
</div>
@endsection