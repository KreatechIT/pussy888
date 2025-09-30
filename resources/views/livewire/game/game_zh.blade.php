@push('title')
    游戏
@endpush

<div class="bg-black text-white">
    <!-- Page Header -->
    <x-partials.heading title="游戏" subtitle="Pussy888 • 值得信赖的线上赌场 • 马来西亚" />
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="grid items-center gap-6 lg:grid-cols-[1.2fr_.8fr]">
            <div>
                <h1 class="text-3xl/tight font-bold sm:text-4xl/tight">
                    探索 Pussy888 游戏——老虎机、真人赌场、桌面游戏等
                </h1>
                <p class="mt-4 text-white/80">
                    欢迎来到 Pussy888 游戏中心——马来西亚最刺激、最值得一玩的线上赌场游戏一站式平台。
                    无论你喜欢经典水果机、高额真人荷官游戏，还是拥有超大累积奖池的现代视频老虎机，
                    Pussy888 马来西亚都能满足每一种玩家的喜好。
                </p>
                <p class="mt-3 text-white/80">
                    海量优质游戏、沉浸式画面，以及真实的赢钱潜力——
                    我们丰富的赌场游戏阵容同时支持手机与电脑端，让你随时随地畅玩。
                </p>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-sm text-white/70">快速跳转</div>
                <div class="scroll-smooth">
                    <div class="mt-3 grid gap-2 sm:grid-cols-2">
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#slot-games"
                        >老虎机</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#live-casino"
                        >真人赌场</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#table-games"
                        >桌面游戏</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#jackpot-games"
                        >累积奖池</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#mobile-desktop"
                        >手机/电脑</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#fair-safe"
                        >公平与安全</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Cards Overview -->
    <div class="mx-auto max-w-7xl px-4 pb-8">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">老虎机</div>
                <div class="mt-1 text-sm text-white/70">数百款游戏，含免费旋转、倍增器与奖池。</div>
                <div class="mt-4">
                    <a
                        class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('slot', [app()->getLocale()]) }}"
                        wire:navigate.hover
                    >前往探索 →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">真人赌场</div>
                <div class="mt-1 text-sm text-white/70">高清视频与专业荷官：百家乐、轮盘、二十一点。</div>
                <div class="mt-4">
                    <a
                        class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('live-casino', [app()->getLocale()]) }}"
                        wire:navigate.hover
                    >前往探索 →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">桌面游戏</div>
                <div class="mt-1 text-sm text-white/70">策略经典，操控顺滑，RNG 公平随机。</div>
                <div class="mt-4">
                    <a
                        class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('table-games', [app()->getLocale()]) }}"
                        wire:navigate.hover
                    >前往探索 →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">累积奖池</div>
                <div class="mt-1 text-sm text-white/70">每次旋转都会增长的超大累积奖池。</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="#jackpot-games"
                    >前往探索 →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Slot Games -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="slot-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-bold">老虎机</h2>
                    <p class="mt-2 text-white/80">
                        我们最受欢迎的分类——Pussy888 老虎机，拥有数百款适合不同口味与预算的作品。
                        从简洁的三轴老虎机到功能满满的五轴冒险，每款游戏都有独特的主题、奖励机制与盈利潜力。
                    </p>
                </div>
            </div>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">热门特色</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['免费旋转与奖励回合', '百搭、分散符号与倍增器', 'Pussy888 累积奖池', '自动旋转与极速旋转模式', '惊艳视觉与顺滑动画'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top Slot Titles -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">热门老虎机</div>
                    </div>

                    <!-- Grid of slot games -->
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                        @foreach ([['title' => 'Safari Heat', 'image' => 'slots/safari-heat.jpg'], ['title' => 'Great Blue', 'image' => 'slots/great-blue.jpg'], ['title' => 'Panther Moon', 'image' => 'slots/panther-moon.jpg'], ['title' => 'Highway Kings', 'image' => 'slots/highway-kings.jpg'], ['title' => 'Bonus Bear', 'image' => 'slots/bonus-bear.jpg']] as $slot)
                            <div
                                class="group overflow-hidden rounded-lg border border-white/10 bg-white/[0.04] shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                <a href="https://lv168.com/en/register?up=luckywinwin14">
                                    <img class="h-24 w-full object-cover"
                                        src="{{ asset('assets/frontend/images/' . $slot['image']) }}"
                                        alt="{{ $slot['title'] }}">
                                    <div
                                        class="p-2 text-center text-sm font-medium text-white group-hover:text-purple-400">
                                        {{ $slot['title'] }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <p class="mt-4 text-sm text-white/80">
                不管你偏好“小而频”的连胜，还是冲击改变人生的超大奖，Pussy888 老虎机都能让激情持续在线。
            </p>
        </div>
    </div>

    <!-- Live Casino -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="live-casino">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">真人赌场</h2>
            <p class="mt-2 text-white/80">
                想要实时对战？Pussy888 真人赌场把实体赌场的真实氛围原汁原味搬到你的屏幕。
                通过高清直播与互动玩法，对战专业而友善的真人荷官。
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">可玩真人项目：</div>
                    </div>

                    <!-- Grid of slot games -->
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                        @foreach ([['title' => 'Live Baccarat', 'image' => 'live_casino/baccarat.jpg'], ['title' => 'Live Blackjack', 'image' => 'live_casino/blackjack.jpg'], ['title' => 'Live Roulette', 'image' => 'live_casino/roulette.jpg'], ['title' => 'Sic Bo', 'image' => 'live_casino/sic-bo.jpg'], ['title' => 'Dragon Tiger', 'image' => 'live_casino/dragon-tiger.jpg']] as $slot)
                            <div
                                class="group overflow-hidden rounded-lg border border-white/10 bg-white/[0.04] shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                <a href="https://lv168.com/en/register?up=luckywinwin14">
                                    <img class="h-24 w-full object-cover"
                                        src="{{ asset('assets/frontend/images/' . $slot['image']) }}"
                                        alt="{{ $slot['title'] }}">
                                    <div
                                        class="p-2 text-center text-sm font-medium text-white group-hover:text-purple-400">
                                        {{ $slot['title'] }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top Slot Titles -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">你会喜欢的理由</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['实时下注与即时结算', '可与荷官聊天，社交性强', '清晰流畅的高清直播', '手机与电脑皆可无缝畅玩'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <p class="mt-4 text-sm text-white/80">
                这就是“身临其境”的线上赌场体验！
            </p>
        </div>
    </div>

    <!-- Table Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="table-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">桌面游戏</h2>
            <p class="mt-2 text-white/80">
                喜欢策略与技巧型玩法？Pussy888 的桌面游戏专区提供多款经典项目的数位版本。
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">玩家友好</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['操控顺滑与详尽指引', 'RNG 随机确保公平结果', '新手与高手都能轻松上手'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top Slot Titles -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">常见桌面项目：</div>
                    </div>

                    <!-- Grid of slot games -->
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                        @foreach ([['title' => 'Blackjack', 'image' => 'table_games/blackjack.png'], ['title' => 'Roulette', 'image' => 'table_games/roulette.png'], ['title' => 'Poker', 'image' => 'table_games/baccarat.png'], ['title' => 'Sic Bo', 'image' => 'table_games/sicbo.png'], ['title' => 'Three Card Brag', 'image' => 'table_games/dragontiger.png']] as $slot)
                            <div
                                class="group overflow-hidden rounded-lg border border-white/10 bg-white/[0.04] shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                <a href="https://lv168.com/en/register?up=luckywinwin14">
                                    <img class="h-24 w-full object-cover"
                                        src="{{ asset('assets/frontend/images/' . $slot['image']) }}"
                                        alt="{{ $slot['title'] }}">
                                    <div
                                        class="p-2 text-center text-sm font-medium text-white group-hover:text-purple-400">
                                        {{ $slot['title'] }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jackpot Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="jackpot-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">累积奖池</h2>
            <p class="mt-2 text-white/80">
                想赢得超大奖？来试试 Pussy888 的累积奖池游戏，大奖真的能改变人生。
                累积老虎机的奖池会随每次旋转不断增长——时间越久，奖池越大。
            </p>
            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">可玩真人项目：</div>
                    </div>

                    <!-- Grid of slot games -->
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                        @foreach ([['title' => 'Great Blue Jackpot', 'image' => 'jackpots/great-blue.jpg'], ['title' => 'Safari Heat Jackpot', 'image' => 'jackpots/safari-heat.jpg'], ['title' => 'Panther Moon Jackpot', 'image' => 'jackpots/panther-moon.jpg'], ['title' => 'Highway Kings Progressive', 'image' => 'jackpots/highway-kings.jpg'], ['title' => 'Bonus Bear Jackpot', 'image' => 'jackpots/bonus-bear.jpg']] as $slot)
                            <div
                                class="group overflow-hidden rounded-lg border border-white/10 bg-white/[0.04] shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                <img
                                    class="h-24 w-full object-cover"
                                    src="{{ asset('assets/frontend/images/' . $slot['image']) }}"
                                    alt="{{ $slot['title'] }}"
                                >
                                <div
                                    class="p-2 text-center text-sm font-medium text-white group-hover:text-purple-400">
                                    {{ $slot['title'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top Slot Titles -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">你会喜欢的理由</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['实时下注与即时结算', '可与荷官聊天，社交性强', '清晰流畅的高清直播', '手机与电脑皆可无缝畅玩'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <p class="mt-4 text-sm text-white/80">
                留意特殊符号与奖励触发——下一次巨奖，可能就在转角遇见！
            </p>
        </div>
    </div>

    <!-- Mobile / Desktop -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="mobile-desktop">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 md:p-8">
            <h2 class="text-2xl font-bold tracking-tight">手机或电脑皆可畅玩</h2>
            <p class="mt-3 leading-relaxed text-white/80">
                所有 Pussy888 游戏均为手机（Android 与 iOS）及电脑浏览器深度优化。
                无论在家还是在路上，你的最爱只需轻触即可开启。
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="mt-4 space-y-2">
                    @foreach (['流畅体验与快速加载', '触控友好的手机端界面', '兼容 Pussy888 手机 App 与浏览器版本', '自适应画面，匹配任何屏幕尺寸'] as $feature)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $feature }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5 md:p-6">
                    <div
                        class="inline-flex items-center rounded-full border border-white/15 bg-white/[0.04] px-3 py-1 text-xs font-medium uppercase tracking-wide text-white/70">
                        专家提示
                    </div>
                    <p class="mt-3 text-sm leading-relaxed text-white/80">
                        为获得最佳体验，请保持应用为最新版本，并在支持的浏览器中开启硬件加速。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Fair & Safe -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="fair-safe">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">公平、安全与认证</h2>
            <p class="mt-2 text-white/80">
                Pussy888 上的所有游戏均由合规软件商提供，并采用随机数生成器（RNG）确保结果公平。
                我们的平台全面加密与防护，你尽管专注享受游戏乐趣，数据安全交给我们。
            </p>
        </div>
    </div>

    <!-- Try Demo -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">试用演示模式</h2>
            <p class="mt-2 text-white/80">
                不知道从哪里开始？我们有不少游戏提供演示模式，你可以先体验功能、
                测试策略、了解规则——无需花费真实资金。
            </p>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="今天就开始畅玩！"
        primaryCtaText="下载 Pussy888"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="浏览全部游戏"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        探索完整的 Pussy888 游戏列表，看看为何我们是
        马来西亚玩家最喜爱的线上赌场之一。
        无论是为乐趣还是为大奖，Pussy888 都在每一次旋转、每一手牌、每一回合中提供无与伦比的品质与多样性。
    </x-partials.download>
</div>
