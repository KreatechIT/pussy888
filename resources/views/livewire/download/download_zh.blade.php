<div class="bg-black text-white" x-data>
    <!-- Header -->
    <x-partials.heading title="下载" subtitle="Pussy888 • 值得信赖的在线赌场 • 马来西亚" />
    <!-- H1 / Hero -->
    <div class="relative">
        <div class="mx-auto max-w-7xl px-4 py-10">
            <div class="grid items-center gap-6 lg:grid-cols-[1.2fr_.8fr]">
                <div>
                    <h1 class="text-3xl/tight font-bold sm:text-4xl/tight">
                        下载 Pussy888 – 随时随地在手机或网页畅玩
                    </h1>
                    <p class="mt-4 text-white/80">
                        想以快速安全的方式畅享马来西亚最受欢迎的在线赌场游戏吗？
                        Pussy888 手机应用为您带来顺滑流畅的游戏体验，一切尽在指尖。
                        无论您使用 Android 或 iOS，还是偏好通过手机浏览器即开即玩，我们都能满足您。
                    </p>
                    <p class="mt-3 text-white/80">
                        立即下载 Pussy888 官方应用，畅玩刺激老虎机、真人荷官桌台、累积奖池等更多内容——
                        全面为手机体验而优化。
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <x-partials.button href="#">Android APK</x-partials.button>
                        <x-partials.button href="#">iOS 安装</x-partials.button>
                        <x-partials.button type="outline" href="#">网页版游玩</x-partials.button>
                    </div>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="font-semibold">亮点</div>
                    <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                        <li>完整访问所有 Pussy888 赌场游戏</li>
                        <li>流畅且高响应表现</li>
                        <li>促销推送通知</li>
                        <li>更快的登录与加载速度</li>
                        <li>强化的移动体验（Android 与 iOS）</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-t border-white/10"></div>
    </div>

    <!-- Why Download (cards) -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">为什么要下载 Pussy888 应用？</div>
            <div class="text-sm text-white/70">以速度、安全与便捷为核心，为您提供最佳的移动优先体验。</div>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (['完整访问所有 Pussy888 赌场游戏', '在所有设备上都拥有流畅且高响应的表现', '接收促销与更新的推送通知', '更快登录并提升游戏加载速度', '为 Android 与 iOS 用户强化的移动体验'] as $point)
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-sm">{{ $point }}</div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Android APK -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="mb-4 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">下载 Pussy888（Android APK）</div>
                <div class="text-sm text-white/70">几步即可完成 APK 安装。</div>
            </div>
            <div class="hidden gap-3 sm:flex">
                <x-partials.button href="#">下载 Android 版</x-partials.button>
                <x-partials.button type="outline" href="#">镜像链接</x-partials.button>
            </div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="mb-4 flex gap-3 sm:hidden">
                    <a class="flex-1 rounded-md bg-purple-400 px-4 py-2 text-center text-sm font-semibold text-black hover:bg-purple-300"
                        href="#"
                    >下载 Android 版</a>
                    <a class="flex-1 rounded-md border border-white/15 px-4 py-2 text-center text-sm hover:bg-white/5"
                        href="#"
                    >镜像链接</a>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.03]" x-data="{ open: true }">
                    <div class="flex items-center justify-between px-4 py-3">
                        <div class="font-semibold">下载与安装步骤</div>
                        <button class="inline-flex items-center gap-1 text-sm text-white/70 hover:text-white"
                            @click="open=!open"
                        >
                            <span x-text="open ? '隐藏' : '显示'"></span>
                            <svg
                                class="size-4 transition"
                                :class="open && 'rotate-180'"
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
                    </div>
                    <div x-show="open" x-collapse>
                        <div class="space-y-3 border-t border-white/10 px-4 py-4 text-sm">
                            <div class="rounded-lg bg-white/[0.02] p-3">1) 访问 Pussy888 马来西亚官方网站或可信合作伙伴链接。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">2) 点击“下载 Android 版”开始下载 APK 文件。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">3) 前往 Settings &gt; Security，启用“Install from
                                Unknown Sources”。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">4) 打开已下载的 APK，按屏幕提示完成安装。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">5) 安装完成后，打开应用并登录或注册开始游戏。</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 rounded-xl border border-purple-400/30 bg-purple-400/10 p-4 text-sm text-purple-200">
                    <span class="font-semibold">注意：</span>务必从经过验证的来源下载 Pussy888 APK，以避免假冒或恶意应用。
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">快速提示（Android）</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>若 APK 无法安装，请确认已启用“Unknown Sources”。</li>
                    <li>若文件损坏，请清理浏览器缓存后重试。</li>
                    <li>保留至少 500MB 可用空间以确保更新顺畅。</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- iOS Install -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">在 iOS 设备上安装 Pussy888</div>
            <div class="text-sm text-white/70">通过配置描述文件支持 iPhone 与 iPad。</div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="flex flex-wrap gap-3">
                    <x-partials.button href="#">下载 iOS 版</x-partials.button>
                    <x-partials.button type="outline" href="#">备用 iOS 链接</x-partials.button>
                </div>

                <div class="mt-6 rounded-xl border border-white/10 bg-white/[0.03]" x-data="{ open: true }">
                    <div class="flex items-center justify-between px-4 py-3">
                        <div class="font-semibold">安装步骤</div>
                        <button class="inline-flex items-center gap-1 text-sm text-white/70 hover:text-white"
                            @click="open=!open"
                        >
                            <span x-text="open ? '隐藏' : '显示'"></span>
                            <svg
                                class="size-4 transition"
                                :class="open && 'rotate-180'"
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
                    </div>
                    <div x-show="open" x-collapse>
                        <div class="space-y-3 border-t border-white/10 px-4 py-4 text-sm">
                            <div class="rounded-lg bg-white/[0.02] p-3">1) 在 iPhone 或 iPad 上打开 Safari。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">2) 进入 Pussy888 官方下载页面。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">3) 点击“下载 iOS 版”并允许安装配置描述文件。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">4) 前往 Settings &gt; General &gt; Device
                                Management。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">5) 找到 Pussy888 描述文件并选择“Trust”以验证应用。</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">6) 返回主屏幕并启动应用。</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 rounded-xl border border-purple-400/30 bg-purple-400/10 p-4 text-sm text-purple-200">
                    <span class="font-semibold">安全提示：</span>请保持 iOS 为最新版本，并仅信任官方配置描述文件，以避免安装错误。
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">快速提示（iOS）</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>若未看到配置文件，请使用 Safari（非其他浏览器）重新下载。</li>
                    <li>完成“Trust”后，如无法启动，请强制退出并重新打开应用。</li>
                    <li>确保存储空间充足，以便顺畅更新。</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Mobile Web -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">在手机网页上玩 Pussy888 – 无需下载</div>
            <div class="text-sm text-white/70">通过手机浏览器即可即时访问。</div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="flex flex-wrap gap-3">
                    <x-partials.button href="#">打开手机网页版</x-partials.button>
                    <x-partials.button type="outline" href="#">创建账户</x-partials.button>
                </div>

                <div class="mt-6 rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="font-semibold">如何在手机网页上游玩</div>
                    <div class="mt-3 space-y-3 text-sm">
                        <div class="rounded-lg bg-white/[0.02] p-3">1) 打开常用浏览器（Safari、Chrome 等）。</div>
                        <div class="rounded-lg bg-white/[0.02] p-3">2) 访问 Pussy888 官方网站。</div>
                        <div class="rounded-lg bg-white/[0.02] p-3">3) 登录账户或注册新账户。</div>
                        <div class="rounded-lg bg-white/[0.02] p-3">4) 即开即玩——无需安装。</div>
                    </div>
                </div>

                <div class="mt-4 text-sm text-white/80">
                    手机网页版针对顺畅导航、快速游戏以及对所有游戏与促销的完整访问进行了优化，非常适合快速进入或在共享设备上使用。
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">为什么选择手机网页？</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>无需占用存储空间。</li>
                    <li>适用于任何现代手机浏览器。</li>
                    <li>当应用商店受限时可即时访问。</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Security -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="text-2xl font-bold">安全可靠的移动端游戏</div>
        <p class="mt-3 max-w-3xl text-white/80">
            Pussy888 的所有移动端版本——APK、iOS 与网页——均采用先进的 SSL 加密来保护您的数据与交易。
            我们确保每一款游戏在所有设备上都能顺畅、安全且公平地运行。
        </p>
    </div>

    <!-- Troubleshooting -->
    <div class="mx-auto max-w-7xl px-4 pb-12">
        <div class="grid gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">故障排查提示</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>若 APK 无法安装，请确认已启用“Unknown Sources”。</li>
                    <li>iOS 安装问题请确认描述文件已被信任。</li>
                    <li>下载或游戏过程中请保持稳定网络连接。</li>
                </ul>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">需要帮助？</div>
                <p class="mt-3 text-sm text-white/80">
                    如需下载、安装或登录方面的协助，请联系 Pussy888 客服。
                </p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <x-partials.button href="#">在线客服</x-partials.button>
                    <x-partials.button type="outline" href="#">WhatsApp 支持</x-partials.button>
                </div>
            </div>
        </div>
    </div>
    <x-partials.download
        title="立即开始游戏！"
        primaryCtaText="Android APK"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="iOS 安装"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        选择最适合您的方式：下载 Android APK、安装 iOS 应用，或直接通过手机浏览器即时畅玩。
        无论您选择哪一种，Pussy888 都将带来顶级的在线赌场体验。
        <br><br>
        <span>立即下载 Pussy888，随时随地赢取真实奖励！</span>
    </x-partials.download>
</div>
