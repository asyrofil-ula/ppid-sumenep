{{-- meta --}}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

{{-- favicon --}}
<link rel="icon" href="{{ asset('logo/logo_ppid.png') }}" type="image/x-icon">

{{-- boostrap icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

{{-- title --}}
<title>@yield('title')</title>

{{-- flowbite vite --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

{{-- aos --}}
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

{{-- custom css --}}
@stack('styles')

{{-- jquery --}}

<style>
    /* From Uiverse.io by Donewenfu */
    .loader {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        background-color: rgba(0, 0, 0, 0.94);
    }

    .jimu-primary-loading:before,
    .jimu-primary-loading:after {
        position: absolute;
        top: 0;
        content: '';
    }

    .jimu-primary-loading:before {
        left: -19.992px;
    }

    .jimu-primary-loading:after {
        left: 19.992px;
        -webkit-animation-delay: 0.32s !important;
        animation-delay: 0.32s !important;
    }

    .jimu-primary-loading:before,
    .jimu-primary-loading:after,
    .jimu-primary-loading {
        background: red;
        -webkit-animation: loading-keys-app-loading 0.8s infinite ease-in-out;
        animation: loading-keys-app-loading 0.8s infinite ease-in-out;
        width: 13.6px;
        height: 32px;
    }

    .jimu-primary-loading {
        text-indent: -9999em;
        margin: auto;
        position: absolute;
        right: calc(50% - 6.8px);
        top: calc(50% - 16px);
        -webkit-animation-delay: 0.16s !important;
        animation-delay: 0.16s !important;
    }

    @-webkit-keyframes loading-keys-app-loading {

        0%,
        80%,
        100% {
            opacity: .75;
            box-shadow: 0 0 red;
            height: 32px;
        }

        40% {
            opacity: 1;
            box-shadow: 0 -8px red;
            height: 40px;
        }
    }

    @keyframes loading-keys-app-loading {

        0%,
        80%,
        100% {
            opacity: .75;
            box-shadow: 0 0 red;
            height: 32px;
        }

        40% {
            opacity: 1;
            box-shadow: 0 -8px red;
            height: 40px;
        }
    }
</style>
