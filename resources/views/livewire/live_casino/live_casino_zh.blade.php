@push('title')
    真人赌场
@endpush

<div class="bg-black text-white" x-data="{
    openFilter: false,
    selectedFilter: '全部',
    filters: ['全部', '百家乐', '二十一点', '轮盘', '龙虎', '骰宝'],
    matches(category) { return this.selectedFilter === '全部' || this.selectedFilter === category }
}">
    <!-- Page Header -->
    <x-partials.heading title="真人赌场" subtitle="Pussy888 • 真人荷官 • 马来西亚" />

    <!-- Page Title -->
    <div class="mx-auto max-w-7xl px-4 pt-8">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h1 class="text-2xl font-bold sm:text-3xl">Pussy888 真人赌场 —— 与真人荷官实时对战</h1>
            <p class="mt-3 text-white/80">
                走进 Pussy888 真人赌场的世界，在这里你不只是玩游戏——你将亲临其境地体验真实赌场的刺激。
                无论在家中还是移动设备上，都能享受互动性强、节奏紧凑的实时直播游戏，由专业荷官全程引导。
            </p>
            <p class="mt-3 text-white/80">
                无论你是经验老手还是好奇的新手，Pussy888 都为马来西亚玩家提供完整的真人荷官体验：
                每一手都兼具激情、真实与信赖。
            </p>
        </div>
    </div>

    <!-- What is a Live Casino -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">什么是真人赌场？</h2>
            <p class="mt-2 text-white/80">
                真人赌场是沉浸式的线上娱乐形式，由真人荷官通过实时视频主持游戏。
                你可以清楚看到每一次洗牌、轮盘转动或骰子滚动，就像身处线下赌场一样。
            </p>
            <p class="mt-2 text-white/80">
                与传统的 RNG 桌面游戏不同，真人赌场加入了人性化互动，让玩家更贴近真实的赌博体验。
            </p>
        </div>
    </div>

    <!-- Live Dealer Games + Filter -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="flex items-end justify-between gap-3">
            <div>
                <h2 class="text-xl font-semibold">Pussy888 提供的真人荷官游戏</h2>
                <p class="text-sm text-white/70">我们的真人库涵盖最受欢迎、最刺激的赌场游戏：</p>
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
                x-show="matches('百家乐')">
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/baccarat.jpg') }}"
                        alt="真人百家乐"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">真人百家乐</div>
                        <div class="text-xs text-white/70">经久不衰的经典，是 Pussy888 最热门的真人游戏之一。
                            下注闲、庄或和，随着发牌过程感受紧张刺激。</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：百家乐</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >进入桌台</a>
                </div>
            </div>

            <!-- Live Blackjack -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('二十一点')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/blackjack.jpg') }}"
                        alt="真人二十一点"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">真人二十一点</div>
                        <div class="text-xs text-white/70">运用策略与技巧，在这款紧张刺激的 21 点游戏中击败荷官。
                            与荷官及桌上玩家互动，体验社交且节奏明快的玩法。</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：二十一点</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >进入桌台</a>
                </div>
            </div>

            <!-- Live Roulette -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]" x-show="matches('轮盘')">
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/roulette.jpg') }}"
                        alt="真人轮盘"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">真人轮盘</div>
                        <div class="text-xs text-white/70">放上你的筹码，看着转盘旋转，等待小球落位。
                            Pussy888 提供多种轮盘版本，专业主持与实时结果。</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：轮盘</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >进入桌台</a>
                </div>
            </div>

            <!-- Dragon Tiger -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]" x-show="matches('龙虎')">
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/dragon-tiger.jpg') }}"
                        alt="龙虎"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">龙虎</div>
                        <div class="text-xs text-white/70">简单且节奏快的玩法，押注“龙”或“虎”哪张牌更大。
                            新手与刺激爱好者的共同最爱。</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：龙虎</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >进入桌台</a>
                </div>
            </div>

            <!-- Sic Bo -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]" x-show="matches('骰宝')">
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/sic-bo.jpg') }}"
                        alt="骰宝"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">骰宝</div>
                        <div class="text-xs text-white/70">掷出骰子，试试你的手气。这款广受欢迎的亚洲博弈有多种下注方式，
                            可能性丰富且回报可观。</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：骰宝</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >进入桌台</a>
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
                        移动优先 • 高清串流
                    </div>
                    <h2 class="mt-3 text-xl font-semibold">移动端与桌面端畅玩</h2>
                    <p class="mt-2 text-white/80">
                        Pussy888 的所有真人游戏都以移动端为优先设计。无论是 Android、iOS 还是电脑，
                        你都能享受流畅的高清直播与直观的下注界面。
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
                                    下载 Pussy888 手机应用，获取最佳性能
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
                                    或直接通过手机浏览器即开即玩 — 无需安装
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
                                    使用同一账户，无缝切换多设备
                                </div>
                            </div>
                        </a>
                    </div>

                    <p class="mt-3 text-white/80">
                        无论你身在何处，最爱的真人赌场游戏都触手可及。
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
                    <h2 class="text-xl font-semibold">公平、安全、透明</h2>
                    <p class="mt-2 text-white/80">
                        Pussy888 与持牌、信誉良好的真人供应商合作，确保公平游戏、数据安全与负责任博彩：
                    </p>
                </div>
                <div
                    class="hidden rounded-full bg-emerald-400/15 px-3 py-1 text-xs font-medium text-emerald-300 ring-1 ring-inset ring-emerald-400/30 md:block">
                    认证工作室
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
                            所有游戏均由真人荷官在认证工作室中主持
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
                        <div class="font-semibold">直播串流采用 SSL 加密</div>
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
                        <div class="font-semibold">下注结果被记录且可核验</div>
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
                        <div class="font-semibold">提供聊天与打赏功能，增强互动</div>
                    </div>
                </div>
            </div>

            <p class="mt-4 text-white/80">
                在 Pussy888，每一次转盘与每一次洗牌都值得信赖。
            </p>
        </div>
    </div>

    <!-- Bonuses & Promotions -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <!-- Header -->
            <div class="flex flex-wrap items-center justify-between gap-3 p-6 md:p-8">
                <div>
                    <h2 class="text-xl font-semibold">真人赌场奖金与优惠</h2>
                    <p class="mt-2 text-white/80">
                        直播对战也有丰厚回馈！Pussy888 为真人玩家提供专属奖金与优惠，包括：
                    </p>
                </div>
                <div
                    class="rounded-full bg-purple-400/20 px-3 py-1 text-xs font-medium text-purple-300 ring-1 ring-inset ring-purple-400/30">
                    每日更新
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
                        <div class="font-semibold">新用户欢迎奖金</div>
                    </div>
                </div>
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-pink-500/10 via-white/0 to-white/0 p-4 hover:from-pink-500/20">
                    <div class="items中心 flex gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M12 4a8 8 0 1 1 0 16v-2a6 6 0 1 0 0-12V4Zm-1 6h2v6h-2v-6Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">真人桌台亏损返现优惠</div>
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
                        <div class="font-semibold">高额玩家 VIP 奖励</div>
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
                        <div class="font-semibold">重载奖金与每日促销</div>
                    </div>
                </div>
            </div>

            <!-- Note -->
            <div class="px-6 pb-6 text-white/80">
                请经常查看“优惠活动”页面，获取最新福利——让你玩得更多、赢得更多。
            </div>
        </div>
    </div>

    <!-- 24/7 Live Support -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">7×24 小时在线客服</h2>
            <p class="mt-2 text-white/80">
                我们的 Pussy888 客服团队随时为你的真人赌场体验提供协助。无论是技术问题还是账户咨询，只需点击即可获得支持。
            </p>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="立即开玩真人桌台！"
        primaryCtaText="下载 Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="登录并加入桌台"
        secondaryCtaLink="#"
    >
        Pussy888 真人赌场是马来西亚实时真人娱乐的终极去处。
        专业荷官、精彩游戏与值得信赖的平台——现在就下载或登录，加入真人桌台，开启前所未有的体验！
    </x-partials.download>
</div>
