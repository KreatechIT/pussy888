@push('title')
    隐私政策
@endpush

<div class="min-h-screen bg-black text-white">
    <!-- Page Header -->
    <x-partials.heading title="隐私政策" subtitle="Pussy888 • 值得信赖的在线赌场 • 马来西亚" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <!-- Intro -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                在 Pussy888 马来西亚，我们致力于保护您的隐私，并确保您的个人信息以安全和负责任的方式处理。本隐私政策解释了当您通过我们的网站或移动应用访问平台时，我们如何收集、使用、存储和保护您的数据。
                <br><br>
                使用我们的服务即表示您同意本政策中列出的条款。
            </div>
        </div>

        <div class="space-y-6">
            <!-- 1. 我们收集的信息 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        1</div>
                    <div class="text-2xl font-semibold">我们收集的信息</div>
                </div>

                <div class="mt-4 text-white/80">我们收集以下类型的个人信息：</div>

                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <!-- 账户信息 -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">a. 账户信息</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['姓名、用户名、密码', '电子邮箱和电话号码', '出生日期', '首选语言和货币'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="bg紫色-400 mt-1 size-2 rounded-full"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 交易信息 -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">b. 交易信息</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['存款和取款记录', '支付方式详情（银行/电子钱包信息）', '奖金和促销使用情况'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="bg粉色-400 mt-1 size-2 rounded-full"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 技术数据 -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">c. 技术数据</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['使用的设备类型和浏览器', 'IP 地址和位置', '操作系统和移动设备 ID', '游戏活动日志和会话时长'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="bg紫色-400 mt-1 size-2 rounded-full"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 通信记录 -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">d. 通信记录</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['与客服的消息记录', '反馈和投诉', '营销邮件偏好'] as $i)
                                <div class="bg白/[0.04] flex items-center gap-3 rounded-lg border border-white/10 p-3">
                                    <div class="bg粉色-400 mt-1 size-2 rounded-full"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. 我们如何使用您的信息 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        2</div>
                    <div class="text-2xl font-semibold">我们如何使用您的信息</div>
                </div>
                <div class="mt-4 text-white/80">您的信息将用于：</div>
                <div class="mt-2 space-y-2">
                    @foreach (['创建和管理您的玩家账户', '安全处理支付', '防止欺诈、身份盗用和非法活动', '定制您的游戏体验', '发送促销优惠（需您的同意）', '提升平台性能和可用性', '遵守法律和监管要求'] as $i)
                        <div class="border白/10 bg白/[0.04] flex items-center gap-3 rounded-lg border p-3">
                            <div class="bg紫色-400 mt-1 size-2 rounded-full"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">我们不会将您的个人数据出售或出租给第三方。</div>
            </div>

            <!-- 3. Cookies 与跟踪 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        3</div>
                    <div class="text-2xl font-semibold">Cookies 与跟踪</div>
                </div>
                <div class="mt-4 text-white/80">
                    我们使用 cookies 和类似技术来提升您的使用体验：
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['记住登录凭证', '跟踪使用情况和性能', '提供个性化内容和优惠'] as $i)
                        <div class="border白/10 bg白/[0.04] flex items-center gap-3 rounded-lg border p-3">
                            <div class="bg粉色-400 mt-1 size-2 rounded-full"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    您可以在浏览器设置中管理或禁用 cookies，但这可能影响部分平台功能。
                </div>
            </div>

            <!-- 4. 数据共享与披露 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        4</div>
                    <div class="text-2xl font-semibold">数据共享与披露</div>
                </div>
                <div class="text白/80 mt-4">
                    我们可能仅在必要时将您的数据与可信的第三方共享，用于：
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['处理支付（例如支付网关）', '防止欺诈并验证身份', '遵守法律请求（例如监管机构或执法部门）'] as $i)
                        <div class="border白/10 bg白/[0.04] flex items-center gap-3 rounded-lg border p-3">
                            <div class="bg紫色-400 mt-1 size-2 rounded-full"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="text白/80 mt-3">
                    所有第三方都在合同中被要求以安全和保密的方式处理您的数据。
                </div>
            </div>

            <!-- 5. 数据安全 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        5</div>
                    <div class="text-2xl font-semibold">数据安全</div>
                </div>
                <div class="text白/80 mt-4">
                    我们采取严格的安全措施来保护您的数据：
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['所有交易均使用 SSL 加密', '防火墙和入侵检测系统', '定期平台审计', '限制访问个人数据'] as $i)
                        <div class="border白/10 bg白/[0.04] flex items-center gap-3 rounded-lg border p-3">
                            <div class="bg粉色-400 mt-1 size-2 rounded-full"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="text白/80 mt-3">
                    尽管我们尽力保护您的数据，但没有任何系统是 100% 安全的。我们建议您使用强密码并启用双重验证（如果可用）。
                </div>
            </div>

            <!-- 6. 数据保留 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 from紫色-500 to粉色-500 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r text-lg font-bold text-black">
                        6</div>
                    <div class="text-2xl font-semibold">数据保留</div>
                </div>
                <div class="text白/80 mt-4">
                    我们仅在必要的时间内保留您的个人数据，用于：
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['履行法律和监管要求', '解决争议', '维护准确的交易记录'] as $i)
                        <div class="border白/10 bg白/[0.04] flex items-center gap-3 rounded-lg border p-3">
                            <div class="bg紫色-400 mt-1 size-2 rounded-full"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="text白/80 mt-3">
                    保留期结束后，您的数据将被安全删除或匿名化。
                </div>
            </div>

            <!-- 7. 您的权利 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 from紫色-500 to粉色-500 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r text-lg font-bold text-black">
                        7</div>
                    <div class="text-2xl font-semibold">您的权利</div>
                </div>
                <div class="text白/80 mt-4">
                    您有权：
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['访问并查看我们持有的您的个人数据', '更正不准确或过时的信息', '请求删除您的账户及相关数据（受法律限制）', '随时撤回对营销通信的同意'] as $i)
                        <div class="border白/10 bg白/[0.04] flex items-center gap-3 rounded-lg border p-3">
                            <div class="bg粉色-400 mt-1 size-2 rounded-full"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="text白/80 mt-3">
                    要行使这些权利，请联系我们的支持团队。
                </div>
            </div>

            <!-- 8. 营销通信 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 from紫色-500 to粉色-500 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r text-lg font-bold text-black">
                        8</div>
                    <div class="text-2xl font-semibold">营销通信</div>
                </div>
                <div class="text白/80 mt-4">
                    如果您选择接收促销信息，我们可能会向您发送：
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['欢迎奖金', '每周优惠和现金返还促销', 'VIP 奖励和独家锦标赛'] as $i)
                        <div class="border白/10 bg白/[0.04] flex items-center gap-3 rounded-lg border p-3">
                            <div class="bg紫色-400 mt-1 size-2 rounded-full"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="text白/80 mt-3">
                    您可以随时通过点击“取消订阅”链接或联系支持来取消订阅营销邮件。
                </div>
            </div>

            <!-- 9. 儿童隐私 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 from紫色-500 to粉色-500 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r text-lg font-bold text-black">
                        9</div>
                    <div class="text-2xl font-semibold">儿童隐私</div>
                </div>
                <div class="text白/80 mt-4">
                    Pussy888 马来西亚不会有意收集或允许 18 岁以下人员注册。如果我们发现未成年人向我们提供了个人信息，我们将立即删除并终止账户。
                </div>
            </div>

            <!-- 10. 政策变更 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 from紫色-500 to粉色-500 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r text-lg font-bold text-black">
                        10</div>
                    <div class="text-2xl font-semibold">政策变更</div>
                </div>
                <div class="text白/80 mt-4">
                    我们保留随时更新本隐私政策的权利。任何更改将发布在本页面，并附上更新日期。继续使用我们的平台即表示您接受新的政策。
                </div>
                <div class="mt-2 text-sm text-white/60">最后更新日期：[请填写日期]</div>
            </div>

            <!-- 11. 联系我们 -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="items中心 from紫色-500 to粉色-500 flex h-10 w-10 justify-center rounded-full bg-gradient-to-r text-lg font-bold text-black">
                        11</div>
                    <div class="text-2xl font-semibold">联系我们</div>
                </div>

                <div class="text白/80 mt-4">
                    如果您对本隐私政策或我们如何处理您的数据有任何疑问或担忧，请联系我们：
                </div>

                <div class="mt-6 grid gap-4 sm:grid-cols-3">
                    <!-- 在线客服 -->
                    <div class="flex flex-col items-start rounded-lg border border-white/10 bg-white/[0.02] p-4">
                        <div class="flex items-center gap-2">
                            <svg
                                class="h-5 w-5 text-purple-400"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.83L3 20l1.16-3.51A7.96 7.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                />
                            </svg>
                            <div class="font-semibold">在线客服</div>
                        </div>
                        <div class="mt-2 text-sm text-white/70">全年无休 24/7</div>
                    </div>

                    <!-- 邮箱 -->
                    <div class="flex flex-col items-start rounded-lg border border-white/10 bg-white/[0.02] p-4">
                        <div class="flex items-center gap-2">
                            <svg
                                class="h-5 w-5 text-purple-400"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16 12H8m0 0l4-4m-4 4l4 4m8-8v8a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h12a2 2 0 012 2z"
                                />
                            </svg>
                            <div class="font-semibold">邮箱</div>
                        </div>
                        <div class="mt-2 text-sm text-white/70">privacy@pussy888malaysia.com</div>
                    </div>

                    <!-- 电话 -->
                    <div class="flex flex-col items-start rounded-lg border border-white/10 bg-white/[0.02] p-4">
                        <div class="flex items-center gap-2">
                            <svg
                                class="h-5 w-5 text-purple-400"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h2.28a2 2 0 011.97 1.56l.7 3.1a2 2 0 01-.57 1.94l-1.2 1.2a16 16 0 006.58 6.58l1.2-1.2a2 2 0 011.94-.57l3.1.7A2 2 0 0121 18.72V21a2 2 0 01-2 2c-9.39 0-17-7.61-17-17z"
                                />
                            </svg>
                            <div class="font-semibold">电话</div>
                        </div>
                        <div class="mt-2 text-sm text-white/70">可通过客服支持渠道联系</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
