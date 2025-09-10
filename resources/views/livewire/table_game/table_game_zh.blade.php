{{-- Chinese (zh) --}}
<div class="bg-black text-white">
    <!-- Header -->
    <x-partials.heading title="桌面游戏" subtitle="Pussy888 • 值得信赖的在线赌场 • 马来西亚" />
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs ring-1 ring-white/15">
                🇲🇾 <span>马来西亚玩家</span>
            </div>
            <h1 class="mt-3 text-3xl/tight font-bold sm:text-4xl/tight">
                Pussy888 桌面游戏——经典赌场与现代体验的融合
            </h1>
            <p class="mt-4 max-w-3xl text-white/80">
                如果你喜欢策略、技巧和经典赌场玩法的刺激，Pussy888 的桌面游戏专区就是你的终极目的地。
                无论是在轮盘中试试运气，还是在二十一点中用聪明的出牌取胜，我们的游戏集合都能带来传统赌场的真实氛围——尽在你的设备上。
            </p>
            <p class="mt-3 max-w-3xl text-white/80">
                备受马来西亚玩家信赖，Pussy888 提供安全、快速且回报丰富的环境，让你随时随地畅玩最爱的桌面游戏。
            </p>
        </div>
    </div>

    <!-- What Are Table Games -->
    <div class="mx-auto max-w-7xl px-4 pb-8">
        <div class="grid items-center gap-6 lg:grid-cols-[1.15fr_.85fr]">
            <div>
                <div class="text-xl font-semibold">什么是桌面游戏？</div>
                <p class="mt-3 text-white/80">
                    桌面游戏是指在虚拟牌桌上进行的传统赌场游戏，通常涉及纸牌、骰子或转盘。
                    与老虎机不同，这些游戏更强调玩家的决策与策略，为玩法增添了深度与可控性。
                </p>
                <p class="mt-3 text-white/80">
                    在 Pussy888 马来西亚，你能体验到这些经典桌游的数字版本，拥有精致画面、顺滑操控与公平结果。
                </p>
            </div>
            <div class="overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/9]">
                    <img
                        class="h-full w-full object-cover"
                        src="{{ asset('assets/frontend/images/table-games/hero-table.webp') }}"
                        alt="Pussy888 桌面游戏"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-4">
                        <div class="text-lg font-semibold">策略 • 技巧 • 真实赌场氛围</div>
                        <div class="text-sm text-white/70">二十一点 • 轮盘 • 百家乐 • 骰宝 • 龙虎斗</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Table Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="mb-4 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Pussy888 热门桌面游戏</div>
                <div class="text-sm text-white/70">选择你的最爱，立即加入。</div>
            </div>
            <a class="hidden rounded-md border border-white/15 px-4 py-2 text-sm hover:bg-white/5 sm:inline-flex"
                href="#"
            >查看所有牌桌</a>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Blackjack -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/9]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/table-games/blackjack.webp') }}"
                        alt="二十一点"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-4">
                        <div class="font-semibold">二十一点</div>
                        <div class="text-xs text-white/70">巧妙拿牌，力争不爆牌地达到 21 点。</div>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-sm text-white/80">
                        又称 21 点，这是一款你与庄家对决的经典纸牌游戏。通过聪明的下注与决策来获取优势。
                    </p>
                    <div class="mt-4 flex items-center gap-2">
                        <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                            href="#"
                        >立即游戏</a>
                        <a class="text-sm text-white/70 hover:text-white" href="#">玩法说明 →</a>
                    </div>
                </div>
            </div>

            <!-- Roulette -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/9]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/table-games/roulette.webp') }}"
                        alt="轮盘"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-4">
                        <div class="font-semibold">轮盘</div>
                        <div class="text-xs text-white/70">红/黑、单/双，或你的幸运数字。</div>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-sm text-white/80">
                        下好注，静待转盘停止。经久不衰的经典概率游戏。
                    </p>
                    <div class="mt-4 flex items-center gap-2">
                        <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                            href="#"
                        >立即游戏</a>
                        <a class="text-sm text-white/70 hover:text-white" href="#">投注指南 →</a>
                    </div>
                </div>
            </div>

            <!-- Baccarat -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/9]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/table-games/baccarat.webp') }}"
                        alt="百家乐"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-4">
                        <div class="font-semibold">百家乐</div>
                        <div class="text-xs text-white/70">下注闲家、庄家或和局。</div>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-sm text-white/80">
                        简单而优雅。曾经的高额玩家最爱——如今人人都能轻松上手。
                    </p>
                    <div class="mt-4 flex items-center gap-2">
                        <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                            href="#"
                        >立即游戏</a>
                        <a class="text-sm text-white/70 hover:text-white" href="#">规则与赔率 →</a>
                    </div>
                </div>
            </div>

            <!-- Sic Bo -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/9]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/table-games/sicbo.webp') }}"
                        alt="骰宝"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-4">
                        <div class="font-semibold">骰宝</div>
                        <div class="text-xs text-white/70">源自东方的骰子游戏，投注类型多样。</div>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-sm text-white/80">
                        预测三枚骰子的点数结果。选择丰富，每一次掷骰都令人心跳加速。
                    </p>
                    <div class="mt-4 flex items-center gap-2">
                        <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                            href="#"
                        >立即游戏</a>
                        <a class="text-sm text-white/70 hover:text-white" href="#">投注类型 →</a>
                    </div>
                </div>
            </div>

            <!-- Dragon Tiger -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <div class="relative aspect-[16/9]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/table-games/dragontiger.webp') }}"
                        alt="龙虎斗"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-4">
                        <div class="font-semibold">龙虎斗</div>
                        <div class="text-xs text-white/70">两张牌，选更大的一方。结果即刻揭晓。</div>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-sm text-white/80">
                        更为简洁的百家乐式对决。节奏飞快，肾上腺素飙升。
                    </p>
                    <div class="mt-4 flex items-center gap-2">
                        <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                            href="#"
                        >立即游戏</a>
                        <a class="text-sm text-white/70 hover:text-white" href="#">游戏概览 →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 sm:hidden">
            <a class="inline-flex rounded-md border border-white/15 px-4 py-2 text-sm hover:bg-white/5"
                href="#">查看所有牌桌</a>
        </div>
    </div>

    <!-- Why Play Table Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">为什么选择桌面游戏？</div>
            <div class="text-sm text-white/70">以技巧为核心，兼具经典乐趣。</div>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([['t' => '比老虎机更可控', 'd' => '应用真实策略，做出影响胜负的决定。'], ['t' => '节奏快、沉浸感强', 'd' => '回合迅速、互动性强，持续保持专注。'], ['t' => '部分游戏 RTP 更高', 'd' => '某些牌桌以较高玩家回报率著称。'], ['t' => '适合各个水平', 'd' => '无论新手还是老玩家，都能轻松享受。'], ['t' => '移动端与桌面端皆可', 'd' => '随时随地，顺滑而灵敏的体验。'], ['t' => '可反复游玩', 'd' => '每一手牌、每一转、每一次掷骰都是全新挑战。']] as $b)
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-lg font-semibold">{{ $b['t'] }}</div>
                    <div class="mt-1 text-sm text-white/70">{{ $b['d'] }}</div>
                </div>
            @endforeach
        </div>
        <p class="mt-6 max-w-3xl text-white/80">
            无论是在二十一点中用智慧击败庄家，还是在轮盘上相信直觉，桌面游戏都能带来独特体验，让玩家一次次回归。
        </p>
    </div>

    <!-- Play on Any Device -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="grid items-center gap-6 lg:grid-cols-[.9fr_1.1fr]">
            <div class="overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/table-games/devices.webp') }}"
                    alt="任意设备畅玩"
                >
            </div>
            <div>
                <div class="text-2xl font-bold">任意设备畅玩</div>
                <p class="mt-3 text-white/80">
                    所有 Pussy888 桌面游戏均已针对手机与桌面设备优化。你可在 Android 或 iOS 上使用
                    Pussy888 移动应用，或直接通过浏览器游玩。
                </p>
                <div class="mt-4 grid gap-3 sm:grid-cols-2">
                    <div class="rounded-lg border border-white/10 bg-white/[0.03] p-3">
                        <div class="text-sm font-semibold">易用界面</div>
                        <div class="mt-1 text-xs text-white/70">为小屏幕而生，毫不妥协。</div>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-white/[0.03] p-3">
                        <div class="text-sm font-semibold">触控友好</div>
                        <div class="mt-1 text-xs text-white/70">流畅手势，便捷投注与导航。</div>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-white/[0.03] p-3">
                        <div class="text-sm font-semibold">顺滑性能</div>
                        <div class="mt-1 text-xs text-white/70">几乎零延迟，实时做决定。</div>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-white/[0.03] p-3">
                        <div class="text-sm font-semibold">一致体验</div>
                        <div class="mt-1 text-xs text-white/70">跨设备保持同样的出色玩法。</div>
                    </div>
                </div>
                <p class="mt-4 text-white/80">无论身在何处，完整赌场体验始终相伴。</p>
            </div>
        </div>
    </div>

    <!-- Safe, Fair & Certified -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-gradient-to-r from-emerald-500/15 to-cyan-500/10 p-6">
            <div class="text-2xl font-bold">安全、公平且经认证</div>
            <p class="mt-3 text-white/80">
                你的安全与公平性始终第一位。Pussy888 的每款桌面游戏均使用经认证的随机数发生器（RNG），确保结果不偏不倚。
                平台采用 SSL 加密，全面保护你的账号、数据与交易安全。
            </p>
            <div class="mt-4 grid gap-3 sm:grid-cols-3">
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-sm font-semibold">认证 RNG</div>
                    <div class="mt-1 text-xs text-white/70">独立测试，确保公平。</div>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-sm font-semibold">SSL 加密</div>
                    <div class="mt-1 text-xs text-white/70">银行级的数据保护。</div>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-sm font-semibold">账户安全</div>
                    <div class="mt-1 text-xs text-white/70">安全登录与放心交易。</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bonuses for Table Game Players -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">桌面玩家专属优惠</div>
            <div class="text-sm text-white/70">用好福利，扩大你的资金池。</div>
        </div>
        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="text-lg font-semibold">新手礼包</div>
                <div class="mt-1 text-sm text-white/70">新玩家可申领并用于桌面游戏的优惠。</div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="text-lg font-semibold">现金回扣</div>
                <div class="mt-1 text-sm text-white/70">符合条件的牌桌享每日/每周回扣。</div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="text-lg font-semibold">会员与 VIP</div>
                <div class="mt-1 text-sm text-white/70">累积积分，解锁高级礼遇。</div>
            </div>
        </div>
        <p class="mt-4 text-sm text-white/70">
            前往“优惠活动”页面，查看你喜爱游戏适用的奖励。
        </p>
    </div>

    <!-- Live Table Games Callout -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="grid items-center gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="text-2xl font-bold">真人桌面游戏——想要真实荷官？</div>
                <p class="mt-3 text-white/80">
                    更偏爱与真人互动？来体验我们的真人娱乐场吧！二十一点、百家乐与轮盘由专业荷官通过高清直播进行主持。
                </p>
                <div class="mt-5 flex flex-wrap gap-3">
                    <a class="rounded-md bg-purple-400 px-5 py-3 font-semibold text-black hover:bg-purple-300"
                        href="#"
                    >进入真人娱乐场</a>
                    <a class="rounded-md border border-white/15 px-5 py-3 hover:bg-white/5" href="#">了解更多</a>
                </div>
            </div>
            <div class="overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/table-games/live-dealer.webp') }}"
                    alt="真人荷官游戏"
                >
            </div>
        </div>
    </div>

    <x-partials.download
        title="立即开始畅玩！"
        primaryCtaText="下载应用"
        primaryCtaLink="#"
        secondaryCtaText="立即游戏"
        secondaryCtaLink="#"
    >
        没找到你的问题？欢迎随时联系 Pussy888 客服——我们随时准备为你服务。
        <div class="mt-3">
            立即下载 Pussy888，注册你的账户，自信开启你最爱的赌场游戏之旅！
        </div>
    </x-partials.download>
</div>
