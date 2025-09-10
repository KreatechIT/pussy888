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
                    探索 Pussy888 游戏 —— 老虎机、真人赌场、桌面游戏等
                </h1>
                <p class="mt-4 text-white/80">
                    欢迎来到 Pussy888 游戏中心 —— 您在马来西亚体验最刺激、最丰厚线上赌场游戏的一站式目的地。
                    无论是经典水果机、高额真人荷官，还是拥有巨额大奖的现代视频老虎机，
                    Pussy888 Malaysia 都能满足各类玩家的喜好。
                </p>
                <p class="mt-3 text-white/80">
                    通过我们海量的赌场作品，尽享高品质玩法、沉浸式画面以及真实的赢钱潜力，
                    无论在手机还是桌面端都可畅玩。
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
                        >大奖游戏</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#mobile-desktop"
                        >手机/桌面端</a>
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
                <div class="mt-1 text-sm text-white/70">数百款作品，含免费旋转、倍数加成与大奖。</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('slot', [app()->getLocale()]) }}" wire:navigate.hover>前往探索 →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">真人赌场</div>
                <div class="mt-1 text-sm text-white/70">高清直播与专业荷官：百家乐、轮盘、二十一点。</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('live-casino', [app()->getLocale()]) }}" wire:navigate.hover
                    >前往探索 →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">桌面游戏</div>
                <div class="mt-1 text-sm text-white/70">经典策略玩法，操作顺滑，RNG 公平。</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('table-games', [app()->getLocale()]) }}" wire:navigate.hover
                    >前往探索 →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">大奖游戏</div>
                <div class="mt-1 text-sm text-white/70">累积奖池随每次转动不断增长。</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('jackpot', [app()->getLocale()]) }}" wire:navigate.hover
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
                        我们最受欢迎的类别——Pussy888 老虎机，拥有数百款适合各种喜好与预算的作品。
                        从简洁的三轴老虎机到功能丰富的五轴冒险，每款游戏都具备独特主题、奖励机制与中奖潜力。
                    </p>
                </div>
            </div>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">热门功能：</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>免费旋转与奖励回合</li>
                        <li>百搭（Wild）、分散（Scatter）与倍数加成</li>
                        <li>Pussy888 累计大奖</li>
                        <li>自动旋转与快速旋转模式</li>
                        <li>精美画面与流畅动画</li>
                    </ul>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">热门老虎机标题：</div>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach (['Safari Life', 'Great Blue', 'Panther Moon', 'Highway Kings', 'Bonus Bear'] as $title)
                            <div class="rounded-lg border border-white/10 bg-white/[0.04] px-3 py-1.5 text-sm">
                                {{ $title }}</div>
                        @endforeach
                    </div>
                    <p class="mt-4 text-sm text-white/80">
                        无论你追求频繁的小额中奖，还是志在一击致富，我们的老虎机都能带来无尽刺激。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Live Casino -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="live-casino">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">真人赌场</h2>
            <p class="mt-2 text-white/80">
                想要实时对战？Pussy888 真人赌场将实体赌场的真实氛围带到你的屏幕。
                通过高清直播和互动玩法，与专业、友好的荷官同桌较量。
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">提供的真人游戏：</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>真人百家乐</li>
                        <li>真人二十一点</li>
                        <li>真人轮盘</li>
                        <li>骰宝</li>
                        <li>龙虎斗</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">为什么你会喜欢</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>实时下注与即时结算</li>
                        <li>可与荷官交流，社交性强</li>
                        <li>清晰流畅的高清直播</li>
                        <li>手机与桌面端无缝畅玩</li>
                    </ul>
                    <p class="mt-3 text-sm text-white/70">这几乎就是亲临赌场大厅的感觉！</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="table-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">桌面游戏</h2>
            <p class="mt-2 text-white/80">
                更偏爱策略与技巧？Pussy888 的桌面游戏区提供玩家喜爱的经典作品数字版。
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">你会看到的桌游：</div>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach (['Blackjack', 'Roulette', 'Poker', 'Sic Bo', 'Three Card Brag'] as $g)
                            <div class="rounded-lg border border-white/10 bg-white/[0.04] px-3 py-1.5 text-sm">
                                {{ $g }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">友好易玩</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>操作顺滑 & 规则说明详尽</li>
                        <li>基于 RNG 的公平结果</li>
                        <li>新手与高手皆宜</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Jackpot Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="jackpot-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">大奖游戏</h2>
            <p class="mt-2 text-white/80">
                想要一举夺魁？试试 Pussy888 的大奖游戏，赢取改变人生的巨额奖赏。
                这些累积老虎机会随着每次转动不断增加奖池 —— 运行时间越久，大奖越可观。
            </p>
            <p class="mt-3 text-white/80">
                留意特殊符号与奖励触发 —— 也许下一次转动就是你的高光时刻！
            </p>
        </div>
    </div>

    <!-- Mobile / Desktop -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="mobile-desktop">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">手机或桌面端畅玩</h2>
            <p class="mt-2 text-white/80">
                所有 Pussy888 游戏均为移动设备（Android & iOS）与桌面浏览器深度优化。
                无论在家或在路上，你的最爱只需轻触即达。
            </p>

            <div class="mt-4 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <ul class="space-y-2 text-sm text-white/80">
                        <li>流畅游玩与快速加载</li>
                        <li>移动端触控友好界面</li>
                        <li>兼容 Pussy888 手机应用与网页版本</li>
                        <li>图形自适应任意屏幕尺寸</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="text-sm text-white/70">专业提示</div>
                    <p class="mt-2 text-sm text-white/80">
                        为获得最佳体验，请保持应用为最新版本，并在支持的浏览器中启用硬件加速。
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
                Pussy888 上的每款游戏均由通过认证的软件商提供，并采用随机数生成器（RNG）
                确保结果公平。我们的平台全程加密与防护，让你专注于乐趣，我们负责守护你的数据。
            </p>
        </div>
    </div>

    <!-- Try Demo -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">试玩游戏</h2>
            <p class="mt-2 text-white/80">
                不确定从哪款开始？我们有许多游戏提供试玩模式，便于你探索功能、
                测试策略与学习规则 —— 全程无需花费真钱。
            </p>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="今天就开始畅玩！"
        primaryCtaText="下载 Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="浏览全部游戏"
        secondaryCtaLink="#"
    >
        探索完整的 Pussy888 游戏列表，看看为什么我们是
        马来西亚玩家的心头好之一。
        无论为乐趣还是为财富，Pussy888 都在每一次转动、每一手牌、每一回合中呈现无与伦比的品质与多样性。
    </x-partials.download>
</div>
