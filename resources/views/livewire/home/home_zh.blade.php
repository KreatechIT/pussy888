@push('title')
    Pussy888 马来西亚：下载、游玩老虎机与真人赌场 | 值得信赖的在线赌场
@endpush

@push('meta_title')
    Pussy888 马来西亚 | 下载并游玩值得信赖的在线赌场
@endpush

@push('meta_description')
    立即下载并游玩！在马来西亚值得信赖的平台畅享顶级老虎机与真人赌场游戏。现在就找到你最爱的游戏！
@endpush

@push('meta_keywords')
    Pussy888, Pussy888 马来西亚, 下载 Pussy888, 马来西亚在线赌场, 马来西亚真人赌场, 马来西亚老虎机游戏
@endpush
<div>
    <!-- Hero -->
    <div class="relative">
        <img
            class="h-[520px] w-full object-cover opacity-30"
            src="{{ asset('assets/frontend/images/hero.png') }}"
            alt="Pussy888 Malaysia"
        >
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black"></div>

        <div class="absolute inset-0">
            <div class="mx-auto flex h-full max-w-7xl items-center px-4">
                <div class="max-w-2xl">
                    <div
                        class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs ring-1 ring-white/15">
                        <span class="size-2 rounded-full bg-emerald-400"></span>
                        马来西亚值得信赖的在线赌场
                    </div>
                    <div class="mt-4 text-4xl/tight font-bold sm:text-5xl/tight">
                        Pussy888 马来西亚：下载、游玩老虎机 &amp; 真人赌场
                    </div>
                    <p class="mt-3 text-white/80">
                        数百款老虎机、高清真人荷官、流畅的移动端应用与安全支付——为马来西亚玩家而设。
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <x-partials.button href="#">下载应用</x-partials.button>
                        <x-partials.button type="outline" href="#">探索</x-partials.button>
                        {{-- <a href="#"
                            class="rounded-md bg-amber-400 px-5 py-3 font-semibold text-black hover:bg-amber-300">Download
                            App</a>
                        <a href="#games" class="rounded-md border border-white/15 px-5 py-3 hover:bg-white/5">Explore
                            Games</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro / Trust -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="grid items-stretch gap-6 md:grid-cols-3">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5 md:col-span-2">
                <div class="text-xl font-semibold">为什么选择 Pussy888</div>
                <p class="mt-2 text-white/75">
                    顶尖且安全的平台，拥有海量游戏库、流畅的移动端体验与加密支付，为安全的真钱游戏护航。
                    针对 Android 与 iOS 优化，支持 APK / iOS 配置档安装，以及即开即玩的浏览器模式。
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-xl font-semibold">安全概览</div>
                <ul class="mt-3 space-y-2 text-sm text-white/80">
                    <li>• SSL 加密连接</li>
                    <li>• 安全支付网关</li>
                    <li>• RNG 认证游戏</li>
                    <li>• 账户找回与 2FA 双重验证</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- 2. Get Started & Install (Tabs) -->
    <div
        class="mx-auto max-w-7xl px-4 py-10"
        id="download"
        x-data="{ tab: 'android' }"
    >
        <div class="mb-6 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">开始上手并安装应用</div>
                <div class="text-sm text-white/70">Android（APK）、iOS 配置档，或直接在浏览器即时游玩。</div>
            </div>
            <div class="hidden gap-2 sm:flex">
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="tab='android'"
                    :class="tab === 'android' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >Android</button>
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="tab='ios'"
                    :class="tab === 'ios' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >iOS</button>
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="tab='web'"
                    :class="tab === 'web' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >移动端网页</button>
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                    alt=""
                >
            </div>

            <div class="space-y-4">
                <!-- Android -->
                <div x-show="tab==='android'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">Android APK 安装</div>
                        <ol class="mt-2 list-decimal space-y-1 pl-5 text-sm text-white/80">
                            <li>访问官方网站 / 可信合作方并下载 <span class="font-semibold">Pussy888 APK</span>。</li>
                            <li>在设置中启用 <em>允许来自未知来源的安装</em>。</li>
                            <li>打开 APK 并点击 <em>安装</em>。</li>
                            <li>启动应用以注册或登录。</li>
                        </ol>
                    </div>
                </div>

                <!-- iOS -->
                <div x-show="tab==='ios'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">iOS 配置档安装</div>
                        <ol class="mt-2 list-decimal space-y-1 pl-5 text-sm text-white/80">
                            <li>打开 Safari 并访问官网。</li>
                            <li>按照提示添加 iOS 应用配置档。</li>
                            <li>前往 <em>设置 &gt; 通用 &gt; 描述文件与设备管理</em> 并 <em>信任</em> 该配置档。</li>
                            <li>启动应用并登录。</li>
                        </ol>
                    </div>
                </div>

                <!-- Web -->
                <div x-show="tab==='web'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">即时游玩（移动端网页）</div>
                        <p class="mt-2 text-sm text-white/80">
                            使用你的移动端浏览器——无需安装。大多数游戏与功能均可即时使用。
                        </p>
                    </div>
                </div>

                <!-- Safety tips -->
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-lg font-semibold">避免下载假应用</div>
                    <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-white/80">
                        <li>仅从官方网站或已验证的合作方下载。</li>
                        <li>警惕第三方镜像站点；检查应用权限。</li>
                        <li>保持设备安全更新开启。</li>
                    </ul>
                </div>

                <div class="flex gap-3">
                    <x-partials.button href="#">下载 APK</x-partials.button>
                    <x-partials.button type="outline" href="#">获取 iOS 应用</x-partials.button>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Registration & Login (Steps) -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="register">
        <div class="mb-6">
            <div class="text-2xl font-bold">注册与登录</div>
            <div class="text-sm text-white/70">几分钟内创建你的账户，然后开启额外的安全保护。</div>
        </div>
        <div class="grid gap-4 md:grid-cols-4">
            @foreach ([['t' => '注册', 'd' => '点击注册并填写用户名、密码、手机号、邮箱。'], ['t' => '验证', 'd' => '如有提示，请通过短信/邮箱完成验证。'], ['t' => '登录', 'd' => '输入你的登录信息。可选启用“记住我”。'], ['t' => '安全', 'd' => '若可用请开启 2FA，并设置强密码。']] as $s)
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-lg font-semibold">{{ $s['t'] }}</div>
                    <div class="mt-1 text-sm text-white/75">{{ $s['d'] }}</div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- 4. Game Library (Tabs + mini carousel) -->
    <div
        class="mx-auto max-w-7xl px-4 py-10"
        id="games"
        x-data="{
            cat: 'slots',
            slide: 0,
            items: [
                { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Dragon Treasure' },
                { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Golden Fist' },
                { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Safari Life' }
            ]
        }"
    >
        <div class="mb-6 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">浏览游戏库</div>
                <div class="text-sm text-white/70">老虎机、真人赌场，以及桌面/特色游戏。</div>
            </div>
            <div class="hidden gap-2 sm:flex">
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="cat='slots'"
                    :class="cat === 'slots' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >老虎机</button>
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="cat='live'"
                    :class="cat === 'live' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >真人赌场</button>
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="cat='table'"
                    :class="cat === 'table' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >桌面 &amp; 特色</button>
            </div>
        </div>

        <!-- Tabs content -->
        <div class="grid gap-6 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <!-- Simple slider (fixed height + stacked slides) -->
                <div class="relative overflow-hidden">
                    <!-- Lock viewport height -->
                    <div class="relative aspect-video">
                        <template x-for="(card, idx) in items" :key="idx">
                            <!-- Stack slides absolutely; fade between them -->
                            <div
                                class="absolute inset-0 transition-all duration-500"
                                x-cloak
                                x-show="slide === idx"
                                x-transition:enter="transform opacity-0 translate-x-full"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transform opacity-0 -translate-x-full"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-full"
                            >
                                <img
                                    class="h-full w-full object-cover"
                                    :src="card.img"
                                    :alt="card.t"
                                    loading="eager"
                                    fetchpriority="high"
                                >
                                <div
                                    class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                    <div class="text-lg font-semibold" x-text="card.t"></div>

                                    <!-- Slide meta per category -->
                                    <div
                                        class="text-xs text-white/70"
                                        x-cloak
                                        x-show="cat==='slots'"
                                    >
                                        特性：免费旋转 • 倍数 • 累积奖池
                                    </div>
                                    <div
                                        class="text-xs text-white/70"
                                        x-cloak
                                        x-show="cat==='live'"
                                    >
                                        高清串流 • 真人荷官 • 百家乐/轮盘/二十一点
                                    </div>
                                    <div
                                        class="text-xs text-white/70"
                                        x-cloak
                                        x-show="cat==='table'"
                                    >
                                        扑克 • 骰宝 • 以及更多
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Controls -->
                    <div class="pointer-events-none absolute inset-x-0 top-1/2 -translate-y-1/2 px-2">
                        <div class="pointer-events-auto flex items-center justify-between">
                            <button
                                class="cursor-pointer rounded-md bg-black/50 p-2 ring-1 ring-white/10 hover:bg-black/70"
                                aria-label="Prev"
                                @click="slide = (slide - 1 + items.length) % items.length"
                            >‹</button>
                            <button
                                class="cursor-pointer rounded-md bg-black/50 p-2 ring-1 ring-white/10 hover:bg-black/70"
                                aria-label="Next"
                                @click="slide = (slide + 1) % items.length"
                            >›</button>
                        </div>
                    </div>

                    <!-- Dots -->
                    <div class="absolute bottom-3 left-0 right-0 flex justify-center gap-2">
                        <template x-for="(dot, i) in items" :key="'d' + i">
                            <button
                                class="size-2 rounded-full"
                                @click="slide = i"
                                :class="slide === i ? 'bg-purple-400' : 'bg-white/40'"
                            ></button>
                        </template>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5"
                    x-cloak
                    x-show="cat==='slots'"
                    x-transition
                >
                    <div class="text-lg font-semibold">老虎机</div>
                    <p class="mt-2 text-sm text-white/80">
                        数百款主题老虎机，提供免费旋转、倍数、奖励回合与累积大奖。
                        试试人气之作 <em>Dragon Treasure</em>、<em>Golden Fist</em> 与 <em>Safari Life</em>。
                    </p>
                </div>

                <div
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5"
                    x-cloak
                    x-show="cat==='live'"
                    x-transition
                >
                    <div class="text-lg font-semibold">真人荷官</div>
                    <p class="mt-2 text-sm text-white/80">
                        百家乐、轮盘与二十一点的实时高清直播，带来互动聊天与专业荷官体验。
                    </p>
                </div>

                <div
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5"
                    x-cloak
                    x-show="cat==='table'"
                    x-transition
                >
                    <div class="text-lg font-semibold">桌面 &amp; 特色</div>
                    <p class="mt-2 text-sm text-white/80">
                        扑克、骰宝等更多节奏明快的游戏，适合短时游玩与经典策略。
                    </p>
                </div>

                <div class="flex gap-3">
                    <x-partials.button href="#">立即游玩</x-partials.button>
                    <x-partials.button type="outline" href="#">查看全部游戏</x-partials.button>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. Bonuses & Promotions -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="promos">
        <div class="mb-6 text-2xl font-bold">红利与优惠</div>
        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-amber-500/20 to-pink-500/10 p-5">
                <div class="text-lg font-semibold">欢迎红利</div>
                <p class="mt-1 text-sm text-white/80">新用户存款赠送。申领前请先查看投注规则。</p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">返现与再存</div>
                <p class="mt-1 text-sm text-white/80">每日回馈、再存优惠与季节性活动。</p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">VIP 计划</div>
                <p class="mt-1 text-sm text-white/80">更高限额、更快提款与专属锦标赛。</p>
            </div>
        </div>
    </div>

    <!-- 6. Payments -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="payments">
        <div class="mb-6 text-2xl font-bold">支付方式与提款</div>
        <div class="grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">本地与电子钱包友好</div>
                <p class="mt-2 text-sm text-white/80">
                    通过本地银行转账、Touch 'n Go、Boost、GrabPay 以及可信网关快速充值。
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">快速提款</div>
                <p class="mt-2 text-sm text-white/80">
                    透明的限额与验证流程——大多数提款在 24 小时内完成（依支付方式而定）。
                </p>
            </div>
        </div>
    </div>

    <!-- 7. Safety & Fairness (Accordion) -->
    @php
        $faqs = [
            [
                'q' => '加密与账户保护',
                'a' => '行业标准的 SSL、强密码和可选的双重验证 (2FA) 有助于保护您的账户和数据。',
            ],
            [
                'q' => 'RNG 认证与审计',
                'a' => '通过 RNG 认证的游戏确保公平结果；第三方审计进一步加强公正性。',
            ],
            [
                'q' => '责任博彩',
                'a' => '设置限制，适时休息，并使用支持资源以保持健康的游戏习惯。',
            ],
        ];
    @endphp
    <x-partials.accordion
        title="安全与公平"
        subtitle="快速解答，助您在 Pussy888 马来西亚顺利开始。"
        :items="$faqs"
        :open-index="null"
    />

    <!-- 8. Tips for New Players -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6 text-2xl font-bold">新手玩家提示</div>
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ([['t' => '先试试玩', 'd' => '先用免费试玩熟悉机制，再进行真钱投注。'], ['t' => '管理资金', 'd' => '设定预算并严格执行，负责任地游玩。'], ['t' => '了解规则', 'd' => '阅读赔率表与功能说明，做出更佳决策。'], ['t' => '聪明使用红利', 'd' => '查看条款与投注要求，最大化价值。'], ['t' => '适当休息', 'd' => '避免追逐亏损；保持健康节奏。'], ['t' => '重视安全', 'd' => '使用强密码并开启 2FA 保护账户。']] as $tip)
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <div class="text-lg font-semibold">{{ $tip['t'] }}</div>
                    <p class="mt-1 text-sm text-white/80">{{ $tip['d'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- 9. Support -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6 text-2xl font-bold">客户支持</div>
        <div class="grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">我们 24/7 在线</div>
                <p class="mt-2 text-sm text-white/80">
                    在线客服提供即时帮助，电子邮箱处理详细问题，电话适用于紧急情况。
                </p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <x-partials.button href="#">在线客服</x-partials.button>
                    <x-partials.button type="outline" href="#">邮件支持</x-partials.button>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                    alt=""
                >
            </div>
        </div>
    </div>

    <!-- 10. FAQs -->
    @php
        $faqs = [
            [
                'q' => '我如何安全获取应用程序？',
                'a' =>
                    '仅从官方网站或已验证的来源获取应用程序。Android 用户请下载 APK 并启用“允许安装未知来源应用”；iOS 用户请按照屏幕提示安装并信任应用配置。',
            ],
            [
                'q' => '平台是否兼容我的设备？',
                'a' => '是的。它支持 Android 和 iOS，您也可以通过移动浏览器直接玩，无需安装。',
            ],
            [
                'q' => '提款需要多久？',
                'a' => '通常在验证后 24 小时内完成，具体取决于您选择的支付方式。',
            ],
            [
                'q' => '有哪些奖金优惠？',
                'a' => '包括欢迎奖金、每日/每周促销，以及专属奖励的 VIP 计划。请务必查看投注条款。',
            ],
            [
                'q' => '平台是否公平和安全？',
                'a' => '是的。它使用经认证的 RNG 确保公平结果，并采用 SSL 加密保障数据安全。',
            ],
            [
                'q' => '如果我忘记登录信息怎么办？',
                'a' => '请在登录页面使用“忘记密码”选项，安全地重置您的凭证。',
            ],
        ];
    @endphp
    <x-partials.accordion
        title="常见问题 (FAQ)"
        subtitle="快速解答，助您在 Pussy888 马来西亚顺利开始。"
        :items="$faqs"
        :open-index="null"
    />

    <div class="text-white" id="cta">
        <div class="mx-auto max-w-7xl px-4 py-12">
            <div class="grid items-center gap-6 md:grid-cols-3">
                <div class="md:col-span-2">
                    <div class="text-2xl font-bold">Pussy888 马来西亚——安全游玩，赢取大奖</div>
                    <div class="mt-2 text-white/80">
                        享受庞大的游戏库（包括 pokies）、丰厚红利（如 100 次免费旋转优惠）、安全支付与高效客服支持——桌面与移动端皆可畅玩。
                    </div>
                    <div class="mt-4 flex flex-wrap gap-3">
                        <x-partials.button href="#">下载应用</x-partials.button>
                        <x-partials.button type="outline" href="#">创建账户</x-partials.button>
                        <x-partials.button type="outline" href="#">探索游戏</x-partials.button>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                    <!-- Interactive placeholder image (swap later) -->
                    <img
                        class="h-full w-full object-cover"
                        src="{{ asset('assets/frontend/images/qr-code.jpeg') }}"
                        alt="QR Code"
                    >
                </div>
            </div>
        </div>
    </div>
</div>
