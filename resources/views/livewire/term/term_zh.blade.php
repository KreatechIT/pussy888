@push('title')
    条款与条件
@endpush

<div class="min-h-screen bg-black text-white">
    <x-partials.heading title="条款与条件" subtitle="Pussy888 • 值得信赖的在线赌场 • 马来西亚" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <!-- 介绍 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-lg leading-relaxed text-white/80">
                欢迎来到 Pussy888 Malaysia。在使用我们的网站或移动应用程序之前，请仔细阅读这些条款与条件（“条款”）。访问或使用我们的平台即表示您同意受这些条款约束。如果您不同意，请不要使用我们的服务。
            </div>
        </div>

        <!-- 1. 资格 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    1</div>
                <div class="text-2xl font-bold">资格</div>
            </div>
            <div class="space-y-2">
                @foreach (['年满18岁或已达到您所在司法管辖区的法定赌博年龄。', '同意遵守所有适用的本地、国家及国际法律。', '不居住在禁止网络赌博的国家或地区。', '我们保留在任何时间要求进行年龄或身份验证的权利。'] as $item)
                    <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                        <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                        <div class="text-sm text-white/80 sm:text-base">{{ $item }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- 2. 账户注册 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    2</div>
                <div class="text-2xl font-bold">账户注册</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>要玩真钱游戏，您必须创建账户并提供准确完整的信息，包括：</p>
                <div class="space-y-2">
                    @foreach (['用户名和安全密码', '有效的手机号码和电子邮箱地址'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>您有责任维护登录凭证的机密性。账户下的任何活动均视为您本人的行为。</p>
            </div>
        </div>

        <!-- 3. 责任博彩 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="items中心 mb-4 flex gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    3</div>
                <div class="text-2xl font-bold">责任博彩</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                我们致力于倡导责任博彩。您可以申请设置存款限额、暂时停用或自我排除。如果您觉得自己的赌博行为失去控制，我们鼓励您寻求专业支持服务的帮助。
            </div>
        </div>

        <!-- 4. 游戏公平性 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    4</div>
                <div class="text-2xl font-bold">游戏公平性</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                所有游戏均使用经认证的随机数生成器（RNG），以确保公平且无偏的结果。我们的平台定期接受第三方机构审核，以确保合规与诚信。
            </div>
        </div>

        <!-- 5. 红利与优惠 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    5</div>
                <div class="text-2xl font-bold">红利与优惠</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>红利、免费旋转及其他促销活动受以下限制：</p>
                <div class="space-y-2">
                    @foreach (['投注要求', '有效期', '特定游戏限制'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>Pussy888 保留酌情修改或撤回任何促销活动的权利。如有滥用红利优惠，账户可能被暂停或终止。</p>
            </div>
        </div>

        <!-- 6. 存款与取款 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    6</div>
                <div class="text-2xl font-bold">存款与取款</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>我们支持使用本地支付方式进行安全交易，包括银行转账和电子钱包。</p>
                <div class="space-y-2">
                    @foreach (['存款/取款适用最低与最高限额。', '取款可能需要身份验证。', '除非另有说明，所有交易均以马来西亚令吉（MYR）处理。', '可疑或欺诈活动可能导致延迟或拒绝取款。'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 7. 禁止的活动 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="from紫色-500 to-粉色-500 flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r text-lg font-bold text-black">
                    7</div>
                <div class="text-2xl font-bold">禁止的活动</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>您同意不：</p>
                <div class="space-y-2">
                    @foreach (['使用多个账户来领取红利或操纵结果', '使用机器人、软件或自动化工具进行游戏', '转让、出售或出租您的账户', '分享或发布具有攻击性、有害或非法的内容'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>违反这些条款可能导致账户被永久封禁，恕不另行通知。</p>
            </div>
        </div>

        <!-- 8. 知识产权 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    8</div>
                <div class="text-2xl font-bold">知识产权</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                Pussy888 Malaysia 平台上的所有内容、标志、软件和图片均为本公司之专有财产。未经事先书面同意，您不得复制、分发、修改或再制任何部分。
            </div>
        </div>

        <!-- 9. 责任限制 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    9</div>
                <div class="text-2xl font-bold">责任限制</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>我们致力于提供稳定且安全的游戏环境，但：</p>
                <div class="space-y-2">
                    @foreach (['对于因技术问题、网络中断或服务器停机造成的损失，我们不承担责任。', '我们不保证可不间断访问或游戏/服务完全无错误的表现。', '您使用我们的平台需自行承担风险。'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 10. 条款修改 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    10</div>
                <div class="text-2xl font-bold">条款修改</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                我们可在任何时间更新这些条款。变更后继续使用平台即表示您接受更新后的条款。我们建议用户定期查看本页面。
            </div>
        </div>

        <!-- 11. 访问终止 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    11</div>
                <div class="text-2xl font-bold">访问终止</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                如果我们怀疑存在欺诈、违反条款或非法活动，我们保留在任何时间暂停或终止您的访问或账户的权利，且可不另行通知。
            </div>
        </div>

        <!-- 12. 适用法律 -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    12</div>
                <div class="text-2xl font-bold">适用法律</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                本条款受马来西亚法律管辖并按其解释。因您使用本平台而产生的任何争议，将由马来西亚司法管辖处理。
            </div>
        </div>

        <!-- 联系我们 -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    13</div>
                <div class="text-2xl font-semibold">联系我们</div>
            </div>

            <div class="mt-4 text-white/80">
                如您对本《条款与条件》有任何疑问，请通过以下方式联系客户支持：
            </div>

            <div class="mt-6 grid gap-4 sm:grid-cols-3">
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
                    <div class="mt-2 text-sm text-white/70">网站与应用 24/7 全天候提供</div>
                </div>

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
                        <div class="font-semibold">电子邮箱</div>
                    </div>
                    <div class="mt-2 text-sm text-white/70">support@pussy888malaysia.com</div>
                </div>

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
                    <div class="mt-2 text-sm text-white/70">可通过在线客服按需提供</div>
                </div>
            </div>
        </div>
    </div>
</div>
