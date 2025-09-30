@push('title')
    Responsible Gaming
@endpush

<div class="min-h-screen bg-black text-white" x-data>
    <!-- Page Header -->
    <x-partials.heading title="Responsible Gambling – Play Safe, Play Smart with Pussy888"
        subtitle="Pussy888 • Trusted Online Casino • Malaysia"
    />

    <!-- Page Container -->
    <div class="mx-auto max-w-7xl space-y-8 px-4 py-10">
        <!-- Intro -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                At Pussy888 Malaysia, we believe online casino gaming should be fun, entertaining, and safe. While
                playing slots, table games, or live casino can be thrilling and rewarding, it’s important to stay in
                control. This is why we fully support and promote responsible gambling practices across our platform.
                <br><br>
                We’re committed to helping you enjoy a healthy gaming experience by providing tools, guidance, and
                support every step of the way.
            </div>
        </div>

        <!-- What Is Responsible Gambling? -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">What Is Responsible Gambling?</div>
            <div class="mt-2 text-white/80">
                Responsible gambling means maintaining control over your playing behavior — knowing your limits,
                understanding the risks, and treating online casino games as entertainment, not a way to make money.
                <br><br>
                By playing responsibly, you ensure that gambling remains an enjoyable hobby, not a harmful habit.
            </div>
        </div>

        <!-- Responsible Gambling Tips for All Players -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">Responsible Gambling Tips for All Players</div>
            <div class="mt-2 text-white/80">Follow these simple yet powerful tips to enjoy a safe and balanced
                experience on Pussy888:</div>

            <div class="mt-4 grid gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">1. Set a Budget Before You Play</div>
                    <div class="mt-1 text-sm text-white/80">
                        Decide how much money you’re willing to spend and stick to it. Only use money you can afford to
                        lose — never dip into rent, bills, or savings.
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">2. Use Time Limits</div>
                    <div class="mt-1 text-sm text-white/80">
                        Avoid long sessions by setting daily or weekly time limits for gameplay. Taking breaks helps you
                        stay focused and in control.
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">3. Don’t Chase Losses</div>
                    <div class="mt-1 text-sm text-white/80">
                        Losing is part of the game. Trying to win back lost money often leads to bigger losses and
                        emotional stress.
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">4. Treat It As Entertainment, Not Income</div>
                    <div class="mt-1 text-sm text-white/80">
                        Casino games are games of chance. While you can win real money, outcomes are random and never
                        guaranteed.
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">5. Take Breaks Regularly</div>
                    <div class="mt-1 text-sm text-white/80">
                        Playing continuously can lead to fatigue and poor decision-making. Step away often to refresh
                        your mind.
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">6. Avoid Playing Under Stress or Influence</div>
                    <div class="mt-1 text-sm text-white/80">
                        Never gamble when feeling sad, angry, tired, or under the influence of alcohol or drugs. Your
                        judgment may be impaired.
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">7. Know the Game Rules</div>
                    <div class="mt-1 text-sm text-white/80">
                        Read game guides and understand how payouts, bonuses, and features work before placing real
                        bets.
                    </div>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.04] p-5">
                    <div class="font-semibold text-purple-300">8. Use Responsible Gambling Tools</div>
                    <div class="mt-1 text-sm text-white/80">
                        Pussy888 provides options like session reminders, deposit limits, and self-exclusion features
                        for better control.
                    </div>
                </div>
            </div>
        </div>

        <!-- Tools & Features for Safer Gaming -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">Tools & Features for Safer Gaming</div>
            <div class="mt-2 text-white/80">At Pussy888, we offer built-in tools to help manage your gaming behavior:
            </div>

            <div class="mt-4 space-y-2">
                @foreach (['Deposit Limits – Set daily, weekly, or monthly deposit caps', 'Session Time Reminders – Get alerts after a set time of gameplay', 'Loss Limits – Limit the amount you can lose in a session', 'Cooling-Off Periods – Temporarily suspend your account if you need a break', 'Self-Exclusion – Block access to your account for a defined period or permanently'] as $tool)
                    <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                        <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                        <div class="text-sm text-white/80">{{ $tool }}</div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4 rounded-xl border border-white/10 bg-white/[0.04] p-4 text-sm text-white/80">
                You can request any of these features by contacting our Pussy888 customer support team at any time.
            </div>
        </div>

        <!-- Warning Signs of Problem Gambling -->
        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-pink-500/20 to-purple-500/10 p-6">
            <div class="text-xl font-semibold">Warning Signs of Problem Gambling</div>
            <div class="mt-2 text-white/80">
                It’s important to recognize when gambling is becoming a problem. Some common signs include:
            </div>

            <div class="mt-4 grid gap-3 md:grid-cols-2">
                @foreach (['Gambling with money meant for essentials', 'Lying to family or friends about gambling', 'Feeling anxious or guilty after playing', 'Needing to bet larger amounts to feel the same excitement', 'Being unable to stop, even after losing', 'Skipping work or responsibilities to gamble'] as $sign)
                    <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                        <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                        <div class="text-sm">{{ $sign }}</div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4 rounded-xl bg-white/10 p-4 text-sm">
                If any of these apply to you, consider reaching out for help.
            </div>
        </div>

        <!-- We're Here to Support You -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">We're Here to Support You</div>
            <div class="mt-2 text-white/80">
                At Pussy888, we take player well-being seriously. Our platform is designed to be safe and secure, with
                fair games and responsible tools built in.
                <br><br>
                If you ever feel unsure or overwhelmed, our customer support team is available 24/7 to assist you — not
                just with gameplay, but with your safety and mental wellness as well.
            </div>
        </div>

        <!-- Play Responsibly and Enjoy the Game -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-xl font-semibold">Play Responsibly and Enjoy the Game</div>
            <div class="mt-2 text-white/80">
                Thousands of Malaysian players enjoy Pussy888 every day — not just because of the games, but because we
                put player care first. By staying informed and playing responsibly, you can keep casino gaming fun,
                balanced, and safe.
                <br><br>
                Download Pussy888 today, play with awareness, and always stay in control.
            </div>
        </div>
    </div>

    <!-- Final Words / CTA -->
    <x-partials.download
        title="Play Safe, Play Smart"
        primaryCtaText="Contact Support"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="Set Account Limits"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        At Pussy888, your well-being comes first. Use our tools, follow the tips above, and keep control of your time
        and budget.
        <br><br>
        Download Pussy888 today, play with awareness, and always stay in control.
    </x-partials.download>
</div>
