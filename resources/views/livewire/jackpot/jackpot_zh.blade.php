<div class="bg-black text-white">
    <!-- Header -->
    <x-partials.heading title="累积奖池" subtitle="Pussy888 • 值得信赖的线上赌场 • 马来西亚" />
    <!-- Page Heading -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs ring-1 ring-white/15">
                🎰 <span>奖池中心</span>
            </div>
            <div class="mt-3 text-3xl/tight font-bold sm:text-4xl/tight">
                Pussy888 累积奖池 – 大转赢更大！
            </div>
            <div class="mt-4 max-w-3xl text-white/80">
                欢迎来到 Pussy888 的累积奖池世界，在这里每一次旋转都可能成为改变人生的时刻。
                在 Pussy888 马来西亚，我们提供多种刺激的累积奖池老虎机和固定奖池游戏，
                让您有机会赢取巨额现金奖励 — 全部尽在您手机的舒适操作中。
                如果您正在寻找线上赌场游戏的终极刺激，累积奖池区就是最大 excitement 的所在。
            </div>
        </div>
    </div>

    <!-- What Are Jackpot Games? -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">什么是累积奖池游戏？</div>
            <div class="mt-3 max-w-3xl text-white/80">
                累积奖池游戏是特别的老虎机游戏，奖金远高于标准老虎机的派彩。
                这些游戏主要分为两种类型：
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <!-- Fixed Jackpots -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="flex items-center gap-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-emerald-500/20">🔒</div>
                        <div class="text-lg font-semibold">固定奖池</div>
                    </div>
                    <div class="mt-3 space-y-2 text-sm text-white/80">
                        <div>• 特定符号组合会支付固定奖金。</div>
                        <div>• 奖金数额一致，不会随时间变化。</div>
                        <div>• 相较于累积奖池更容易中奖。</div>
                    </div>
                </div>

                <!-- Progressive Jackpots -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="flex items-center gap-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-pink-500/20">📈</div>
                        <div class="text-lg font-semibold">累积奖池</div>
                    </div>
                    <div class="mt-3 space-y-2 text-sm text-white/80">
                        <div>• 每位玩家投注的一小部分会进入不断增长的奖金池。</div>
                        <div>• 奖池会不断增加，直到有人赢得 — 常常达到巨额奖金。</div>
                        <div>• 玩家旋转越多，奖池金额越高。</div>
                    </div>
                    <div class="mt-3 text-sm text-white/70">
                        Pussy888 的累积奖池是平台最受欢迎的特色之一，已经让幸运玩家赢得了令人瞠目结舌的大奖。
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Jackpot Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="mb-4 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Pussy888 热门奖池游戏</div>
                <div class="text-sm text-white/70">震撼视觉、沉浸音效 & 真正赢大奖的机会。</div>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([['t' => 'Great Blue Jackpot', 'd' => '潜入深海，赢取高倍奖励和巨额大奖。', 'img' => 'great-blue.jpg'], ['t' => 'Safari Heat Jackpot', 'd' => '野生动物主题老虎机，包含百搭、免费旋转和不断增长的奖池。', 'img' => 'safari-heat.jpg'], ['t' => 'Panther Moon Jackpot', 'd' => '神秘、黑暗、充满惊喜的胜利。', 'img' => 'panther-moon.jpg'], ['t' => 'Highway Kings Progressive', 'd' => '经典设计，丰厚奖金和奖励回合。', 'img' => 'highway-kings.jpg'], ['t' => 'Bonus Bear Jackpot', 'd' => '轻松主题，潜藏严肃的赢奖潜力。', 'img' => 'bonus-bear.jpg']] as $g)
                <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                    <div class="relative aspect-[16/10] overflow-hidden">
                        <img
                            class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                            src="{{ asset('assets/frontend/images/jackpots/' . $g['img']) }}"
                            alt="{{ $g['t'] }}"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 p-3">
                            <div class="font-semibold">{{ $g['t'] }}</div>
                            <div class="text-xs text-white/70">奖池老虎机</div>
                        </div>
                        <!-- Optional live jackpot meter -->
                        <div
                            class="absolute right-3 top-3 rounded-md bg-purple-400 px-2 py-1 text-xs font-semibold text-black">
                            RM 1,248,930+
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3">
                        <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                            href="https://lv168.com/en/register?up=luckywinwin14"
                        >立即游戏</a>
                        <a class="text-sm text-white/70 hover:text-white" href="https://lv168.com/en/register?up=luckywinwin14">详情 →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Why Play -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">为什么玩 Pussy888 累积奖池老虎机？</div>
            <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([['i' => '💰', 't' => '奖金高于普通老虎机'], ['i' => '🎯', 't' => '高重复价值，附带刺激的奖励回合'], ['i' => '🏆', 't' => '累积奖池奖金池庞大'], ['i' => '📱', 't' => '为 Android & iOS（Pussy888 应用）优化'], ['i' => '🇲🇾', 't' => '马来西亚玩家每周赢取真钱奖励'], ['i' => '⚡', 't' => '快速、流畅的游戏体验 & 快速加载']] as $w)
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="flex items-center gap-3">
                            <div class="flex size-9 items-center justify-center rounded-lg bg-white/10">
                                {{ $w['i'] }}</div>
                            <div class="font-semibold">{{ $w['t'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 text-sm text-white/80">
                无论您追逐的是成千上万还是数百万，Pussy888 累积奖池都为您提供令人兴奋的机会，每一次旋转都有可能赢得大奖。
            </div>
        </div>
    </div>

    <!-- Play Anytime, Anywhere -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="grid items-center gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="text-2xl font-bold">随时随地畅玩奖池游戏</div>
                <div class="mt-3 text-white/80">
                    所有 Pussy888 累积奖池老虎机完全兼容移动设备和桌面平台。无论您身在何处，都可以旋转赢取大奖。
                </div>
                <div class="mt-4 space-y-2 text-white/80">
                    <div>• 在 Android（APK）或 iOS 下载 Pussy888</div>
                    <div>• 或通过手机浏览器立即游戏</div>
                    <div>• 游戏加载快速、运行流畅、并针对触控优化</div>
                    <div>• 无延迟。无限制。纯粹的奖池乐趣。</div>
                </div>
                <div class="mt-5 flex flex-wrap gap-3">
                    <a class="rounded-md bg-purple-400 px-4 py-2 font-semibold text-black hover:bg-purple-300"
                        href="https://lv168.com/en/register?up=luckywinwin14"
                    >下载 APK</a>
                    <a class="rounded-md border border-white/15 px-4 py-2 hover:bg-white/5" href="https://lv168.com/en/register?up=luckywinwin14">获取 iOS</a>
                    <a class="rounded-md border border-white/15 px-4 py-2 hover:bg-white/5" href="https://lv168.com/en/register?up=luckywinwin14">浏览器畅玩</a>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.02]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/jackpots/jackpot-mobile.jpg') }}"
                    alt="随地畅玩"
                >
            </div>
        </div>
    </div>

    <!-- Safe & Fair -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">安全、公平 & 受监管的游戏</div>
            <div class="mt-3 text-white/80">
                所有 Pussy888 累积奖池游戏均由认证的随机数生成器（RNG）和持牌游戏供应商支持。
                通过 SSL 加密，您的数据和交易随时受到保护。
            </div>
            <div class="mt-4 grid gap-4 text-sm sm:grid-cols-3">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">🔐 SSL 加密</div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">🧪 RNG 认证</div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">📜 持牌供应商</div>
            </div>
        </div>
    </div>

    <!-- Bonuses -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">提升奖池游戏体验的奖金</div>
            <div class="mt-3 text-white/80">
                想在追逐奖池的同时获得更多价值吗？快来享受我们定期的奖金和促销活动：
            </div>
            <div class="mt-5 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([['t' => '欢迎奖金', 'd' => '开启游戏，额外赠送积分。'], ['t' => '免费旋转', 'd' => '适用于部分奖池老虎机。'], ['t' => '现金回扣', 'd' => '活跃游戏可获得 % 返还。'], ['t' => 'VIP 活动', 'd' => '专属 VIP 的奖池活动。']] as $b)
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold">{{ $b['t'] }}</div>
                        <div class="mt-1 text-sm text-white/70">{{ $b['d'] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                <a class="inline-flex items-center gap-2 rounded-md bg-purple-400 px-4 py-2 font-semibold text-black hover:bg-purple-300"
                    href="https://lv168.com/en/register?up=luckywinwin14"
                >
                    查看优惠 →
                </a>
            </div>
        </div>
    </div>

    <!-- Tips (Accordion with Alpine) -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">赢得累积奖池老虎机的小贴士</div>

            @php
                $tips = [
                    '玩最大线数和投注以获得全额奖池派彩资格',
                    '设定预算并坚持 — 奖池游戏波动性高',
                    '先试玩演示版本以了解功能和奖励触发器',
                    '寻找显示奖金池金额的奖池计数器',
                    '关注提供奖金积分或免费旋转的促销活动',
                ];
            @endphp

            <div class="mt-4 space-y-2">
                @foreach ($tips as $i => $tip)
                    <div class="rounded-lg border border-white/10 bg-white/[0.02]">
                        <button class="flex w-full items-center justify-between px-4 py-3 text-left">
                            <span class="font-medium">{{ $tip }}</span>
                        </button>
                        <div
                            class="px-4 pb-4 text-sm text-white/70"
                            x-show="tipsOpen === {{ $i }}"
                            x-collapse
                        >
                            记住，每一次旋转都可能改变一切！
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-partials.download
        title="立即开始转动赢大奖！"
        primaryCtaText="下载 Pussy888"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="立即游戏"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        胜利的快感只需轻轻一点。加入马来西亚成千上万的玩家，和 Pussy888 一起旋转走向财富。
        <div class="mt-3">
            可信赖的游戏体验、震撼的画面和真钱奖励，现在是追逐终极大奖的时候了。
            立即下载 Pussy888，转动属于您的下一次大胜！
        </div>
    </x-partials.download>
</div>
