<div class="bg-black text-white">
    <!-- Header -->
    <x-partials.heading title="Jackpots" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />
    <!-- Page Heading -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs ring-1 ring-white/15">
                🎰 <span>Jackpot Hub</span>
            </div>
            <div class="mt-3 text-3xl/tight font-bold sm:text-4xl/tight">
                Pussy888 Jackpots – Spin Big, Win Bigger!
            </div>
            <div class="mt-4 max-w-3xl text-white/80">
                Welcome to the world of Pussy888 jackpots, where every spin has the potential to turn into a
                life-changing moment.
                At Pussy888 Malaysia, we offer a wide range of exciting progressive jackpot slots and fixed jackpot
                games that give you
                the opportunity to win massive cash prizes — all from the comfort of your mobile device. If you're
                looking for the
                ultimate thrill in online casino gaming, the jackpot section is where the biggest excitement lives.
            </div>
        </div>
    </div>

    <!-- What Are Jackpot Games? -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">What Are Jackpot Games?</div>
            <div class="mt-3 max-w-3xl text-white/80">
                Jackpot games are special slot games where the prizes are significantly higher than standard slot
                payouts.
                These games come in two main types:
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <!-- Fixed Jackpots -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="flex items-center gap-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-emerald-500/20">🔒</div>
                        <div class="text-lg font-semibold">Fixed Jackpots</div>
                    </div>
                    <div class="mt-3 space-y-2 text-sm text-white/80">
                        <div>• Offer a set payout for hitting a certain symbol combination.</div>
                        <div>• Payouts are consistent and do not change over time.</div>
                        <div>• Easier to win than progressive jackpots.</div>
                    </div>
                </div>

                <!-- Progressive Jackpots -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="flex items-center gap-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-pink-500/20">📈</div>
                        <div class="text-lg font-semibold">Progressive Jackpots</div>
                    </div>
                    <div class="mt-3 space-y-2 text-sm text-white/80">
                        <div>• A small portion of every player's bet adds to a growing prize pool.</div>
                        <div>• The jackpot continues to grow until someone wins it — often reaching huge amounts.</div>
                        <div>• The more players spin, the higher the prize becomes.</div>
                    </div>
                    <div class="mt-3 text-sm text-white/70">
                        Pussy888 progressive jackpots are among the most popular features on the platform and have
                        rewarded lucky players with jaw-dropping wins.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Jackpot Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="mb-4 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Top Jackpot Games on Pussy888</div>
                <div class="text-sm text-white/70">Stunning visuals, immersive soundtracks & real chances to win big.
                </div>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([['t' => 'Great Blue Jackpot', 'd' => 'Dive into the deep sea for big multipliers and a massive grand prize.', 'img' => 'great-blue.jpg'], ['t' => 'Safari Heat Jackpot', 'd' => 'Wildlife-themed slot packed with wilds, free spins, and a rising jackpot.', 'img' => 'safari-heat.jpg'], ['t' => 'Panther Moon Jackpot', 'd' => 'Mysterious, dark, and filled with surprise wins.', 'img' => 'panther-moon.jpg'], ['t' => 'Highway Kings Progressive', 'd' => 'Classic design with high-octane payouts and bonus rounds.', 'img' => 'highway-kings.jpg'], ['t' => 'Bonus Bear Jackpot', 'd' => 'Light-hearted theme with serious winning potential.', 'img' => 'bonus-bear.jpg']] as $g)
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
                            <div class="text-xs text-white/70">Jackpot Slot</div>
                        </div>
                        <!-- Optional live jackpot meter -->
                        <div
                            class="absolute right-3 top-3 rounded-md bg-purple-400 px-2 py-1 text-xs font-semibold text-black">
                            RM 1,248,930+
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3">
                        <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                            href="#"
                        >Play Now</a>
                        <a class="text-sm text-white/70 hover:text-white" href="#">Details →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Why Play -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Why Play Pussy888 Jackpot Slots?</div>
            <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([['i' => '💰', 't' => 'Bigger payouts than regular slots'], ['i' => '🎯', 't' => 'High replay value with exciting bonus rounds'], ['i' => '🏆', 't' => 'Massive prize pools on progressive titles'], ['i' => '📱', 't' => 'Optimized for Android & iOS (Pussy888 app)'], ['i' => '🇲🇾', 't' => 'Real cash prizes won by Malaysian players weekly'], ['i' => '⚡', 't' => 'Fast, smooth gameplay & quick load times']] as $w)
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
                Whether you're chasing thousands or millions, Pussy888 jackpots offer an electrifying chance to win big
                with every spin.
            </div>
        </div>
    </div>

    <!-- Play Anytime, Anywhere -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="grid items-center gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="text-2xl font-bold">Play Jackpot Games Anytime, Anywhere</div>
                <div class="mt-3 text-white/80">
                    All Pussy888 jackpot slots are fully compatible with mobile devices and desktop platforms. You can
                    spin for the grand prize wherever you are.
                </div>
                <div class="mt-4 space-y-2 text-white/80">
                    <div>• Download Pussy888 on Android (APK) or iOS</div>
                    <div>• Or play instantly via your mobile browser</div>
                    <div>• Games load fast, run smoothly, and are touch-optimized</div>
                    <div>• No lag. No limits. Just pure jackpot action.</div>
                </div>
                <div class="mt-5 flex flex-wrap gap-3">
                    <a class="rounded-md bg-purple-400 px-4 py-2 font-semibold text-black hover:bg-purple-300"
                        href="#"
                    >Download APK</a>
                    <a class="rounded-md border border-white/15 px-4 py-2 hover:bg-white/5" href="#">Get iOS</a>
                    <a class="rounded-md border border-white/15 px-4 py-2 hover:bg-white/5" href="#">Play in
                        Browser</a>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.02]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/devices/jackpot-mobile.jpg') }}"
                    alt="Play Anywhere"
                >
            </div>
        </div>
    </div>

    <!-- Safe & Fair -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Safe, Fair & Regulated Gaming</div>
            <div class="mt-3 text-white/80">
                All Pussy888 jackpot games are backed by certified Random Number Generators (RNGs) and licensed game
                providers.
                With SSL encryption, your data and transactions are protected at all times.
            </div>
            <div class="mt-4 grid gap-4 text-sm sm:grid-cols-3">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">🔐 SSL Encryption</div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">🧪 RNG Certified</div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">📜 Licensed Providers</div>
            </div>
        </div>
    </div>

    <!-- Bonuses -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Bonuses That Boost Your Jackpot Play</div>
            <div class="mt-3 text-white/80">
                Want even more value while chasing jackpots? Take advantage of our regular bonuses and promotions:
            </div>
            <div class="mt-5 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([['t' => 'Welcome Bonus', 'd' => 'Kickstart your gameplay with extra credits.'], ['t' => 'Free Spins', 'd' => 'Available on selected jackpot slots.'], ['t' => 'Cashback', 'd' => 'Get a % back for active play.'], ['t' => 'VIP Events', 'd' => 'Exclusive jackpot events for VIPs.']] as $b)
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold">{{ $b['t'] }}</div>
                        <div class="mt-1 text-sm text-white/70">{{ $b['d'] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                <a class="inline-flex items-center gap-2 rounded-md bg-purple-400 px-4 py-2 font-semibold text-black hover:bg-purple-300"
                    href="#"
                >
                    View Promotions →
                </a>
            </div>
        </div>
    </div>

    <!-- Tips (Accordion with Alpine) -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Tips for Winning Jackpot Slots</div>

            @php
                $tips = [
                    'Play maximum lines and bets to qualify for full jackpot payouts',
                    'Set a budget and stick to it – jackpot games can be high-volatility',
                    'Try demo versions first to understand features and bonus triggers',
                    'Look for jackpot meters that show how high the prize pool has grown',
                    'Watch for promotions that offer bonus credits or free spins for jackpot games',
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
                            Remember, every spin could be the one that changes everything!
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-partials.download
        title="Start Spinning for Jackpots Now!"
        primaryCtaText="Download Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="Play Now"
        secondaryCtaLink="#"
    >
        The thrill of the win is just a tap away. Join thousands of players across Malaysia who are spinning their way
        to fortune with Pussy888 jackpots.
        <div class="mt-3">
            With trusted gameplay, stunning graphics, and real-money rewards, it’s time to chase the ultimate prize.
            Download Pussy888 today and spin your way to your next big win!
        </div>
    </x-partials.download>
</div>
