<!DOCTYPE html>
<html lang="en">

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

    @php
        $route = request()->route();
        $routeName = $route?->getName();
        $params = $route?->parameters() ?? [];
        $canonical = $routeName ? route($routeName, $params) : url()->current();
    @endphp

    <link href="{{ $canonical }}" rel="canonical" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- hreflang Tags -->
    <link id="alt-en" rel="alternate" href="{{ route('home') }}" hreflang="en" />
    <link id="alt-bm" rel="alternate" href="{{ route('home', ['lang' => 'bm']) }}" hreflang="bm" />
    <link id="alt-zh" rel="alternate" href="{{ route('home', ['lang' => 'zh']) }}" hreflang="zh" />

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

    <x-layouts.language-scripts />

    <!-- Scripts -->
    @stack('scripts')

</body>

</html>
