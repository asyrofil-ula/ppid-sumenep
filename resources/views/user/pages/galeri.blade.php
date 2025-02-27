@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')

<section class="max-w-screen-xl mx-auto my-10 p-10 md:p-0">
    <div class="max-auto">
        <div class="p-4">
            <div class="flex items-center justify-between">
                <h1 class="font-bold text-2xl md:text-4xl my-10">Galeri Foto</h1>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @if ($galeris->isEmpty())
                    <div class="flex items-center justify-center col-span-full">
                        <h1 class="text-center font-bold text-2xl md:text-4xl my-10">Tidak ada gambar</h1>
                    </div>
                @else
                    @foreach ($galeris as $data)
                        <a href="">
                            <div class="group relative overflow-hidden rounded-lg cursor-pointer">
                                <div class="overflow-hidden aspect-[1.91/1]">
                                    <img src="{{ asset('storage/' . $data->path_img) }}" 
                                        alt="{{ $data->title }}"
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <span class="text-white font-bold text-xl text-center">{{ $data->title }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
            <div class="p-10">
                {{ $galeris->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</section>

@endsection
