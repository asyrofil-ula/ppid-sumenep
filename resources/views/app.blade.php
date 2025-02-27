<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('partials.head')
</head>

<body class="bg-gray-100 h-screen antialiased leading-none">

    {{-- to top --}}
    <span id="top"></span>

    {{-- loader --}}
    <div class="loader" id="loader">
        <div class="justify-content-center jimu-primary-loading"></div>
    </div>

    {{-- content --}}
    <div id="app">
        @include('partials.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- scroll top --}}
    <button id="scrollToTopBtn"
        class="fixed bottom-5 right-5 bg-red-700 border-2 text-white p-3 rounded-full shadow-lg hidden hover:bg-red-500 transition duration-300 ease-in-out">
        ↑
    </button>

    {{-- footer --}}
    @include('partials.footer')

    {{-- scripts --}}
    @include('partials.scripts')
</body>

{{-- sweetalert --}}
@include('sweetalert::alert')


</html>
