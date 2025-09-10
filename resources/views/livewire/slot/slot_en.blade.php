@push('title')
    Slots
@endpush

<div x-data="{
        openFilter:false,
        selectedFilter:'All',
        filters:['All','Classic 3-Reel','Video 5-Reel','Progressive Jackpots'],
        matches(category){ return this.selectedFilter==='All' || this.selectedFilter===category }
    }" class="bg-black text-white">
    <!-- Page Header -->
    <x-partials.heading title="Slot Games" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />

    <!-- Page Title -->
    <div class="mx-auto max-w-7xl px-4 pt-8">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h1 class="text-2xl sm:text-3xl font-bold">Pussy888 Slot Games – Spin to Win Big!</h1>
            <p class="mt-3 text-white/80">
                Welcome to the thrilling world of Pussy888 slot games, where excitement meets opportunity on every spin.
                As one of Malaysia’s most popular online casino platforms, Pussy888 offers a massive collection of
                high-quality slots designed for fun, fast-paced play and real-money rewards. Whether you're a seasoned
                spinner or brand new to online slots, you'll find a game that fits your style and budget.
            </p>
        </div>
    </div>

    <!-- Why Play -->
    <div class="mx-auto max-w-7xl px-4 mt-6">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Why Play Slot Games at Pussy888?</h2>
            <p class="mt-2 text-white/80">
                Slot games are the heart of the Pussy888 experience—fast, rewarding, and packed with features. With
                hundreds of titles, explore everything from classic 3-reel machines to modern 5-reel video slots loaded
                with bonus rounds and animations.
            </p>

            <!-- Highlights + Mobile dropdown -->
            <div class="mt-4 grid gap-4 md:grid-cols-2">
                <!-- Static list (desktop) -->
                <div class="hidden md:block">
                    <div class="grid gap-3">
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Huge variety of themes</div>
                            <div class="text-sm text-white/70">Adventure, mythology, fruits, fantasy, and more.</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Feature-rich gameplay</div>
                            <div class="text-sm text-white/70">Free spins, wilds, scatters, and multipliers.</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Easy to start, hard to master</div>
                            <div class="text-sm text-white/70">Beginner-friendly with depth for pros.</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Smooth on all devices</div>
                            <div class="text-sm text-white/70">Lag-free on mobile and desktop.</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Jackpot potential</div>
                            <div class="text-sm text-white/70">Opportunities to win Pussy888 jackpots worth thousands.</div>
                        </div>
                    </div>
                </div>

                <!-- Mobile accordion (Alpine) -->
                <div class="md:hidden">
                    <div class="rounded-lg border border-white/10">
                        <button @click="openFilter=!openFilter"
                                class="w-full flex items-center justify-between px-4 py-3">
                            <span class="font-semibold">Highlights</span>
                            <svg class="size-4 transition" :class="openFilter && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                        </button>
                        <div x-show="openFilter" x-transition class="px-4 pb-4 space-y-3">
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Huge variety of themes</div>
                                <div class="text-white/70">Adventure, mythology, fruits, fantasy, and more.</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Feature-rich gameplay</div>
                                <div class="text-white/70">Free spins, wilds, scatters, and multipliers.</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Easy to start, hard to master</div>
                                <div class="text-white/70">Beginner-friendly with depth for pros.</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Smooth on all devices</div>
                                <div class="text-white/70">Lag-free on mobile and desktop.</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Jackpot potential</div>
                                <div class="text-white/70">Opportunities to win Pussy888 jackpots worth thousands.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-4 text-sm text-white/70">
                All slots are fair and 100% certified with Random Number Generators (RNGs) to ensure every spin is truly random.
            </p>
        </div>
    </div>

    <!-- Category Filter + Top Titles -->
    <div class="mx-auto max-w-7xl px-4 mt-6">
        <div class="flex items-end justify-between gap-3">
            <div>
                <h2 class="text-xl font-semibold">Top Pussy888 Slot Titles</h2>
                <p class="text-sm text-white/70">Popular, high-paying, and loved by Malaysian players.</p>
            </div>

            <!-- Alpine dropdown filter -->
            <div class="relative">
                <button @click="openFilter=!openFilter"
                        class="inline-flex items-center gap-2 rounded-md border border-white/15 px-3 py-2 text-sm hover:bg-pink-400/10 hover:text-purple-300 cursor-pointer">
                    <span x-text="selectedFilter"></span>
                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                </button>
                <div x-show="openFilter" @click.outside="openFilter=false" x-transition
                    class="absolute right-0 mt-2 w-56 rounded-lg border border-white/10 bg-zinc-900/95 p-2 shadow-lg z-10">
                    <template x-for="f in filters" :key="f">
                        <button @click="selectedFilter=f; openFilter=false"
                                class="w-full text-left rounded-md px-3 py-2 text-sm hover:bg-pink-400/10 hover:text-purple-300 cursor-pointer"
                                x-text="f"></button>
                    </template>
                </div>
            </div>
        </div>

        <div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Great Blue -->
            <div x-show="matches('Video 5-Reel')" class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/10]">
                    <img src="{{ asset('assets/frontend/images/slots/great-blue.jpg') }}" alt="Great Blue" class="h-full w-full object-cover group-hover:scale-[1.02] transition">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Great Blue</div>
                        <div class="text-xs text-white/70">Ocean-themed with big multipliers & free spins</div>
                    </div>
                </div>
                <div class="p-3 flex items-center justify-between">
                    <div class="text-xs text-white/60">Category: Video 5-Reel</div>
                    <a href="#" class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300">Play</a>
                </div>
            </div>

            <!-- Highway Kings -->
            <div x-show="matches('Classic 3-Reel')" class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/10]">
                    <img src="{{ asset('assets/frontend/images/slots/highway-kings.jpg') }}" alt="Highway Kings" class="h-full w-full object-cover group-hover:scale-[1.02] transition">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Highway Kings</div>
                        <div class="text-xs text-white/70">Fast gameplay with nostalgic design</div>
                    </div>
                </div>
                <div class="p-3 flex items-center justify-between">
                    <div class="text-xs text-white/60">Category: Classic 3-Reel</div>
                    <a href="#" class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300">Play</a>
                </div>
            </div>

            <!-- Panther Moon -->
            <div x-show="matches('Video 5-Reel')" class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/10]">
                    <img src="{{ asset('assets/frontend/images/slots/panther-moon.jpg') }}" alt="Panther Moon" class="h-full w-full object-cover group-hover:scale-[1.02] transition">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Panther Moon</div>
                        <div class="text-xs text-white/70">Mystical forest slot with rewarding wilds</div>
                    </div>
                </div>
                <div class="p-3 flex items-center justify-between">
                    <div class="text-xs text-white/60">Category: Video 5-Reel</div>
                    <a href="#" class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300">Play</a>
                </div>
            </div>

            <!-- Safari Heat -->
            <div x-show="matches('Video 5-Reel')" class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/10]">
                    <img src="{{ asset('assets/frontend/images/slots/safari-heat.jpg') }}" alt="Safari Heat" class="h-full w-full object-cover group-hover:scale-[1.02] transition">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Safari Heat</div>
                        <div class="text-xs text-white/70">Wild animal adventure with free spins & jackpots</div>
                    </div>
                </div>
                <div class="p-3 flex items-center justify-between">
                    <div class="text-xs text-white/60">Category: Video 5-Reel</div>
                    <a href="#" class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300">Play</a>
                </div>
            </div>

            <!-- Bonus Bear -->
            <div x-show="matches('Video 5-Reel')" class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/10]">
                    <img src="{{ asset('assets/frontend/images/slots/bonus-bear.jpg') }}" alt="Bonus Bear" class="h-full w-full object-cover group-hover:scale-[1.02] transition">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Bonus Bear</div>
                        <div class="text-xs text-white/70">Cartoon fun with honey-pot bonuses</div>
                    </div>
                </div>
                <div class="p-3 flex items-center justify-between">
                    <div class="text-xs text-white/60">Category: Video 5-Reel</div>
                    <a href="#" class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300">Play</a>
                </div>
            </div>

            <!-- Progressive sample card -->
            <div x-show="matches('Progressive Jackpots')" class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/10]">
                    <img src="{{ asset('assets/frontend/images/slots/progressive.jpg') }}" alt="Progressive Jackpot" class="h-full w-full object-cover group-hover:scale-[1.02] transition">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Jackpot Rush</div>
                        <div class="text-xs text-white/70">Progressive pool grows with every spin</div>
                    </div>
                </div>
                <div class="p-3 flex items-center justify-between">
                    <div class="text-xs text-white/60">Category: Progressive Jackpots</div>
                    <a href="#" class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300">Play</a>
                </div>
            </div>
        </div>

        <p class="mt-3 text-sm text-white/70">
            These games are beloved for their graphics, sound effects, and frequent win potential.
        </p>
    </div>

    <!-- Progressive Jackpots Info -->
    <div class="mx-auto max-w-7xl px-4 mt-6">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Progressive Jackpots – Bigger Spins, Bigger Wins</h2>
            <p class="mt-2 text-white/80">
                Some Pussy888 slots feature progressive jackpots, where the prize pool grows with every spin until
                someone lands the big one. Keep an eye on jackpot meters or special symbols that trigger massive rewards—
                one lucky round could change everything.
            </p>
        </div>
    </div>

    <!-- Mobile Play -->
    <div class="mx-auto max-w-7xl px-4 mt-6">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Play on Mobile – Anytime, Anywhere</h2>
            <p class="mt-2 text-white/80">
                All slots are fully compatible with both the Pussy888 mobile app and browser play. Enjoy seamless spins
                on Android or iOS.
            </p>
            <div class="mt-4 grid md:grid-cols-3 gap-3">
                <a href="#" class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]">
                    <div class="font-semibold">Download the Pussy888 APK (Android)</div>
                    <div class="text-sm text-white/70">Quick install & instant access.</div>
                </a>
                <a href="#" class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]">
                    <div class="font-semibold">Install on iPhone/iPad (iOS)</div>
                    <div class="text-sm text-white/70">Optimized for iOS performance.</div>
                </a>
                <a href="#" class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]">
                    <div class="font-semibold">Play in Mobile Browser</div>
                    <div class="text-sm text-white/70">No download needed—tap & spin.</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Demo Mode -->
    <div class="mx-auto max-w-7xl px-4 mt-6">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Try Before You Spin – Demo Mode Available</h2>
            <p class="mt-2 text-white/80">
                Test features, understand paylines, and find your favorites risk-free. Demo mode is perfect for new players
                learning how Pussy888 slots work.
            </p>
        </div>
    </div>

    <!-- Safety / Trust -->
    <div class="mx-auto max-w-7xl px-4 mt-6">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Safe, Secure & Trusted by Thousands</h2>
            <div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-4 gap-3">
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Licensed & Regulated</div>
                    <div class="text-sm text-white/70">Operates under strict guidelines.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">SSL Encryption</div>
                    <div class="text-sm text-white/70">Your data stays protected.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">RNG Tested</div>
                    <div class="text-sm text-white/70">Independent fairness checks.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Responsive Support</div>
                    <div class="text-sm text-white/70">Help when you need it.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bonuses -->
    <div class="mx-auto max-w-7xl px-4 mt-6">
        <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Don’t Forget Your Slot Bonuses!</h2>
            <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-4 gap-3">
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Welcome Bonus</div>
                    <div class="text-sm text-white/70">Boost your first deposit.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Free Spins</div>
                    <div class="text-sm text-white/70">Selected slot titles.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Reload & Cashback</div>
                    <div class="text-sm text-white/70">Extra value every week.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">VIP Rewards</div>
                    <div class="text-sm text-white/70">Perks for loyal players.</div>
                </div>
            </div>
            <a href="#" class="mt-4 inline-flex rounded-md border border-white/15 px-4 py-2 text-sm hover:bg-white/5">View Promotions</a>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="Spin Now & Win Big!"
        primaryCtaText="Download Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="Play in Browser"
        secondaryCtaLink="#"
    >
        Thousands of Malaysian players already enjoy the thrill of Pussy888 slots—top-tier graphics, fast
                    payouts, and games for every style. Download now and start spinning your way to real rewards!
    </x-partials.download>
</div>
