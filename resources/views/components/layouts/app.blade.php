<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-G10CZEV6T9"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-G10CZEV6T9');
        </script>
        <meta name="google-site-verification" content="vIpZ982sF-9bZbr8f1hVOQ1dJn2q363OqLUkpygd9Mw" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Meta Data -->
        <title>@stack('title', config('app.name'))</title>
        <meta name="title" content="@stack('meta_title')">
        <meta name="description" content="@stack('meta_description')">
        <meta name="keywords" content="@stack('meta_keywords')">

        <!-- Favicon -->
        <link href="{{ asset('assets/frontend/favicon.ico') }}" rel="icon" />

        <!-- Font Awesome CDN -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            rel="stylesheet"
            integrity="sha512-..."
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <!-- AOS CDN -->
        <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />

        @php
            $route = request()->route();
            $routeName = $route?->getName();
            $params = $route?->parameters() ?? [];
            $canonical = $routeName ? route($routeName, $params) : url()->current();
        @endphp

        <link href="{{ $canonical }}" rel="canonical" />

        <!-- Canonical Tag -->
        <link href="{{ url()->current() }}" rel="canonical" />

        <!-- hreflang Tags -->
        <link
            id="alt-en"
            href="{{ route('home') }}"
            hreflang="en"
            rel="alternate"
        />
        <link
            id="alt-bm"
            href="{{ route('home', ['lang' => 'bm']) }}"
            hreflang="bm"
            rel="alternate"
        />
        <link
            id="alt-zh"
            href="{{ route('home', ['lang' => 'zh']) }}"
            hreflang="zh"
            rel="alternate"
        />

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
            <div class="min-h-screen bg-black text-white" x-data="{ mobileOpen: false, gameMenu: false }">
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
