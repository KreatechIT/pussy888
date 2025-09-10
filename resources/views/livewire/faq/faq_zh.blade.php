@push('title')
    常见问题
@endpush

<div class="min-h-screen bg-black text-white" x-data>
    <!-- Header -->
    <x-partials.heading title="常见问题" subtitle="Pussy888 • 值得信赖的线上赌场 • 马来西亚" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-8 space-y-3 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                欢迎来到 Pussy888 常见问题专区，在这里您可以快速找到有关我们平台、游戏、支付、优惠和更多问题的答案。
                如果您在这里找不到想要的答案，我们的客服团队全天候 24/7 随时为您服务。
            </div>
        </div>

        @php
            $sections = [
                [
                    'title' => '常规问题',
                    'items' => [
                        [
                            'q' => '什么是 Pussy888？',
                            'a' =>
                                'Pussy888 是一个值得信赖且安全的线上赌场平台，在马来西亚非常受欢迎，提供老虎机、真人荷官桌、累积大奖和桌面游戏，可通过手机和电脑访问。',
                        ],
                        [
                            'q' => 'Pussy888 合法且安全吗？',
                            'a' =>
                                '是的。Pussy888 使用经认证的游戏平台、强大的 SSL 加密，并遵循行业标准，确保安全、公平的游戏环境。',
                        ],
                    ],
                ],
                [
                    'title' => '下载与安装',
                    'items' => [
                        [
                            'q' => '如何在手机上下载 Pussy888？',
                            'a' => '<div><span class="font-semibold text-white">Android：</span> 从我们的官方网站下载 APK，启用来自未知来源的安装，然后安装。</div>
                                    <div class="mt-2"><span class="font-semibold text-white">iOS：</span> 使用 Safari 浏览器访问我们的网站，下载应用配置文件，并在设备设置中验证。</div>',
                        ],
                        [
                            'q' => '我可以不下载应用直接玩 Pussy888 吗？',
                            'a' => '可以，您可以通过手机浏览器直接进入网页版，无需下载。',
                        ],
                    ],
                ],
                [
                    'title' => '账户与登录',
                    'items' => [
                        [
                            'q' => '如何注册账户？',
                            'a' =>
                                '访问 Pussy888 网站或应用，点击“注册”，填写注册表单。通过电子邮件或短信验证后，即可立即开始游戏。',
                        ],
                        [
                            'q' => '我忘记了登录密码怎么办？',
                            'a' => '只需点击登录页面上的“忘记密码”链接，并按照提示安全重置密码。',
                        ],
                    ],
                ],
                [
                    'title' => '存款与取款',
                    'items' => [
                        [
                            'q' => '支持哪些存款方式？',
                            'a' =>
                                'Pussy888 支持本地银行转账、ATM 存款，以及 Touch ‘n Go、Boost、GrabPay 等主流电子钱包。',
                        ],
                        [
                            'q' => '取款需要多长时间？',
                            'a' => '取款通常会在 24 小时内处理，具体时间取决于您的验证状态和选择的支付方式。',
                        ],
                        [
                            'q' => '存款和取款有最低金额限制吗？',
                            'a' => '是的，最低存款额为 RM10，最低取款额为 RM50。',
                        ],
                    ],
                ],
                [
                    'title' => '奖金与优惠',
                    'items' => [
                        [
                            'q' => '作为新玩家我可以获得哪些奖金？',
                            'a' =>
                                'Pussy888 为新玩家提供丰厚的欢迎奖金，通常会按照一定比例匹配您的首次存款。请查看“优惠活动”页面以获取最新详情。',
                        ],
                        [
                            'q' => '如何领取我的奖金？',
                            'a' => '登录账户，进入“优惠活动”页面，选择您想要的奖金，并按照提示激活即可。',
                        ],
                        [
                            'q' => '什么是流水要求？',
                            'a' => '流水要求指您需要将奖金金额投注多少次后才能提款。请务必查看奖金条款以了解具体详情。',
                        ],
                    ],
                ],
                [
                    'title' => '游戏信息',
                    'items' => [
                        [
                            'q' => 'Pussy888 提供哪些类型的游戏？',
                            'a' =>
                                'Pussy888 提供多种赌场游戏，包括老虎机、真人荷官游戏、桌面游戏（如二十一点、轮盘、百家乐）以及累积大奖老虎机。',
                        ],
                        [
                            'q' => '游戏公平且随机吗？',
                            'a' => '是的，所有 Pussy888 游戏都采用经过认证的随机数生成器 (RNG)，保证公平公正的结果。',
                        ],
                    ],
                ],
                [
                    'title' => '客户支持',
                    'items' => [
                        [
                            'q' => '如何联系 Pussy888 客户支持？',
                            'a' =>
                                '我们的客服团队全年无休 24/7 提供服务，您可以通过在线聊天、电子邮件 (<a href="mailto:support@pussy888.com" class="text-white underline">support@pussy888.com</a>) 或电话联系我们。',
                        ],
                    ],
                ],
                [
                    'title' => '安全与隐私',
                    'items' => [
                        [
                            'q' => '我的个人信息在 Pussy888 是否安全？',
                            'a' => '绝对安全。Pussy888 使用先进的 SSL 加密技术，确保您的个人数据和交易始终受到保护。',
                        ],
                    ],
                ],
                [
                    'title' => '负责任博彩',
                    'items' => [
                        [
                            'q' => '如何在 Pussy888 上负责任地娱乐？',
                            'a' =>
                                '设定预算、在自己承受范围内游戏、定期休息，并使用存款限额或自我排除工具，以保持健康的游戏习惯。',
                        ],
                        [
                            'q' => '如果我有赌博问题该怎么办？',
                            'a' =>
                                '如果您遇到问题，请联系客户支持团队寻求帮助，或拨打本地机构 MyGAMCARE (1-800-88-2200) 获取支持。',
                        ],
                    ],
                ],
            ];
        @endphp

        <div wire:ignore>
            @php $q = 1; @endphp

            @foreach ($sections as $section)
                <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="mb-4 text-2xl font-bold">{{ $section['title'] }}</div>

                    @foreach ($section['items'] as $item)
                        <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02] last:mb-0"
                            x-data="{ open: false }"
                        >
                            <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                                    Q{{ $q }}
                                </div>
                                <div class="flex-1 text-left text-lg font-semibold">{{ $item['q'] }}</div>
                                <svg
                                    class="size-5 transition"
                                    :class="open ? 'rotate-180' : ''"
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
                                class="px-4 pb-4 text-sm text-white/80 sm:text-base"
                                x-show="open"
                                x-transition
                            >
                                {!! $item['a'] !!}
                            </div>
                        </div>
                        @php $q++; @endphp
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <!-- Join the Community -->
    <x-partials.download
        title="立即开始游戏！"
        primaryCtaText="下载应用"
        primaryCtaLink="#"
        secondaryCtaText="马上玩"
        secondaryCtaLink="#"
    >
        在这里没有找到您的问题？随时联系 Pussy888 客户支持 — 我们全天候为您提供帮助。
        <div class="mt-3">
            立即下载 Pussy888，注册您的账户，自信畅玩您最喜欢的赌场游戏！
        </div>
    </x-partials.download>
</div>
