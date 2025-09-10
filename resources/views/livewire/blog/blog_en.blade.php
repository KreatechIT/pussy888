@push('title')
    Blogs
@endpush
<div class="min-h-screen bg-black text-white">
    <!-- Page Heading -->
    <x-partials.heading title="Blogs" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />

    <!-- Featured Article -->
    <div class="mx-auto max-w-7xl px-4 pt-6">
        <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <div class="relative">
                <img
                    class="h-[360px] w-full object-cover sm:h-[460px]"
                    src="{{ asset('assets/frontend/images/blog/featured.jpg') }}"
                    alt="Featured"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
            </div>
            <div class="absolute inset-x-0 bottom-0 p-5 sm:p-8">
                <div class="flex flex-wrap items-center gap-2 text-xs">
                    <span
                        class="inline-flex items-center gap-1 rounded-full bg-gradient-to-r from-fuchsia-500 to-pink-500 px-3 py-1 font-semibold text-black"
                    >
                        Featured
                    </span>
                    <span class="rounded-full bg-white/10 px-2 py-1 text-white/80 ring-1 ring-white/10">Guide</span>
                    <span class="rounded-full bg-white/10 px-2 py-1 text-white/80 ring-1 ring-white/10">7 min
                        read</span>
                </div>
                <div class="mt-3 text-2xl/tight font-bold sm:text-4xl/tight">
                    How to Start Playing Safely on Pussy888: Registration, Deposit & First Game
                </div>
                <div class="mt-2 max-w-3xl text-white/80">
                    A complete beginner-friendly walkthrough—from creating your account and securing it,
                    to funding your wallet and choosing your first game with confidence.
                </div>
                <div class="mt-5 flex flex-wrap gap-3">
                    <x-partials.button href="#">Read Featured Guide</x-partials.button>
                    <x-partials.button type="outline" href="#">Browse All Articles</x-partials.button>
                </div>
            </div>
        </div>
    </div>

    <!-- Articles -->
    <div class="mx-auto max-w-7xl px-4 py-12">
        <div class="mb-6 flex items-center justify-between">
            <div>
                <div class="text-2xl font-bold">From the Blog & FAQ</div>
                <div class="text-sm text-white/70">Latest tips, how-tos, and platform updates.</div>
            </div>
            <a class="rounded-md border border-white/15 px-4 py-2 text-sm hover:bg-white/5 sm:inline-flex"
                href="#"
            >
                View All
            </a>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
            @foreach ([['t' => 'How to Register & Verify Account', 'd' => 'Step-by-step guide to start playing at Kiss918.', 'img' => 'post1.jpg', 'meta' => '5 min read', 'cat' => ['Guide', 'Getting Started']], ['t' => 'Deposit & Withdrawal Methods', 'd' => 'FPX, e-wallets, bank transfer & crypto.', 'img' => 'post2.jpg', 'meta' => '6 min read', 'cat' => ['Payments']], ['t' => 'Fair Play & Security', 'd' => 'RNG certified games & SSL encryption.', 'img' => 'post3.jpg', 'meta' => '4 min read', 'cat' => ['Security']], ['t' => 'Top Slot Providers to Try', 'd' => 'Pragmatic, JILI, PG Soft & more.', 'img' => 'post4.jpg', 'meta' => '3 min read', 'cat' => ['Slots']], ['t' => 'Claiming Daily Rebates', 'd' => 'How to maximize your daily cashback.', 'img' => 'post5.jpg', 'meta' => '4 min read', 'cat' => ['Promotions']], ['t' => 'Beginner’s Live Casino Picks', 'd' => 'Baccarat, Roulette, and game shows.', 'img' => 'post6.jpg', 'meta' => '5 min read', 'cat' => ['Live Casino']]] as $a)
                <div class="overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                    <div class="relative aspect-[16/9]">
                        <img
                            class="h-full w-full object-cover"
                            src="{{ asset('assets/frontend/images/blog/' . $a['img']) }}"
                            alt=""
                        >
                        <div
                            class="absolute right-2 top-2 rounded-full bg-black/60 px-2 py-1 text-xs text-white/80 ring-1 ring-white/10">
                            {{ $a['meta'] }}
                        </div>
                    </div>
                    <div class="p-4">
                        <!-- Category Tags -->
                        <div class="mb-2 flex flex-wrap gap-2 text-xs">
                            @foreach ($a['cat'] as $c)
                                <span class="rounded-full bg-white/10 px-2 py-1 text-white/70 ring-1 ring-white/10">
                                    {{ $c }}
                                </span>
                            @endforeach
                        </div>
                        <div class="font-semibold">{{ $a['t'] }}</div>
                        <div class="mt-1 text-sm text-white/70">{{ $a['d'] }}</div>
                        <a class="mt-3 inline-flex items-center gap-1 text-sm text-purple-300 hover:text-pink-400"
                            href="#"
                        >Read more
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

        <!-- Pagination (placeholder) -->
        <div class="mt-10 flex items-center justify-center gap-2">
            <a class="rounded-md border border-white/10 px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300" href="#">Previous</a>
            <div class="inline-flex items-center gap-1">
                @foreach ([1, 2, 3, 4] as $i)
                    <a class="{{ $i === 1 ? 'bg-pink-400/10 text-purple-300' : '' }} rounded-md px-3 py-2 ring-1 ring-white/10 hover:bg-pink-400/10 hover:text-purple-300"
                        href="#"
                    >
                        {{ $i }}
                    </a>
                @endforeach
            </div>
            <a class="rounded-md border border-white/10 px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300" href="#">Next</a>
        </div>
    </div>
</div>
