<!-- Top Bar -->
<div class="text-md bg-zinc-900">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 text-xs lg:text-base">
        <div class="opacity-80">Trusted Gaming • Fast Payouts • 24/7 Support</div>
        <div class="flex items-center gap-3">
            <a class="lang-btn opacity-80 hover:text-pink-400" data-lang="en">
                EN
            </a>
            <span class="opacity-50">|</span>
            <a class="lang-btn opacity-80 hover:text-pink-400" data-lang="bm">
                BM
            </a>
            <span class="opacity-50">|</span>
            <a class="lang-btn opacity-80 hover:text-pink-400" data-lang="zh">
                中文
            </a>
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
                    <img class="h-20 w-auto" src="{{ asset('assets/frontend/images/logo.png') }}" alt="Kiss918">
                </a>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden items-center gap-6 md:flex">
                <a class="@if (Route::currentRouteName() === 'home') text-purple-300 @endif transition hover:text-purple-300"
                    href="{{ route('home') }}">Home</a>

                <!-- Games (split dropdown) -->
                <div class="relative" x-data="{ open: false }" @keydown.escape.window="open = false"
                    @click.outside="open = false">
                    <div class="flex items-center">
                        {{-- Left: direct link to Games --}}
                        <a class="{{ request()->routeIs('game') ? 'text-purple-300' : '' }} {{ request()->routeIs('slot', 'live-casino', 'table-games', 'jackpot', 'games.*') ? 'text-purple-300' : '' }} transition hover:text-purple-300"
                            href="{{ route('game') }}">
                            Games
                        </a>

                        {{-- Right: caret toggle (opens dropdown) --}}
                        <button
                            class="ml-1 flex cursor-pointer items-center rounded-md p-1 transition hover:text-purple-300 focus:outline-none focus:ring-2 focus:ring-pink-400/40"
                            type="button" aria-haspopup="true" aria-label="Open games menu" @click="open = !open"
                            :aria-expanded="open.toString()">
                            <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 9-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    {{-- Dropdown panel --}}
                    <div class="absolute left-0 mt-2 w-56 rounded-lg border border-white/10 bg-zinc-900/95 p-2 shadow-lg"
                        role="menu" aria-label="Games submenu" x-cloak x-show="open" x-transition>
                        <a class="{{ request()->routeIs('slot') ? 'text-purple-300 bg-pink-400/10' : '' }} block rounded-md px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="{{ route('slot') }}" role="menuitem">Slots</a>

                        <a class="{{ request()->routeIs('live-casino') ? 'text-purple-300 bg-pink-400/10' : '' }} block rounded-md px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="{{ route('live-casino') }}" role="menuitem">Live Casino</a>

                        <a class="{{ request()->routeIs('table-games') ? 'text-purple-300 bg-pink-400/10' : '' }} block rounded-md px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="{{ route('table-games') }}" role="menuitem">Table Games</a>

                        <a class="{{ request()->routeIs('jackpot') ? 'text-purple-300 bg-pink-400/10' : '' }} block rounded-md px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="{{ route('jackpot') }}" role="menuitem">Jackpots</a>
                    </div>
                </div>

                <a class="@if (Route::currentRouteName() === 'promotions') text-purple-300 @endif transition hover:text-purple-300"
                    href="{{ route('promotions') }}">Promotions</a>
                <a class="@if (Route::currentRouteName() === 'blog') text-purple-300 @endif transition hover:text-purple-300"
                    href="{{ route('blog') }}">Blog</a>
                <a class="@if (Route::currentRouteName() === 'faq') text-purple-300 @endif transition hover:text-purple-300"
                    href="{{ route('faq') }}">FAQ</a>
            </div>

            <!-- CTA -->
            <div class="hidden items-center gap-3 md:flex">
                <x-partials.button type="outline"
                    href="https://lv168.com/en/register?up=luckywinwin14">Login</x-partials.button>
                <x-partials.button href="https://lv168.com/en/register?up=luckywinwin14">Register</x-partials.button>
            </div>

            <!-- Mobile Menu Button -->
            <button class="inline-flex items-center justify-center rounded-md border border-white/10 p-2 md:hidden"
                @click="mobileOpen = !mobileOpen">
                <svg class="size-5" x-show="!mobileOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="size-5" x-show="mobileOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div class="border-t border-white/10 bg-zinc-950 md:hidden" x-show="mobileOpen" x-transition>
        <div class="space-y-2 px-4 py-3">
            <a class="@if (Route::currentRouteName() === 'home') text-purple-300 bg-pink-400/10 @endif block rounded-md px-3 py-2 hover:bg-pink-400/10"
                href="{{ route('home') }}">Home</a>
            <div class="rounded-md" x-data="{ open: false }" @click.outside="open = false"
                @keydown.escape.window="open = false">

                <div class="flex items-center justify-between">
                    {{-- Left: direct link to Games --}}
                    <a class="{{ request()->routeIs('game') ? 'text-purple-300' : '' }} {{ request()->routeIs('slot', 'live-casino', 'table-games', 'jackpot', 'games.*') ? 'text-purple-30 bg-pink-400/10' : '' }} block w-full rounded-md px-3 py-2 hover:bg-pink-400/10"
                        href="{{ route('game') }}">
                        Games
                    </a>

                    {{-- Right: caret toggle --}}
                    <button
                        class="ml-2 flex items-center rounded-md p-2 hover:bg-pink-400/10 focus:outline-none focus:ring-2 focus:ring-pink-400/40"
                        type="button" aria-label="Toggle games submenu" @click="open = !open"
                        :aria-expanded="open.toString()">
                        <svg class="size-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                </div>

                {{-- Dropdown panel --}}
                <div class="mt-1 space-y-1 pl-3" x-cloak x-show="open" x-transition>
                    <a class="{{ request()->routeIs('slot') ? 'text-purple-300 bg-pink-400/10' : '' }} block rounded-md px-3 py-2 hover:bg-pink-400/10"
                        href="{{ route('slot') }}">
                        Slots
                    </a>

                    <a class="{{ request()->routeIs('live-casino') ? 'text-purple-300 bg-pink-400/10' : '' }} block rounded-md px-3 py-2 hover:bg-pink-400/10"
                        href="{{ route('live-casino') }}">
                        Live Casino
                    </a>

                    <a class="{{ request()->routeIs('table-games') ? 'text-purple-300 bg-pink-400/10' : '' }} block rounded-md px-3 py-2 hover:bg-pink-400/10"
                        href="{{ route('table-games') }}">
                        Table Games
                    </a>

                    <a class="{{ request()->routeIs('jackpot') ? 'text-purple-300 bg-pink-400/10' : '' }} block rounded-md px-3 py-2 hover:bg-pink-400/10"
                        href="{{ route('jackpot') }}">
                        Jackpots
                    </a>
                </div>
            </div>

            <a class="@if (Route::currentRouteName() === 'promotions') text-purple-300 bg-pink-400/10 @endif block rounded-md px-3 py-2 hover:bg-pink-400/10"
                href="{{ route('promotions') }}">Promotions</a>
            <a class="@if (Route::currentRouteName() === 'blog') text-purple-300 bg-pink-400/10 @endif block rounded-md px-3 py-2 hover:bg-pink-400/10"
                href="{{ route('blog') }}">Blog</a>
            <a class="@if (Route::currentRouteName() === 'faq') text-purple-300 bg-pink-400/10 @endif block rounded-md px-3 py-2 hover:bg-pink-400/10"
                href="{{ route('faq') }}">FAQ</a>

            <div class="flex items-center gap-2 pt-2">
                <a class="flex-1 rounded-md border border-purple-400/60 px-4 py-2 text-center text-sm hover:bg-purple-400/10"
                    href="#">Login</a>
                <a class="flex-1 rounded-md bg-purple-400 px-4 py-2 text-center text-sm font-semibold text-black hover:bg-purple-300"
                    href="#">Register</a>
            </div>
        </div>
    </div>
</div>
