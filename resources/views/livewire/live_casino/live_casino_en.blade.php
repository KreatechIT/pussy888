<div class="bg-black text-white" x-data="{
    openFilter: false,
    selectedFilter: 'All',
    filters: ['All', 'Baccarat', 'Blackjack', 'Roulette', 'Dragon Tiger', 'Sic Bo'],
    matches(category) { return this.selectedFilter === 'All' || this.selectedFilter === category }
}">
    <!-- Page Header -->
    <x-partials.heading title="Live Casino" subtitle="Pussy888 • Real Dealers • Malaysia" />

    <!-- Page Title -->
    <div class="mx-auto max-w-7xl px-4 pt-8">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h1 class="text-2xl font-bold sm:text-3xl">Pussy888 Live Casino – Real-Time Action with Real Dealers</h1>
            <p class="mt-3 text-white/80">
                Step into the world of Pussy888 Live Casino, where you don’t just play a game — you experience the
                thrill of a real casino floor. From the comfort of your home or mobile device, you can enjoy
                interactive, high-stakes gaming streamed in real time with professional dealers guiding the action.
            </p>
            <p class="mt-3 text-white/80">
                Whether you're a seasoned player or a curious beginner, Pussy888 offers a complete live dealer
                experience tailored for Malaysian players who want excitement, authenticity, and trust in every hand.
            </p>
        </div>
    </div>

    <!-- What is a Live Casino -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">What Is a Live Casino?</h2>
            <p class="mt-2 text-white/80">
                A live casino is an immersive online gaming environment where real dealers host games via live video
                streams. You can watch every card shuffle, roulette spin, or dice roll unfold in real-time — just like
                you would at a physical casino.
            </p>
            <p class="mt-2 text-white/80">
                Unlike traditional RNG-based table games, live casino games add a human touch and bring players closer
                to the real gambling experience.
            </p>
        </div>
    </div>

    <!-- Live Dealer Games + Filter -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="flex items-end justify-between gap-3">
            <div>
                <h2 class="text-xl font-semibold">Live Dealer Games Available on Pussy888</h2>
                <p class="text-sm text-white/70">Our Pussy888 live casino library includes some of the most popular and
                    exciting casino games:</p>
            </div>

            <!-- Alpine dropdown filter -->
            <div class="relative">
                <button
                    class="inline-flex cursor-pointer items-center gap-2 rounded-md border border-white/15 px-3 py-2 text-sm hover:bg-pink-400/10 hover:text-purple-300"
                    @click="openFilter=!openFilter"
                >
                    <span x-text="selectedFilter"></span>
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
                    class="absolute right-0 z-10 mt-2 w-56 rounded-lg border border-white/10 bg-zinc-900/95 p-2 shadow-lg"
                    x-show="openFilter"
                    @click.outside="openFilter=false"
                    x-transition
                >
                    <template x-for="f in filters" :key="f">
                        <button
                            class="w-full cursor-pointer rounded-md px-3 py-2 text-left text-sm hover:bg-pink-400/10 hover:text-purple-300"
                            @click="selectedFilter=f; openFilter=false"
                            x-text="f"
                        ></button>
                    </template>
                </div>
            </div>
        </div>

        <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Live Baccarat -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Baccarat')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/baccarat.jpg') }}"
                        alt="Live Baccarat"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Live Baccarat</div>
                        <div class="text-xs text-white/70">A timeless classic, Baccarat is one of the most played live
                            games on Pussy888. Place your bets on the player, banker, or a tie — and watch the suspense
                            build as the cards are dealt.</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Category: Baccarat</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Enter Table</a>
                </div>
            </div>

            <!-- Live Blackjack -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Blackjack')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/blackjack.jpg') }}"
                        alt="Live Blackjack"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Live Blackjack</div>
                        <div class="text-xs text-white/70">Use strategy and skill to beat the dealer in this thrilling
                            21-point card game. Interact with the dealer and other players at the table for a social,
                            fast-paced experience.</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Category: Blackjack</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Enter Table</a>
                </div>
            </div>

            <!-- Live Roulette -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Roulette')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/roulette.jpg') }}"
                        alt="Live Roulette"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Live Roulette</div>
                        <div class="text-xs text-white/70">Place your chips, watch the wheel spin, and feel the
                            excitement as the ball lands. Pussy888 offers multiple versions of roulette with
                            professional hosts and real-time results.</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Category: Roulette</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Enter Table</a>
                </div>
            </div>

            <!-- Dragon Tiger -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Dragon Tiger')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/dragon-tiger.jpg') }}"
                        alt="Dragon Tiger"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Dragon Tiger</div>
                        <div class="text-xs text-white/70">A simple and fast-paced game where players bet on which card
                            — Dragon or Tiger — will be higher. It’s perfect for beginners and adrenaline-seekers alike.
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Category: Dragon Tiger</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Enter Table</a>
                </div>
            </div>

            <!-- Sic Bo -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Sic Bo')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/sic-bo.jpg') }}"
                        alt="Sic Bo"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Sic Bo</div>
                        <div class="text-xs text-white/70">Roll the dice and test your luck in this popular Asian game
                            of chance. With multiple betting options, Sic Bo offers endless possibilities and high
                            returns.</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Category: Sic Bo</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Enter Table</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Play on Mobile and Desktop -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <div class="grid items-center gap-6 p-6 md:grid-cols-2 md:p-8">
                <!-- Copy -->
                <div>
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">
                        <svg
                            class="size-3.5"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <path
                                d="M7 4h10a2 2 0 0 1 2 2v10h-2V6H7V4Zm-2 4h10a2 2 0 0 1 2 2v10H5a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2Zm8 6H8v2h5v-2Z"
                            />
                        </svg>
                        Mobile-first • HD streaming
                    </div>
                    <h2 class="mt-3 text-xl font-semibold">Play on Mobile and Desktop</h2>
                    <p class="mt-2 text-white/80">
                        All Pussy888 live casino games are built for mobile-first gaming. Whether you’re using Android,
                        iOS, or
                        a desktop computer, you’ll enjoy smooth, high-definition streaming and intuitive betting
                        interfaces.
                    </p>

                    <!-- Actions as feature list -->
                    <div class="mt-5 grid gap-3">
                        <a class="group rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#"
                        >
                            <div class="flex items-center gap-3">
                                <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                                    <svg
                                        class="size-5"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <path
                                            d="M7 4h10a2 2 0 0 1 2 2v12H5V6a2 2 0 0 1 2-2Zm5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"
                                        />
                                    </svg>
                                </div>
                                <div class="font-semibold">
                                    Download the Pussy888 mobile app for the best performance
                                </div>
                            </div>
                        </a>
                        <a class="group rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#"
                        >
                            <div class="flex items-center gap-3">
                                <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                                    <svg
                                        class="size-5"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <path d="M4 5h16v10H4V5Zm0 12h16v2H4v-2Z" />
                                    </svg>
                                </div>
                                <div class="font-semibold">
                                    Or play instantly through your mobile browser — no installation needed
                                </div>
                            </div>
                        </a>
                        <a class="group rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#"
                        >
                            <div class="flex items-center gap-3">
                                <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                                    <svg
                                        class="size-5"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <path d="M6 7h7v2H6V7Zm11 10h-4v-2h4v2ZM6 11h12v2H6v-2Z" />
                                    </svg>
                                </div>
                                <div class="font-semibold">
                                    Switch seamlessly between devices with the same account
                                </div>
                            </div>
                        </a>
                    </div>

                    <p class="mt-3 text-white/80">
                        No matter where you are, your favorite live casino games are just a tap away.
                    </p>
                </div>

                <!-- Visual (placeholder) -->
                <div
                    class="relative order-first h-56 w-full overflow-hidden rounded-xl bg-gradient-to-br from-purple-500/20 via-pink-500/10 to-amber-400/10 md:order-last md:h-[300px]">
                    <div class="absolute inset-0 m-6 rounded-xl border border-white/10 bg-black/40 backdrop-blur">
                    </div>
                    <div
                        class="absolute right-6 top-6 m-6 hidden h-40 w-28 rotate-6 rounded-xl border border-white/10 bg-black/60 shadow-xl md:block">
                    </div>
                    <div
                        class="absolute bottom-6 left-10 hidden h-48 w-32 -rotate-6 rounded-xl border border-white/10 bg-black/60 shadow-xl md:block">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fair, Safe, and Transparent -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03] p-6 md:p-8">
            <div class="flex items-center justify-between gap-6">
                <div>
                    <h2 class="text-xl font-semibold">Fair, Safe, and Transparent</h2>
                    <p class="mt-2 text-white/80">
                        Pussy888 partners with licensed and reputable live dealer providers to ensure fair play, data
                        security,
                        and responsible gambling:
                    </p>
                </div>
                <div
                    class="hidden rounded-full bg-emerald-400/15 px-3 py-1 text-xs font-medium text-emerald-300 ring-1 ring-inset ring-emerald-400/30 md:block">
                    Certified Studios
                </div>
            </div>

            <!-- 2-column features with icons -->
            <div class="mt-5 grid gap-3 sm:grid-cols-2">
                <div
                    class="group cursor-pointer rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex items-center justify-center rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M4 7l8-4 8 4v6a8 8 0 1 1-16 0V7Zm8 12a6 6 0 0 0 6-6V8.3L12 5 6 8.3V13a6 6 0 0 0 6 6Z"
                                />
                            </svg>
                        </div>
                        <div class="font-semibold">
                            All games are hosted by real dealers in certified studios
                        </div>
                    </div>
                </div>
                <div
                    class="group cursor-pointer rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M12 2 3 7v10l9 5 9-5V7l-9-5Zm0 2.2L19 8l-7 3.8L5 8l7-3.8ZM5 10.5l7 3.8 7-3.8V16l-7 3.8L5 16v-5.5Z"
                                />
                            </svg>
                        </div>
                        <div class="font-semibold">Live streams are encrypted with SSL security</div>
                    </div>
                </div>
                <div
                    class="group cursor-pointer rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M9 3h6v2H9V3ZM4 7h16v2H4V7Zm0 4h16v2H4v-2Zm0 4h10v2H4v-2Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Bet results are recorded and verifiable</div>
                    </div>
                </div>
                <div
                    class="group cursor-pointer rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M8 10a4 4 0 1 1 8 0v1h1a3 3 0 1 1 0 6H7a3 3 0 1 1 0-6h1v-1Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Chat and tipping features are available for enhanced interaction
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-4 text-white/80">
                You can trust every spin and every shuffle on Pussy888.
            </p>
        </div>
    </div>

    <!-- Bonuses & Promotions -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <!-- Header -->
            <div class="flex flex-wrap items-center justify-between gap-3 p-6 md:p-8">
                <div>
                    <h2 class="text-xl font-semibold">Live Casino Bonuses & Promotions</h2>
                    <p class="mt-2 text-white/80">
                        Playing live doesn’t mean you miss out on rewards. Pussy888 offers special bonuses and
                        promotions
                        tailored to live casino players, including:
                    </p>
                </div>
                <div
                    class="rounded-full bg-purple-400/20 px-3 py-1 text-xs font-medium text-purple-300 ring-1 ring-inset ring-purple-400/30">
                    Updated Daily
                </div>
            </div>

            <!-- Bonus grid -> 2 columns -->
            <div class="grid gap-3 p-6 pt-0 md:grid-cols-2">
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-amber-500/10 via-white/0 to-white/0 p-4 hover:from-amber-500/20">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M12 3l2.4 4.9L20 9l-4 3.9.9 5.6L12 16l-4.9 2.5L8 12.9 4 9l5.6-1.1L12 3Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Welcome bonuses for new users</div>
                    </div>
                </div>
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-pink-500/10 via-white/0 to-white/0 p-4 hover:from-pink-500/20">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M12 4a8 8 0 1 1 0 16v-2a6 6 0 1 0 0-12V4Zm-1 6h2v6h-2v-6Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Cashback offers on live table losses</div>
                    </div>
                </div>
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-purple-500/10 via-white/0 to-white/0 p-4 hover:from-purple-500/20">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M7 4h10v2H7V4Zm2 4h6v2H9V8Zm-2 4h10v2H7v-2Zm2 4h6v2H9v-2Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">VIP rewards for high rollers</div>
                    </div>
                </div>
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-emerald-500/10 via-white/0 to-white/0 p-4 hover:from-emerald-500/20">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M5 4h14v2H5V4Zm2 4h10v2H7V8Zm-2 4h14v2H5v-2Zm2 4h10v2H7v-2Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Reload bonuses and daily promotions</div>
                    </div>
                </div>
            </div>

            <!-- Note -->
            <div class="px-6 pb-6 text-white/80">
                Check our Promotions page regularly to take advantage of the latest offers that give you more to play
                with — and win more, too.
            </div>
        </div>
    </div>

    <!-- 24/7 Live Support -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">24/7 Live Support</h2>
            <p class="mt-2 text-white/80">
                Our Pussy888 customer support team is always available to assist with any issues related to your live
                casino experience. Whether it's technical difficulties or account questions, support is just a click
                away.
            </p>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="Start Playing Live Now!"
        primaryCtaText="Download Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="Log In & Join a Table"
        secondaryCtaLink="#"
    >
        The Pussy888 live casino is the ultimate destination for real-time, real-dealer entertainment in Malaysia. With
        professional dealers, exciting games, and a trusted platform, it’s time to take your casino experience to the
        next level. Download Pussy888 or log in now to join a live table and play like never before.
    </x-partials.download>
</div>
