@push('title')
    Games
@endpush

<div class="bg-black text-white">
    <!-- Page Header -->
    <x-partials.heading title="Games" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="grid items-center gap-6 lg:grid-cols-[1.2fr_.8fr]">
            <div>
                <h1 class="text-3xl/tight font-bold sm:text-4xl/tight">
                    Explore Pussy888 Games – Slots, Live Casino, Table Games & More
                </h1>
                <p class="mt-4 text-white/80">
                    Welcome to the Pussy888 Games hub — your one-stop destination for the most exciting and rewarding
                    online casino games in Malaysia.
                    Whether you're into classic fruit slots, high-stakes live dealer games, or modern video slots with
                    massive jackpots,
                    Pussy888 Malaysia offers a game for every type of player.
                </p>
                <p class="mt-3 text-white/80">
                    Get ready to enjoy premium gameplay, immersive graphics, and real winning potential with our vast
                    selection of casino titles,
                    available on both mobile and desktop.
                </p>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-sm text-white/70">Quick Jump</div>
                <div class="scroll-smooth">
                    <div class="mt-3 grid gap-2 sm:grid-cols-2">
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#slot-games">Slot Games</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#live-casino">Live Casino</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#table-games">Table Games</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#jackpot-games">Jackpot Games</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#mobile-desktop">Mobile/Desktop</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#fair-safe">Fair & Safe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Cards Overview -->
    <div class="mx-auto max-w-7xl px-4 pb-8">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Slot Games</div>
                <div class="mt-1 text-sm text-white/70">Hundreds of titles with free spins, multipliers & jackpots.
                </div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('slot', [app()->getLocale()]) }}" wire:navigate.hover>Explore →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Live Casino</div>
                <div class="mt-1 text-sm text-white/70">HD streams & pro dealers: Baccarat, Roulette, Blackjack.</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('live-casino', [app()->getLocale()]) }}" wire:navigate.hover>Explore →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Table Games</div>
                <div class="mt-1 text-sm text-white/70">Strategy classics with smooth controls & fair RNG.</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('table-games', [app()->getLocale()]) }}" wire:navigate.hover>Explore →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Jackpot Games</div>
                <div class="mt-1 text-sm text-white/70">Progressive pots that grow with every spin.</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="#jackpot-games">Explore →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Slot Games -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="slot-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-bold">Slot Games</h2>
                    <p class="mt-2 text-white/80">
                        Our most popular game category, Pussy888 slot games, features hundreds of titles designed for
                        all tastes and budgets.
                        From simple 3-reel slots to feature-packed 5-reel adventures, each game comes with its own
                        theme, bonus features, and win potential.
                    </p>
                </div>
            </div>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">Popular Features</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['Free spins and bonus rounds', 'Wilds, scatters, and multipliers', 'Progressive pussy888 jackpots', 'Auto-play and fast-spin modes', 'Stunning visuals and smooth animations'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top Slot Titles -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">Top Slot Titles</div>
                    </div>

                    <!-- Grid of slot games -->
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                        @foreach ([['title' => 'Safari Heat', 'image' => 'slots/safari-heat.jpg'], ['title' => 'Great Blue', 'image' => 'slots/great-blue.jpg'], ['title' => 'Panther Moon', 'image' => 'slots/panther-moon.jpg'], ['title' => 'Highway Kings', 'image' => 'slots/highway-kings.jpg'], ['title' => 'Bonus Bear', 'image' => 'slots/bonus-bear.jpg']] as $slot)
                            <div
                                class="group overflow-hidden rounded-lg border border-white/10 bg-white/[0.04] shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                <a href="https://lv168.com/en/register?up=luckywinwin14">
                                    <img class="h-24 w-full object-cover"
                                        src="{{ asset('assets/frontend/images/' . $slot['image']) }}"
                                        alt="{{ $slot['title'] }}">
                                    <div
                                        class="p-2 text-center text-sm font-medium text-white group-hover:text-purple-400">
                                        {{ $slot['title'] }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <p class="mt-4 text-sm text-white/80">
                Whether you're chasing small frequent wins or aiming for a life-changing payout, our slots offer endless
                excitement.
            </p>
        </div>
    </div>

    <!-- Live Casino -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="live-casino">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Live Casino</h2>
            <p class="mt-2 text-white/80">
                Looking for real-time action? The Pussy888 live casino brings the authentic feel of a land-based casino
                to your screen.
                Play against professional, friendly dealers through high-definition live streams and interactive
                gameplay.
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">Available Live Games:</div>
                    </div>

                    <!-- Grid of slot games -->
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                        @foreach ([['title' => 'Live Baccarat', 'image' => 'live_casino/baccarat.jpg'], ['title' => 'Live Blackjack', 'image' => 'live_casino/blackjack.jpg'], ['title' => 'Live Roulette', 'image' => 'live_casino/roulette.jpg'], ['title' => 'Sic Bo', 'image' => 'live_casino/sic-bo.jpg'], ['title' => 'Dragon Tiger', 'image' => 'live_casino/dragon-tiger.jpg']] as $slot)
                            <div
                                class="group overflow-hidden rounded-lg border border-white/10 bg-white/[0.04] shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                <a href="https://lv168.com/en/register?up=luckywinwin14">
                                    <img class="h-24 w-full object-cover"
                                        src="{{ asset('assets/frontend/images/' . $slot['image']) }}"
                                        alt="{{ $slot['title'] }}">
                                    <div
                                        class="p-2 text-center text-sm font-medium text-white group-hover:text-purple-400">
                                        {{ $slot['title'] }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top Slot Titles -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">Why You’ll Love It</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['Real-time betting with instant results', 'Chat with dealers and enjoy social gameplay', 'Crystal-clear HD streams', 'Play on mobile or desktop seamlessly'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <p class="mt-4 text-sm text-white/80">
                It’s as close to the real casino floor as you can get!
            </p>
        </div>
    </div>

    <!-- Table Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="table-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Table Games</h2>
            <p class="mt-2 text-white/80">
                Prefer strategy and skill-based games? The table game section on Pussy888 offers digital versions of
                classic favorites.
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">Player Friendly</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['Smooth controls & detailed instructions', 'Fair RNG-based outcomes', 'Great for beginners and pros alike'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top Slot Titles -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">Table Games You’ll Find:</div>
                    </div>

                    <!-- Grid of slot games -->
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                        @foreach ([['title' => 'Blackjack', 'image' => 'table_games/blackjack.png'], ['title' => 'Roulette', 'image' => 'table_games/roulette.png'], ['title' => 'Poker', 'image' => 'table_games/baccarat.png'], ['title' => 'Sic Bo', 'image' => 'table_games/sicbo.png'], ['title' => 'Three Card Brag', 'image' => 'table_games/dragontiger.png']] as $slot)
                            <div
                                class="group overflow-hidden rounded-lg border border-white/10 bg-white/[0.04] shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                 <a href="https://lv168.com/en/register?up=luckywinwin14">
                                    <img class="h-24 w-full object-cover"
                                        src="{{ asset('assets/frontend/images/' . $slot['image']) }}"
                                        alt="{{ $slot['title'] }}">
                                    <div
                                        class="p-2 text-center text-sm font-medium text-white group-hover:text-purple-400">
                                        {{ $slot['title'] }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jackpot Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="jackpot-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Jackpot Games</h2>
            <p class="mt-2 text-white/80">
                Want to win big? Try your luck on pussy888 jackpot games that offer life-changing prizes.
                These progressive slots grow their prize pools with every spin — meaning the longer they run, the bigger
                the jackpot gets.
            </p>
            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">Available Live Games:</div>
                    </div>

                    <!-- Grid of slot games -->
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                        @foreach ([['title' => 'Great Blue Jackpot', 'image' => 'jackpots/great-blue.jpg'], ['title' => 'Safari Heat Jackpot', 'image' => 'jackpots/safari-heat.jpg'], ['title' => 'Panther Moon Jackpot', 'image' => 'jackpots/panther-moon.jpg'], ['title' => 'Highway Kings Progressive', 'image' => 'jackpots/highway-kings.jpg'], ['title' => 'Bonus Bear Jackpot', 'image' => 'jackpots/bonus-bear.jpg']] as $slot)
                            <div
                                class="group overflow-hidden rounded-lg border border-white/10 bg-white/[0.04] shadow transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                <a href="https://lv168.com/en/register?up=luckywinwin14">
                                    <img class="h-24 w-full object-cover"
                                        src="{{ asset('assets/frontend/images/' . $slot['image']) }}"
                                        alt="{{ $slot['title'] }}">
                                    <div
                                        class="p-2 text-center text-sm font-medium text-white group-hover:text-purple-400">
                                        {{ $slot['title'] }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top Slot Titles -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">Why You’ll Love It</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['Real-time betting with instant results', 'Chat with dealers and enjoy social gameplay', 'Crystal-clear HD streams', 'Play on mobile or desktop seamlessly'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <p class="mt-4 text-sm text-white/80">
                Keep an eye out for special symbols and bonus triggers — you never know when you’ll hit the next
                big win!
            </p>
        </div>
    </div>

    <!-- Mobile / Desktop -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="mobile-desktop">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 md:p-8">
            <h2 class="text-2xl font-bold tracking-tight">Play on Mobile or Desktop</h2>
            <p class="mt-3 leading-relaxed text-white/80">
                All Pussy888 games are fully optimized for mobile devices (Android &amp; iOS) and desktop browsers.
                Whether you're at home or on the move, your favorite games are just a tap away.
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="mt-4 space-y-2">
                    @foreach (['Smooth gameplay with fast loading speeds', 'Touch-friendly interfaces for mobile play', 'Compatible with the Pussy888 mobile app and browser version', 'Auto-adjusting graphics for any screen size'] as $feature)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $feature }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5 md:p-6">
                    <div
                        class="inline-flex items-center rounded-full border border-white/15 bg-white/[0.04] px-3 py-1 text-xs font-medium uppercase tracking-wide text-white/70">
                        Pro Tip
                    </div>
                    <p class="mt-3 text-sm leading-relaxed text-white/80">
                        For the best experience, keep your app updated and enable hardware acceleration in supported
                        browsers.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Fair & Safe -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="fair-safe">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Fair, Safe & Certified</h2>
            <p class="mt-2 text-white/80">
                Every game on Pussy888 is powered by certified software providers and uses Random Number Generators
                (RNGs)
                to ensure fair outcomes. Our platform is encrypted and secure, so you can focus on the fun while we
                protect your data.
            </p>
        </div>
    </div>

    <!-- Try Demo -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Try Demo Games</h2>
            <p class="mt-2 text-white/80">
                Not sure where to start? Many of our games offer demo modes so you can explore features,
                test strategies, and learn the rules — all without spending real money.
            </p>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download title="Start Playing Today!" primaryCtaText="Download Pussy888"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14" secondaryCtaText="Browse All Games"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14">
        Explore the full Pussy888 game list and discover why we're one of
        Malaysia’s favorite online
        casinos.
        Whether you're in it for fun or fortune, Pussy888 delivers unmatched quality and variety in every
        spin, hand, and round.
    </x-partials.download>
</div>
