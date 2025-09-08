<div class="min-h-screen bg-black text-white">
    <!-- Page Header -->
    <x-partials.heading title="About Us" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />

    <!-- Content -->
    <div class="mx-auto max-w-7xl space-y-6 px-4 py-10">
        <!-- Welcome -->
        <div class="space-y-3 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-semibold">Welcome to Pussy888 – Malaysia’s Trusted Online Casino Experience</div>
            <div class="text-white/80">
                At Pussy888, we pride ourselves on being one of the most reputable and reliable online casino platforms
                in Malaysia.
                With a strong focus on player satisfaction, security, and game variety, we have built a loyal community
                of users
                who enjoy safe, fun, and rewarding gameplay 24/7.
            </div>
            <div class="text-white/80">
                Whether you're spinning the reels on exciting pussy888 slot games or immersing yourself in real-time
                action
                at our pussy888 live casino, we ensure that every gaming moment is packed with excitement and fairness.
            </div>
        </div>

        <!-- Our Story (Mosaic + Timeline) -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 lg:p-8">
            <div class="grid gap-8 lg:grid-cols-2">
                <!-- Image mosaic -->
                <div class="grid grid-cols-2 gap-3">
                    <div class="col-span-2 overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img
                            class="h-48 w-full object-cover sm:h-64"
                            src="{{ asset('assets/frontend/images/about/story-main.jpg') }}"
                            alt=""
                        >
                    </div>
                    <div class="overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img
                            class="h-40 w-full object-cover"
                            src="{{ asset('assets/frontend/images/about/story-1.jpg') }}"
                            alt=""
                        >
                    </div>
                    <div class="overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img
                            class="h-40 w-full object-cover"
                            src="{{ asset('assets/frontend/images/about/story-2.jpg') }}"
                            alt=""
                        >
                    </div>
                </div>

                <!-- Timeline content -->
                <div class="space-y-5">
                    <div class="text-xl font-semibold">Our Story</div>
                    <div class="text-white/80">
                        Pussy888 launched with a simple mission: to bring the world-class casino experience to every
                        Malaysian player, right at their fingertips.
                        Over the years, we've grown to become a household name in the region’s online casino industry,
                        known for our high-quality games,
                        fast payouts, and dedicated customer service.
                    </div>
                    <div class="text-white/80">
                        From casual gamers to seasoned bettors, Pussy888 offers something for everyone—ensuring an
                        unforgettable digital casino adventure.
                    </div>

                    <!-- Vertical timeline -->
                    <div class="relative pl-5">
                        <div class="absolute bottom-0 left-1 top-0 w-px bg-white/10"></div>

                        <div class="relative mb-4">
                            <div
                                class="absolute -left-1.5 top-1 size-3 rounded-full bg-amber-400 ring-4 ring-amber-400/20">
                            </div>
                            <div class="rounded-lg bg-white/[0.04] p-4 ring-1 ring-white/10">
                                <div class="text-sm text-white/60">Launch</div>
                                <div class="font-semibold">A Clear Mission</div>
                                <div class="mt-1 text-sm text-white/80">
                                    World-class casino entertainment for Malaysian players—anytime, anywhere.
                                </div>
                            </div>
                        </div>

                        <div class="relative mb-4">
                            <div
                                class="absolute -left-1.5 top-1 size-3 rounded-full bg-pink-500 ring-4 ring-pink-500/20">
                            </div>
                            <div class="rounded-lg bg-white/[0.04] p-4 ring-1 ring-white/10">
                                <div class="text-sm text-white/60">Growth</div>
                                <div class="font-semibold">Trusted & Recognized</div>
                                <div class="mt-1 text-sm text-white/80">
                                    Built a loyal community with premium games, transparent payouts, and responsive
                                    support.
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div
                                class="absolute -left-1.5 top-1 size-3 rounded-full bg-emerald-400 ring-4 ring-emerald-400/20">
                            </div>
                            <div class="rounded-lg bg-white/[0.04] p-4 ring-1 ring-white/10">
                                <div class="text-sm text-white/60">Today</div>
                                <div class="font-semibold">For Every Player</div>
                                <div class="mt-1 text-sm text-white/80">
                                    From casual spins to live tables—Pussy888 delivers a seamless, fair, and exciting
                                    experience.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mini stats row -->
                    <div class="grid grid-cols-3 gap-3">
                        <div class="rounded-lg bg-white/[0.04] p-4 text-center ring-1 ring-white/10">
                            <div class="text-2xl font-bold">1000+</div>
                            <div class="text-xs text-white/70">Games</div>
                        </div>
                        <div class="rounded-lg bg-white/[0.04] p-4 text-center ring-1 ring-white/10">
                            <div class="text-2xl font-bold">24/7</div>
                            <div class="text-xs text-white/70">Support</div>
                        </div>
                        <div class="rounded-lg bg-white/[0.04] p-4 text-center ring-1 ring-white/10">
                            <div class="text-2xl font-bold">100%</div>
                            <div class="text-xs text-white/70">RNG Fairness</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- What Makes Us Different -->
        <div class="rounded-xl border border-white/10 bg-white/[0.02] p-6">
            <div class="mb-6 text-2xl font-bold">What Makes Us Different</div>

            <div class="grid gap-6 md:grid-cols-2">
                <!-- Game Library -->
                <div
                    class="group relative rounded-lg border border-white/10 bg-white/[0.04] p-6 transition hover:bg-white/[0.07]">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-amber-400/20 text-amber-400 transition group-hover:bg-amber-400 group-hover:text-black">
                            🎰
                        </div>
                        <div>
                            <div class="text-lg font-semibold">A Game Library That Excites</div>
                            <p class="mt-1 text-sm text-white/80">
                                Classic slots, jackpots, table games, and live dealers. The pussy888 game list is always
                                fresh and exciting.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mobile First -->
                <div
                    class="group relative rounded-lg border border-white/10 bg-white/[0.04] p-6 transition hover:bg-white/[0.07]">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-pink-400/20 text-pink-400 transition group-hover:bg-pink-400 group-hover:text-black">
                            📱
                        </div>
                        <div>
                            <div class="text-lg font-semibold">Mobile-First Gaming</div>
                            <p class="mt-1 text-sm text-white/80">
                                Play seamlessly on Android and iOS. Pussy888 mobile app brings the casino to your
                                fingertips—anytime, anywhere.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Security -->
                <div
                    class="group relative rounded-lg border border-white/10 bg-white/[0.04] p-6 transition hover:bg-white/[0.07]">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-emerald-400/20 text-emerald-400 transition group-hover:bg-emerald-400 group-hover:text-black">
                            🔒
                        </div>
                        <div>
                            <div class="text-lg font-semibold">Safe, Secure & Fair</div>
                            <p class="mt-1 text-sm text-white/80">
                                SSL encryption + certified RNG ensures fairness and protection. Play in confidence
                                knowing your data is safe.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Rewards -->
                <div
                    class="group relative rounded-lg border border-white/10 bg-white/[0.04] p-6 transition hover:bg-white/[0.07]">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-400/20 text-blue-400 transition group-hover:bg-blue-400 group-hover:text-black">
                            💰
                        </div>
                        <div>
                            <div class="text-lg font-semibold">Real Rewards & Fast Withdrawals</div>
                            <p class="mt-1 text-sm text-white/80">
                                Enjoy bonuses, promotions, and reliable withdrawals designed for Malaysian players.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Support -->
                <div
                    class="group relative rounded-lg border border-white/10 bg-white/[0.04] p-6 transition hover:bg-white/[0.07]">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-purple-400/20 text-purple-400 transition group-hover:bg-purple-400 group-hover:text-black">
                            🎧
                        </div>
                        <div>
                            <div class="text-lg font-semibold">24/7 Customer Support</div>
                            <p class="mt-1 text-sm text-white/80">
                                Live chat, email, and phone support—always ready to assist with account, payments, or
                                gameplay.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Responsible Gaming -->
                <div
                    class="group relative rounded-lg border border-white/10 bg-white/[0.04] p-6 transition hover:bg-white/[0.07]">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-red-400/20 text-red-400 transition group-hover:bg-red-400 group-hover:text-black">
                            🧘
                        </div>
                        <div>
                            <div class="text-lg font-semibold">Responsible Gaming</div>
                            <p class="mt-1 text-sm text-white/80">
                                Tools, advice, and support to help players keep control and enjoy gaming responsibly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Join the Community -->
    <x-partials.download
        title="Join the Pussy888 Community"
        primaryCtaText="Download App"
        primaryCtaLink="#"
        secondaryCtaText="Play Now"
        secondaryCtaLink="#"
    >
        Thousands of Malaysian players trust Pussy888 every day for their online gaming entertainment.
        Whether you're new to casino games or a seasoned player, Pussy888 is your gateway to premium
        slots,
        live casino tables, and real rewards—all from the safety of your device.
        <div class="mt-3">
            Download Pussy888 today and experience why we’re Malaysia’s top online casino platform.
        </div>
    </x-partials.download>
</div>
