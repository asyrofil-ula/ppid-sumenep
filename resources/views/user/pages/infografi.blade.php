@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')

    <section class="max-w-screen-xl mx-auto my-10 p-10 md:p-0">
        <div class="max-auto">
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <h1 class="font-bold text-2xl md:text-4xl my-10">Infografis</h1>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($infografis as $data)
                        @if ($data->is_active == true)
                            <div class="group bg-white border border-gray-100 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col h-full">
                                <div class="relative overflow-hidden aspect-[4/5]">
                                    <img src="{{ asset('storage/' . $data->path_dokumen) }}" alt="{{ $data->nama_dokumen }}"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                                        width="1080" height="1350" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-red-800 to-transparent opacity-70"></div>
                                </div>

                                <div class="relative flex-1 bg-gradient-to-r from-red-700 to-red-800 p-6 flex flex-col justify-between">
                                    <div class="absolute top-0 right-0 w-24 h-24 opacity-10">
                                        <img src="{{ asset('icon/keris.png') }}" class="w-full" alt="Keris" />
                                    </div>

                                    <h2 class="text-xl font-bold text-white mb-4 line-clamp-2">{{ $data->nama_infografis }}</h2>
                                    <p class="text-red-100 text-sm mb-4 line-clamp-3">
                                        {{ $data->description ?? 'Informasi visual interaktif yang menyajikan data dan wawasan penting dalam format yang mudah dipahami.' }}
                                    </p>
                                    <div class="flex items-center mb-4">
                                        <div class="flex items-center bg-red-900/30 rounded-full px-3 py-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-100 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <span class="text-red-100 text-xs font-medium">
                                                Posted by: <span class="text-white ml-1">{{ $data->post_by }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                
                <div class="mt-10">
                    {{ $infografis->links('pagination::tailwind') }}
                </div>
                
            </div>
        </div>
    </section>

@endsection