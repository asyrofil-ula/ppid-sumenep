@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    <section id="hero" class="py-16 my-20 mx-auto">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row justify-between gap-6">
                <div class="w-full bg-white rounded-lg shadow-lg p-6">
                    <div class="container mx-auto px-4 py-6">
                        <h2 class="text-2xl font-semibold mb-4">{{ $informasi_publik->nama_informasi }}</h2>
                        @if ($informasi_publik_detail->isEmpty())
                            <p class="text-gray-600">Data tidak tersedia</p>
                        @endif
                        <div class="space-y-4">
                            
                            @foreach ($informasi_publik_detail as $index => $item)
                                <div class="border rounded-lg">
                                    <button
                                        class="w-full text-left px-4 py-2 bg-gray-200 hover:bg-gray-300 font-semibold flex justify-between items-center"
                                        onclick="toggleAccordion('section{{ $index + 1 }}')">
                                        {{ $index + 1 }}. {{ $item->description }}
                                        <span id="icon{{ $index + 1 }}">+</span>
                                    </button>
                                    <div id="section{{ $index + 1 }}" class="hidden px-4 py-4">
                                        <ul class="list-disc pl-5 space-y-2 text-blue-600">
                                            @isset($file_informasi_publik)
                                                @php
                                                    $FileExist = false;
                                                    $no = 1;
                                                @endphp
                                                @foreach ($file_informasi_publik as $data)
                                                    @if ($data->informasi_publik_detail_id == $item->id)
                                                        @php
                                                            $FileExist = true;
                                                        @endphp
                                                        <li>
                                                            <a href="{{ route('file-informasi-publik-file', $data->id) }}"
                                                                target="_blank" class="text-blue-600 underline">
                                                                {{ $no++ }}. {{ $data->deskripsi ?? 'Lihat Dokumen' }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                @if (!$FileExist)
                                                    <li>
                                                        <p class="text-red-600">File Belum Tersedia</p>
                                                    </li>
                                                @endif
                                            @else
                                                <li>
                                                    <p class="text-red-600">Data tidak tersedia</p>
                                                </li>
                                            @endisset
                                        </ul>

                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>

                    <script>
                        function toggleAccordion(id) {
                            const section = document.getElementById(id);
                            const icon = document.getElementById('icon' + id.replace('section', ''));
                            if (section.classList.contains('hidden')) {
                                section.classList.remove('hidden');
                                icon.textContent = '-';
                            } else {
                                section.classList.add('hidden');
                                icon.textContent = '+';
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
@endsection
