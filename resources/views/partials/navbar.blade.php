<nav class="bg-white border-b border-gray-200 fixed w-full z-30">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo -->
        <a class="flex items-center ml-7">
            <img src="{{ asset('logo/logo_ppid.png') }}" class="h-14 mr-17" alt="PPID Logo">
        </a>

        <!-- Hamburger Menu (Mobile) -->
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Navbar Links -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white md:items-center">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">Beranda</a>
                </li>

                <!-- Profil -->
                <li class="relative group">
                    <a href="javascript:void(0)"
                        class="inline-block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">
                        Profil <span class="inline-block align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-down" viewBox="0 0 16 16">
                                <path
                                    d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" />
                            </svg>
                        </span>
                    </a>
                    <div id="dropdown"
                        class="absolute left-0 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow w-44 z-10">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="{{ route('visi-misi') }}" class="block px-4 py-2 hover:bg-gray-100">Visi
                                    Misi</a>
                            </li>
                            <li>
                                <a href="{{ route('tentang-ppid') }}" class="block px-4 py-2 hover:bg-gray-100">Tentang
                                    PPID</a>
                            </li>
                            <li>
                                <a href="{{ route('dasar-hukum') }}" class="block px-4 py-2 hover:bg-gray-100">Dasar
                                    Hukum</a>
                            </li>
                            <li>
                                <a href="{{ route('tugas-dan-fungsi-ppid-sumenep') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Tugas Dan Fungsi</a>
                            </li>
                            <li>
                                <a href="{{ route('struktural-organisasi') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Stuktural Organisasi</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Pelayanan Informasi -->
                @php
                    use App\Models\pelayanan_informasi;
                    $pelayanan_informasi = pelayanan_informasi::all();
                @endphp
                <li class="relative group">
                    <a href="javascript:void(0)"
                        class="inline-block py-3 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">
                        Pelayanan Informasi<span class="inline-block align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-down ml-1" viewBox="0 0 16 16">
                                <path
                                    d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" />
                            </svg>
                        </span>
                    </a>
                    <div id="dropdown"
                        class="absolute left-0 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow w-44 z-10">
                        <ul class="py-2 text-sm text-gray-700">
                            @foreach ($pelayanan_informasi as $item)
                                <li>
                                    <a href="{{ route('pelayanan-informasi', $item->id) }}"
                                        class="block px-4 py-2 hover:bg-gray-100">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <!-- Informasi Publik -->
                @php
                    use App\Models\InformasiPublik;
                    $informasi_publik = InformasiPublik::all();
                @endphp
                <li class="relative group">
                    <a href="javascript:void(0)"
                        class="inline-block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">
                        Informasi Publik<span class="inline-block align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-down ml-1" viewBox="0 0 16 16">
                                <path
                                    d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" />
                            </svg>
                        </span>
                    </a>
                    <div id="dropdown"
                        class="absolute left-0 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow w-44 z-10">
                        <ul class="py-2 text-sm text-gray-700">
                            @foreach ($informasi_publik as $item)
                                @if ($item->is_active == true)
                                    <li>
                                        <a href="{{ route('informasi-publik-detail', $item->id) }}"
                                            class="block px-4 py-2 hover:bg-gray-100">{{ $item->nama_informasi }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
                @if (Auth::check())
                    <li class="relative group">
                        <!-- Admin Pembantu -->
                        @if (Auth::user()->role == 'pembantu')
                            <a href="javascript:void(0)"
                                class="inline-block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">
                                PPID Pembantu<span class="inline-block align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-caret-down ml-1" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" />
                                    </svg>
                                </span>
                            </a>
                        @else
                            <!-- Admin Desa -->
                            <a href="javascript:void(0)"
                                class="inline-block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">
                                PPID Desa<span class="inline-block align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-caret-down ml-1" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" />
                                    </svg>
                                </span>
                            </a>
                        @endif
                        @if (Auth::user()->role == 'pembantu')
                            <div id="dropdown"
                                class="absolute left-0 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow w-44 z-10">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="{{ route('file-publik') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">File Informasi Publik</a>
                                        <a href="{{ route('infografis') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Infografis</a>
                                        <a href="{{ route('galery') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Galeri</a>
                                        <a href="{{ route('aplikasi-layanan-publik') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Aplikasi Layanan Publik</a>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div id="dropdown"
                                class="absolute left-0 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow w-44 z-10">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="{{ route('file-publik') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">File Informasi Publik</a>
                                        <a href="{{ route('infografis') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Infografis</a>
                                        <a href="{{ route('galery') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Galeri</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </li>
                @endif
                {{-- <li>
                    <a href="{{ route('ppid-desa') }}"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">PPID
                        Desa</a>
                </li> --}}
                @if (empty(Auth::check()))
                    <li>
                        <a href="{{ route('login') }}"
                            class="inline-block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">Login</a>
                        <span>/</span>
                        <a href="{{ route('register') }}"
                            class="inline-block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0">Register</a>
                    </li>
                @else
                    <li class="relative group">
                        <button
                            class="flex items-center space-x-1 text-gray-700 hover:text-red-700 focus:outline-none">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </button>
                        <div
                            class="absolute right-0 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow w-44 z-10">
                            <div class="py-2 text-sm text-gray-700">
                                <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profil</a>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
