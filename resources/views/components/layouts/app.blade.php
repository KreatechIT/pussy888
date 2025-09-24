<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Data -->
    <title>@stack('title', config('app.name'))</title>
    <meta name="title" content="@stack('meta_title')">
    <meta name="description" content="@stack('meta_description')">
    <meta name="keywords" content="@stack('meta_keywords')">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/frontend/images/logo.png') }}" type="image/x-icon">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- hreflang Tags -->
    <link rel="alternate" href="{{ route('home', ['locale' => 'en']) }}" hreflang="en" />
    <link rel="alternate" href="{{ route('home', ['locale' => 'bm']) }}" hreflang="bm" />
    <link rel="alternate" href="{{ route('home', ['locale' => 'zh']) }}" hreflang="zh" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema Data -->
    @stack('schema')

    <!-- Styles -->
    @stack('styles')

</head>

<body>

    @if ($slot->isEmpty())
        <p>
            Empty $slot
        </p>
    @else
        <div x-data="{ mobileOpen: false, gameMenu: false }" class="min-h-screen bg-black text-white">
            <x-layouts.header />
            {{ $slot }}
            <x-layouts.footer />

        </div>
    @endif

    <!-- AOS Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    </script>

    <!-- Scripts -->
    @stack('scripts')

</body>

</html>
