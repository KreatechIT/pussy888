<div
    class="min-h-screen bg-black text-white"
    x-data="{
        progress: 0,
        tocOpen: true,
        updateProgress() {
            const article = $refs.article;
            if (!article) return;
            const rect = article.getBoundingClientRect();
            const total = article.scrollHeight - window.innerHeight;
            const scrolled = window.scrollY - (article.offsetTop - 80);
            this.progress = Math.max(0, Math.min(100, (scrolled / total) * 100));
        }
    }"
    x-init="updateProgress();
    window.addEventListener('scroll', () => updateProgress());"
>

    <!-- Reading progress -->
    <div class="sticky top-0 z-50">
        <div class="h-1 w-full bg-white/10">
            <div class="h-1 bg-gradient-to-r from-fuchsia-500 to-pink-500 transition-all" :style="`width:${progress}%;`">
            </div>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <div class="mx-auto max-w-7xl px-4 pt-6">
        <div class="text-xs text-white/60">
            <a class="hover:text-white/90" href="/">Home</a>
            <span class="mx-2 opacity-50">/</span>
            <a class="hover:text-white/90" href="/blog">Blog</a>
            <span class="mx-2 opacity-50">/</span>
            <span class="text-white/80">How to Start Playing Safely on Pussy888</span>
        </div>
    </div>

    <!-- Title + Meta -->
    <div class="mx-auto max-w-7xl px-4 pt-4">
        <div class="max-w-3xl">
            <!-- Category tags -->
            <div class="mb-3 flex flex-wrap gap-2 text-xs">
                @foreach (['Guide', 'Getting Started', 'Security'] as $tag)
                    <a class="rounded-full bg-white/10 px-2 py-1 text-white/70 ring-1 ring-white/10 hover:bg-white/15"
                        href="#"
                    >
                        {{ $tag }}
                    </a>
                @endforeach
            </div>

            <!-- Title -->
            <div class="text-3xl/tight font-bold sm:text-4xl/tight">
                How to Start Playing Safely on Pussy888: Registration, Deposit & First Game
            </div>

            <!-- Meta row -->
            <div class="mt-3 flex flex-wrap items-center gap-3 text-xs text-white/70">
                <div class="inline-flex items-center gap-2">
                    <img
                        class="h-6 w-6 rounded-full object-cover"
                        src="{{ asset('assets/frontend/images/avatars/author1.jpg') }}"
                        alt="Author"
                    >
                    <span>By <a class="text-white/90 hover:underline" href="#">Kreatech Team</a></span>
                </div>
                <span class="opacity-50">•</span>
                <span>{{ now()->format('M d, Y') }}</span>
                <span class="opacity-50">•</span>
                <span>7 min read</span>
                <span class="opacity-50">•</span>
                <span class="inline-flex items-center gap-1">
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
                            d="m5 12 5 5L20 7"
                        />
                    </svg>
                    Updated weekly
                </span>
            </div>
        </div>
    </div>

    <!-- Featured image -->
    <div class="mx-auto max-w-7xl px-4 pt-6">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <div class="relative">
                <img
                    class="h-[300px] w-full object-cover sm:h-[420px]"
                    src="{{ asset('assets/frontend/images/blog/featured.jpg') }}"
                    alt="Pussy888 Getting Started"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent"></div>
                <div
                    class="absolute bottom-3 right-3 rounded-full bg-black/60 px-3 py-1 text-xs text-white/80 ring-1 ring-white/10">
                    Beginner Guide
                </div>
            </div>
        </div>
    </div>

    <!-- Content + TOC + Share -->
    <div class="mx-auto max-w-7xl px-4 py-8">
        <div class="grid gap-8 lg:grid-cols-[1fr_280px]">
            <!-- Article -->
            <div class="max-w-3xl" x-ref="article">
                <!-- Intro callout -->
                <div class="mb-6 rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-sm text-white/80">
                        This guide walks you through account registration, secure deposits, and your first game on
                        Pussy888—designed for new players who want a smooth and safe start.
                    </div>
                </div>

                <!-- The content (replace with your real HTML or slot) -->
                <div class="space-y-6 leading-relaxed text-white/90">
                    <div>
                        <div class="text-xl font-semibold text-white">1) Create & Verify Your Account</div>
                        <p class="mt-2">
                            Visit the official site and tap <span class="text-white">Register</span>. Use a valid mobile
                            number for OTP verification.
                            Choose a strong password and enable additional security where available.
                        </p>
                        <div class="mt-3 rounded-lg border border-white/10 bg-white/[0.02] p-3 text-sm text-white/80">
                            Tip: Avoid reusing passwords; consider a password manager for safety.
                        </div>
                    </div>

                    <div>
                        <div class="text-xl font-semibold text-white">2) Deposit Methods You Can Trust</div>
                        <p class="mt-2">
                            Popular options include FPX banking and e-wallets (Touch ’n Go, GrabPay, Boost, DuitNow).
                            Always confirm the payee details and minimum/maximum limits before proceeding.
                        </p>
                        <ul class="mt-2 list-inside space-y-2 text-white/80">
                            <li>• Instant e-wallet QR Pay for quick top-ups</li>
                            <li>• FPX for direct bank transfers</li>
                            <li>• Check fees and processing times</li>
                        </ul>
                    </div>

                    <div>
                        <div class="text-xl font-semibold text-white">3) Pick Your First Game</div>
                        <p class="mt-2">
                            Beginners often start with popular slots or low-stakes live tables. Review RTP (where
                            available) and set a session budget.
                        </p>
                        <div class="mt-3 grid gap-3 sm:grid-cols-2">
                            @foreach ([['t' => 'Pragmatic Play – Gates of Olympus', 'img' => 'slot1.jpg'], ['t' => 'PG Soft – Mahjong Ways', 'img' => 'slot2.jpg']] as $g)
                                <div class="overflow-hidden rounded-lg border border-white/10 bg-white/[0.03]">
                                    <div class="aspect-[16/10]">
                                        <img
                                            class="h-full w-full object-cover"
                                            src="{{ asset('assets/frontend/images/blog/' . $g['img']) }}"
                                            alt="{{ $g['t'] }}"
                                        >
                                    </div>
                                    <div class="p-3">
                                        <div class="text-sm font-semibold">{{ $g['t'] }}</div>
                                        <div class="text-xs text-white/70">Beginner friendly</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <div class="text-xl font-semibold text-white">4) Withdrawals & Fair Play</div>
                        <p class="mt-2">
                            Use verified bank accounts for withdrawals and follow KYC if prompted. Stick to platforms
                            that enforce SSL and certified RNG.
                        </p>
                        <blockquote
                            class="mt-3 rounded-lg border-l-4 border-pink-500 bg-white/[0.03] p-4 text-white/80">
                            “Play for fun, set limits, and take breaks. Responsible gaming keeps it enjoyable.”
                        </blockquote>
                    </div>

                    <div>
                        <div class="text-xl font-semibold text-white">FAQ</div>
                        <div class="mt-2 space-y-3 text-white/80">
                            <div>
                                <div class="font-medium text-white">Is OTP mandatory?</div>
                                <p>Yes—this helps secure your account and reduce unauthorized access.</p>
                            </div>
                            <div>
                                <div class="font-medium text-white">How fast are withdrawals?</div>
                                <p>Usually same-day after verification, depending on method and cut-off times.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Share + Tags -->
                <div class="mt-8 flex flex-wrap items-center justify-between gap-3">
                    <div class="flex flex-wrap items-center gap-2 text-xs">
                        @foreach (['Guide', 'Getting Started', 'Security'] as $tag)
                            <a class="rounded-full bg-white/10 px-2 py-1 text-white/70 ring-1 ring-white/10 hover:bg-white/15"
                                href="#"
                            >
                                #{{ $tag }}
                            </a>
                        @endforeach
                    </div>
                    <div class="flex items-center gap-2 text-xs">
                        <span class="text-white/60">Share:</span>
                        <a class="rounded-md border border-white/10 px-2 py-1 hover:bg-white/5"
                            href="#">Facebook</a>
                        <a class="rounded-md border border-white/10 px-2 py-1 hover:bg-white/5" href="#">X</a>
                        <a class="rounded-md border border-white/10 px-2 py-1 hover:bg-white/5"
                            href="#">Telegram</a>
                        <a class="rounded-md border border-white/10 px-2 py-1 hover:bg-white/5" href="#">Copy
                            Link</a>
                    </div>
                </div>

                <!-- Prev/Next -->
                <div class="mt-10 grid gap-3 sm:grid-cols-2">
                    <a class="group rounded-xl border border-white/10 bg-white/[0.03] p-4 hover:bg-white/[0.05]"
                        href="#"
                    >
                        <div class="text-xs text-white/60">Previous</div>
                        <div class="mt-1 font-semibold group-hover:text-white">
                            Deposit & Withdrawal Methods: FPX, e-Wallets & More
                        </div>
                    </a>
                    <a class="group rounded-xl border border-white/10 bg-white/[0.03] p-4 hover:bg-white/[0.05]"
                        href="#"
                    >
                        <div class="text-xs text-white/60">Next</div>
                        <div class="mt-1 font-semibold group-hover:text-white">
                            Beginner’s Live Casino Picks: Baccarat, Roulette, Game Shows
                        </div>
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:pt-2">
                <!-- TOC -->
                <div class="rounded-xl border border-white/10 bg-white/[0.03]" x-data="{ open: true }">
                    <div class="flex items-center justify-between px-4 py-3">
                        <div class="text-sm font-semibold">On this page</div>
                        <button class="rounded-md border border-white/10 p-1 hover:bg-white/5" @click="open=!open">
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
                    </div>
                    <div
                        class="px-4 pb-4 text-sm text-white/75"
                        x-show="open"
                        x-transition
                    >
                        <ul class="space-y-2">
                            <li><a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">1) Create &
                                    Verify</a></li>
                            <li><a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">2) Deposit
                                    Methods</a></li>
                            <li><a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">3) First
                                    Game</a></li>
                            <li><a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">4) Withdrawals &
                                    Fair Play</a></li>
                            <li><a class="block rounded-md px-3 py-2 hover:bg-white/5" href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Sticky promo/info -->
                <div
                    class="mt-4 rounded-xl border border-white/10 bg-gradient-to-br from-fuchsia-500/20 to-pink-500/20 p-4">
                    <div class="text-sm font-semibold">New to Pussy888?</div>
                    <div class="mt-1 text-sm text-white/80">Grab the welcome bonus and learn safer play basics.</div>
                    <a class="mt-3 inline-flex rounded-md bg-amber-400 px-4 py-2 text-sm font-semibold text-black hover:bg-amber-300"
                        href="#"
                    >
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Related posts -->
    <div class="mx-auto max-w-7xl px-4 pb-12">
        <div class="mb-4 text-2xl font-bold">Related Articles</div>
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ([['t' => 'Fair Play & Security Essentials', 'd' => 'RNG, SSL, and account safety tips.', 'img' => 'post3.jpg', 'cat' => ['Security'], 'meta' => '4 min read'], ['t' => 'Top Slot Providers to Try', 'd' => 'Pragmatic, JILI, PG Soft & more.', 'img' => 'post4.jpg', 'cat' => ['Slots'], 'meta' => '3 min read'], ['t' => 'Claiming Daily Rebates', 'd' => 'How to maximize your cashback.', 'img' => 'post5.jpg', 'cat' => ['Promotions'], 'meta' => '4 min read']] as $rp)
                <div class="overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                    <div class="relative aspect-[16/9]">
                        <img
                            class="h-full w-full object-cover"
                            src="{{ asset('assets/frontend/images/blog/' . $rp['img']) }}"
                            alt="{{ $rp['t'] }}"
                        >
                        <div
                            class="absolute right-2 top-2 rounded-full bg-black/60 px-2 py-1 text-xs text-white/80 ring-1 ring-white/10">
                            {{ $rp['meta'] }}
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-2 flex flex-wrap gap-2 text-xs">
                            @foreach ($rp['cat'] as $c)
                                <a class="rounded-full bg-white/10 px-2 py-1 text-white/70 ring-1 ring-white/10 hover:bg-white/15"
                                    href="#"
                                >{{ $c }}</a>
                            @endforeach
                        </div>
                        <div class="font-semibold">{{ $rp['t'] }}</div>
                        <div class="mt-1 text-sm text-white/70">{{ $rp['d'] }}</div>
                        <a class="mt-3 inline-flex items-center gap-1 text-sm text-purple-300 hover:text-pink-400"
                            href="#"
                        >
                            Read more
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
                                    d="m9 5 7 7-7 7"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
