@php
    $segments = request()->segments();
    $segments[0] = 'en';
    $urlEn = '/' . implode('/', $segments);
    $segments[0] = 'bm';
    $urlBm = '/' . implode('/', $segments);
    $segments[0] = 'zh';
    $urlZh = '/' . implode('/', $segments);
@endphp

<!-- Top Bar -->
<div class="text-md bg-zinc-900">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 text-xs lg:text-lg">
        <div class="opacity-80">Trusted Gaming • Fast Payouts • 24/7 Support</div>
        <div class="flex items-center gap-3">
            <a class="opacity-80 hover:text-purple-300" href="{{ $urlEn }}">EN</a>
            <span class="opacity-50">|</span>
            <a class="opacity-80 hover:text-purple-300" href="{{ $urlBm }}">BM</a>
            <span class="opacity-50">|</span>
            <a class="opacity-80 hover:text-purple-300" href="{{ $urlZh }}">中文</a>
        </div>
    </div>
</div>

<!-- Navbar -->
<div
    class="sticky top-0 z-50 border-b border-white/10 bg-black/80 backdrop-blur supports-[backdrop-filter]:bg-black/60">
    <div class="mx-auto max-w-7xl px-4">
        <div class="flex h-20 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}">
                    <img
                        class="h-20 w-auto"
                        src="{{ asset('assets/frontend/images/logo.png') }}"
                        alt="Kiss918"
                    >
                </a>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden items-center gap-6 md:flex">
                <a class="transition hover:text-purple-300" href="{{ route('home') }}">Home</a>

                <!-- Games Dropdown (desktop) -->
                <div class="relative" x-data="{ open: false }">
                    <button
                        class="flex items-center gap-1 transition hover:text-purple-300"
                        @mouseenter="open=true"
                        @mouseleave="open=false"
                    >
                        Games
                        <svg
                            class="size-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m19 9-7 7-7-7"
                            />
                        </svg>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-56 rounded-lg border border-white/10 bg-zinc-900/95 p-2 shadow-lg"
                        @mouseenter="open=true"
                        @mouseleave="open=false"
                        x-show="open"
                        x-transition
                    >
                        <a class="block rounded-md px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300" href="#">Slots</a>
                        <a class="block rounded-md px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300" href="#">Live Casino</a>
                    </div>
                </div>

                <a class="transition hover:text-purple-300" href="#">Promotions</a>
                <a class="transition hover:text-purple-300" href="#">Blog</a>
                <a class="transition hover:text-purple-300" href="#">FAQ</a>
            </div>

            <!-- CTA -->
            <div class="hidden items-center gap-3 md:flex">
                <x-partials.button type="outline" href="#">Login</x-partials.button>
                <x-partials.button href="#">Register</x-partials.button>
            </div>

            <!-- Mobile Menu Button -->
            <button class="inline-flex items-center justify-center rounded-md border border-white/10 p-2 md:hidden"
                @click="mobileOpen = !mobileOpen"
            >
                <svg
                    class="size-5"
                    x-show="!mobileOpen"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>
                <svg
                    class="size-5"
                    x-show="mobileOpen"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div
        class="border-t border-white/10 bg-zinc-950 md:hidden"
        x-show="mobileOpen"
        x-transition
    >
        <div class="space-y-2 px-4 py-3">
            <a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">Home</a>
            <div class="rounded-md" x-data="{ open: false }">
                <button class="flex w-full items-center justify-between rounded-md px-3 py-2 hover:bg-white/5"
                    @click="open=!open"
                >
                    <span>Games</span>
                    <svg
                        class="size-4"
                        :class="open && 'rotate-180'"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m19 9-7 7-7-7"
                        />
                    </svg>
                </button>
                <div
                    class="mt-1 space-y-1 pl-3"
                    x-show="open"
                    x-transition
                >
                    <a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">Slots</a>
                    <a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">Live Casino</a>
                </div>
            </div>
            <a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">Promotions</a>
            <a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">Blog</a>
            <a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">FAQ</a>

            <div class="flex items-center gap-2 pt-2">
                <a class="flex-1 rounded-md border border-purple-400/60 px-4 py-2 text-center text-sm hover:bg-purple-400/10"
                    href="#"
                >Login</a>
                <a class="flex-1 rounded-md bg-purple-400 px-4 py-2 text-center text-sm font-semibold text-black hover:bg-purple-300"
                    href="#"
                >Register</a>
            </div>
        </div>
    </div>
</div>
