@push('title')
    责任博彩
@endpush

<div class="min-h-screen bg-black text-white" x-data>
    <!-- Page Header -->
    <x-partials.heading title="责任博彩 – 与 Pussy888 一起安全、理性地游戏" subtitle="Pussy888 • 值得信赖的在线赌场 • 马来西亚" />

    <!-- Page Container -->
    <div class="mx-auto max-w-7xl space-y-8 px-4 py-10">
        <!-- 介绍 -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                在 Pussy888
                Malaysia，我们相信在线赌场游戏应当有趣、娱乐并且安全。无论是玩老虎机、桌面游戏还是真人赌场，都可能令人兴奋并收获奖励，但保持自我掌控同样重要。这就是我们在整个平台上全力支持并推广责任博彩实践的原因。
                <br><br>
                我们致力于通过提供工具、指南和支持，帮助您在每一步都保持健康的游戏体验。
            </div>
        </div>

        <!-- 什么是责任博彩？ -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">什么是责任博彩？</div>
            <div class="mt-2 text-white/80">
                责任博彩意味着对自己的游戏行为保持控制——了解自己的限度、理解相关风险，并将在线赌场游戏视为娱乐，而不是赚钱的方式。
                <br><br>
                以负责任的方式进行游戏，可确保赌博始终是一种令人愉悦的爱好，而非有害的习惯。
            </div>
        </div>

        <!-- 责任博彩提示（适用于所有玩家） -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">责任博彩提示（适用于所有玩家）</div>
            <div class="mt-2 text-white/80">遵循以下简单而有效的提示，在 Pussy888 获得安全且平衡的体验：</div>

            <div class="mt-4 grid gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">1. 开始前先设定预算</div>
                    <div class="mt-1 text-sm text-white/80">
                        决定您愿意花费的金额并严格遵守。只使用可承受损失的资金——切勿动用房租、账单或储蓄。
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">2. 使用时间限制</div>
                    <div class="mt-1 text-sm text-white/80">
                        通过设定每日或每周的游戏时长，避免长时间连续游戏。适时休息有助于保持专注与自控。
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">3. 不要追逐亏损</div>
                    <div class="mt-1 text-sm text-white/80">
                        输是游戏的一部分。试图把输掉的钱赢回来，往往会带来更大的亏损和情绪压力。
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">4. 将其视为娱乐，而非收入</div>
                    <div class="mt-1 text-sm text-white/80">
                        赌场游戏具有随机性。尽管可以赢得真钱，但结果是随机的，从不保证。
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">5. 定期休息</div>
                    <div class="mt-1 text-sm text-white/80">
                        持续游戏会导致疲劳并做出不佳决策。经常离开屏幕，给大脑充电。
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">6. 避免在压力或影响下游戏</div>
                    <div class="mt-1 text-sm text-white/80">
                        当感到悲伤、生气、疲惫或受到酒精/药物影响时，切勿赌博。此时判断力可能受损。
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">7. 了解游戏规则</div>
                    <div class="mt-1 text-sm text-white/80">
                        在真实投注前，阅读游戏指南并了解赔付、红利与功能的运作方式。
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">8. 使用责任博彩工具</div>
                    <div class="mt-1 text-sm text-white/80">
                        Pussy888 提供会话提醒、存款限额和自我排除等选项，以便更好地掌控。
                    </div>
                </div>
            </div>
        </div>

        <!-- 更安全的工具与功能 -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">更安全的工具与功能</div>
            <div class="mt-2 text-white/80">在 Pussy888，我们提供内置工具，帮助您管理游戏行为：</div>

            <div class="mt-4 space-y-2">
                @foreach (['存款限额 —— 设定每日、每周或每月的存款上限', '会话时间提醒 —— 在达到设定的游戏时长后收到提醒', '亏损限额 —— 限制单次会话中可承受的最大亏损', '冷静期（Cooling-Off）—— 如需休息，可暂时停用账户', '自我排除 —— 在一定期限内或永久禁止访问您的账户'] as $tool)
                    <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                        <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                        <div class="text-sm text-white/80">{{ $tool }}</div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4 rounded-xl border border-white/10 bg-white/[0.04] p-4 text-sm text-white/80">
                您可随时联系 Pussy888 客服团队，申请启用上述任一功能。
            </div>
        </div>

        <!-- 问题赌博的警示信号 -->
        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-pink-500/20 to-purple-500/10 p-6">
            <div class="text-xl font-semibold">问题赌博的警示信号</div>
            <div class="mt-2 text-white/80">
                识别赌博正在变成问题非常重要。常见迹象包括：
            </div>

            <div class="mt-4 grid gap-3 md:grid-cols-2">
                @foreach (['使用生活必需资金进行赌博', '对家人或朋友隐瞒赌博行为', '游戏后感到焦虑或内疚', '需要更大的投注额才能获得相同兴奋感', '即使已经亏损也无法停止', '为赌博而缺勤或忽视责任'] as $sign)
                    <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                        <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                        <div class="text-sm">{{ $sign }}</div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4 rounded-xl bg-white/10 p-4 text-sm">
                若以上任意一条适用于您，请考虑寻求帮助。
            </div>
        </div>

        <!-- 我们随时为您提供支持 -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">我们随时为您提供支持</div>
            <div class="mt-2 text-white/80">
                在 Pussy888，我们非常重视玩家福祉。我们的平台以安全可靠为设计理念，内置公平游戏与责任工具。
                <br><br>
                若您感到不确定或压力过大，我们的客服团队 24/7 随时待命，不仅协助游戏相关问题，也关心您的安全与心理健康。
            </div>
        </div>

        <!-- 负责任地游戏并享受乐趣 -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">负责任地游戏并享受乐趣</div>
            <div class="mt-2 text-white/80">
                成千上万的马来西亚玩家每天都在享受 Pussy888 —— 不仅因为游戏，更因为我们将玩家关怀放在首位。通过保持知情并负责任地游戏，您可以让赌场游戏保持有趣、平衡且安全。
                <br><br>
                立即下载 Pussy888，以自觉的态度进行游戏，并始终保持自我掌控。
            </div>
        </div>
    </div>

    <!-- CTA -->
    <x-partials.download
        title="理性游戏，安全第一"
        primaryCtaText="联系客服"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="设置账户限额"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        在 Pussy888，您的福祉最为重要。使用我们的工具，遵循上述提示，合理安排时间与预算。
        <br><br>
        立即下载 Pussy888，以自觉的态度进行游戏，并始终保持自我掌控。
    </x-partials.download>
</div>
