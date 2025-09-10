@push('title')
    老虎机
@endpush

<div class="bg-black text-white" x-data="{
    openFilter: false,
    selectedFilter: '全部',
    filters: ['全部', '经典三轴', '视频五轴', '累积大奖'],
    matches(category) { return this.selectedFilter === '全部' || this.selectedFilter === category }
}">
    <!-- Page Header -->
    <x-partials.heading title="老虎机游戏" subtitle="Pussy888 • 值得信赖的线上赌场 • 马来西亚" />

    <!-- Page Title -->
    <div class="mx-auto max-w-7xl px-4 pt-8">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h1 class="text-2xl font-bold sm:text-3xl">Pussy888 老虎机 – 转动赢取大奖！</h1>
            <p class="mt-3 text-white/80">
                欢迎来到精彩刺激的 Pussy888 老虎机世界，每一次转动都充满机会与乐趣。
                作为马来西亚最受欢迎的线上赌场平台之一，Pussy888 提供大量高品质老虎机，节奏快速、玩法有趣，并带来真实奖励。
                无论您是资深玩家还是新手，都能找到适合您风格与预算的游戏。
            </p>
        </div>
    </div>

    <!-- Why Play -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">为什么选择在 Pussy888 玩老虎机？</h2>
            <p class="mt-2 text-white/80">
                老虎机是 Pussy888 的核心体验——快速、丰厚，且功能满满。拥有数百款作品可供探索，
                从经典三轴机器到现代五轴视频老虎机，配有奖励回合与动画效果。
            </p>

            <!-- Highlights + Mobile dropdown -->
            <div class="mt-4 grid gap-4 md:grid-cols-2">
                <!-- Static list (desktop) -->
                <div class="hidden md:block">
                    <div class="grid gap-3">
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">海量主题选择</div>
                            <div class="text-sm text-white/70">冒险、神话、水果、奇幻等应有尽有。</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">玩法功能丰富</div>
                            <div class="text-sm text-white/70">免费旋转、百搭 (Wild)、分散 (Scatter)、倍数加成。</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">上手容易，精通不易</div>
                            <div class="text-sm text-white/70">对新手友好，同时具备深度玩法。</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">多设备流畅运行</div>
                            <div class="text-sm text-white/70">手机与桌面端均流畅无卡顿。</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">大奖潜力</div>
                            <div class="text-sm text-white/70">有机会赢取价值不菲的 Pussy888 累计大奖。</div>
                        </div>
                    </div>
                </div>

                <!-- Mobile accordion (Alpine) -->
                <div class="md:hidden">
                    <div class="rounded-lg border border-white/10">
                        <button class="flex w-full items-center justify-between px-4 py-3"
                            @click="openFilter=!openFilter"
                        >
                            <span class="font-semibold">亮点</span>
                            <svg
                                class="size-4 transition"
                                :class="openFilter && 'rotate-180'"
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
                            class="space-y-3 px-4 pb-4"
                            x-show="openFilter"
                            x-transition
                        >
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">海量主题选择</div>
                                <div class="text-white/70">冒险、神话、水果、奇幻等应有尽有。</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">玩法功能丰富</div>
                                <div class="text-white/70">免费旋转、百搭、分散、倍数加成。</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">上手容易，精通不易</div>
                                <div class="text-white/70">新手友好且富有深度。</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">多设备流畅运行</div>
                                <div class="text-white/70">手机与桌面端均流畅。</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">大奖潜力</div>
                                <div class="text-white/70">有机会赢取 Pussy888 累计大奖。</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-4 text-sm text-white/70">
                所有老虎机均通过认证并采用随机数生成器 (RNG)，确保每一次转动真正随机且公平。
            </p>
        </div>
    </div>

    <!-- Category Filter + Top Titles -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="flex items-end justify-between gap-3">
            <div>
                <h2 class="text-xl font-semibold">Pussy888 热门老虎机</h2>
                <p class="text-sm text-white/70">高人气、高回报，深受马来西亚玩家喜爱。</p>
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
            <!-- Great Blue -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('视频五轴')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/great-blue.jpg') }}"
                        alt="Great Blue"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Great Blue</div>
                        <div class="text-xs text-white/70">海洋主题，大倍数 & 免费旋转</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：视频五轴</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >开始</a>
                </div>
            </div>

            <!-- Highway Kings -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('经典三轴')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/highway-kings.jpg') }}"
                        alt="Highway Kings"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Highway Kings</div>
                        <div class="text-xs text-white/70">节奏明快，复古风格设计</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：经典三轴</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >开始</a>
                </div>
            </div>

            <!-- Panther Moon -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('视频五轴')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/panther-moon.jpg') }}"
                        alt="Panther Moon"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Panther Moon</div>
                        <div class="text-xs text-white/70">神秘森林主题，百搭奖励丰厚</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：视频五轴</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >开始</a>
                </div>
            </div>

            <!-- Safari Heat -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('视频五轴')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/safari-heat.jpg') }}"
                        alt="Safari Heat"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Safari Heat</div>
                        <div class="text-xs text-white/70">野性动物冒险，免费旋转与大奖</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：视频五轴</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                        href="#"
                    >开始</a>
                </div>
            </div>

            <!-- Bonus Bear -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('视频五轴')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/bonus-bear.jpg') }}"
                        alt="Bonus Bear"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Bonus Bear</div>
                        <div class="text-xs text-white/70">卡通风格，蜂蜜罐奖金玩法</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：视频五轴</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                        href="#"
                    >开始</a>
                </div>
            </div>

            <!-- Progressive sample card -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('累积大奖')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/progressive.jpg') }}"
                        alt="累积大奖"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Jackpot Rush</div>
                        <div class="text-xs text-white/70">奖池随每次转动不断累积增长</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">类别：累积大奖</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                        href="#"
                    >开始</a>
                </div>
            </div>
        </div>

        <p class="mt-3 text-sm text-white/70">
            这些游戏因其精美画面、音效与频繁的中奖机会而备受喜爱。
        </p>
    </div>

    <!-- Progressive Jackpots Info -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">累积大奖 —— 转得越多，赢得越大</h2>
            <p class="mt-2 text-white/80">
                部分 Pussy888 老虎机设有累积大奖，奖池会随着每次转动不断增加，直到有人赢得巨额奖励。
                注意大奖计数器或能触发巨奖的特殊符号——一次幸运的转动就能改变一切。
            </p>
        </div>
    </div>

    <!-- Mobile Play -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">随时随地，畅玩移动端</h2>
            <p class="mt-2 text-white/80">
                所有老虎机完全兼容 Pussy888 手机应用与浏览器版本。无论 Android 或 iOS，都能享受顺畅转动体验。
            </p>
            <div class="mt-4 grid gap-3 md:grid-cols-3">
                <a class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]" href="#">
                    <div class="font-semibold">下载 Pussy888 APK（Android）</div>
                    <div class="text-sm text-white/70">快速安装，立即畅玩。</div>
                </a>
                <a class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]" href="#">
                    <div class="font-semibold">在 iPhone/iPad 安装（iOS）</div>
                    <div class="text-sm text-white/70">针对 iOS 优化表现。</div>
                </a>
                <a class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]" href="#">
                    <div class="font-semibold">手机浏览器畅玩</div>
                    <div class="text-sm text-white/70">无需下载——点击即玩。</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Demo Mode -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">试玩模式 —— 先体验后下注</h2>
            <p class="mt-2 text-white/80">
                测试功能、了解赔付线，并在零风险下找到你的心头好。试玩模式非常适合新玩家学习 Pussy888 老虎机运作方式。
            </p>
        </div>
    </div>

    <!-- Safety / Trust -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">安全可靠 • 数千玩家信赖</h2>
            <div class="mt-4 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">持牌与监管</div>
                    <div class="text-sm text-white/70">严格遵循运营规范。</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">SSL 加密</div>
                    <div class="text-sm text-white/70">您的数据始终受到保护。</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">RNG 测试</div>
                    <div class="text-sm text-white/70">独立机构公平性检测。</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">响应式客服</div>
                    <div class="text-sm text-white/70">需要时随时为您服务。</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bonuses -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">别忘了领取您的老虎机奖金！</h2>
            <div class="mt-4 grid gap-3 md:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">欢迎奖金</div>
                    <div class="text-sm text-white/70">提升您的首次存款。</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">免费旋转</div>
                    <div class="text-sm text-white/70">适用于精选老虎机。</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">重载与返现</div>
                    <div class="text-sm text-white/70">每周额外回馈。</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">VIP 奖励</div>
                    <div class="text-sm text-white/70">忠实玩家专属礼遇。</div>
                </div>
            </div>
            <a class="mt-4 inline-flex rounded-md border border-white/15 px-4 py-2 text-sm hover:bg-white/5"
                href="#"
            >查看优惠</a>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="立即转动，赢取大奖！"
        primaryCtaText="下载 Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="网页畅玩"
        secondaryCtaLink="#"
    >
        数以千计的马来西亚玩家已在 Pussy888 老虎机中尽享激情——顶级画面、快速支付，以及适合各种风格的游戏。
        立即下载，开启您的真实奖励之旅！
    </x-partials.download>
</div>
