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
                            href="#slot-games"
                        >Slot Games</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#live-casino"
                        >Live Casino</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#table-games"
                        >Table Games</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#jackpot-games"
                        >Jackpot Games</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#mobile-desktop"
                        >Mobile/Desktop</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#fair-safe"
                        >Fair & Safe</a>
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
                        href="#jackpot-games"
                    >Explore →
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
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Popular Features:</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Free spins and bonus rounds</li>
                        <li>Wilds, scatters, and multipliers</li>
                        <li>Progressive pussy888 jackpots</li>
                        <li>Auto-play and fast-spin modes</li>
                        <li>Stunning visuals and smooth animations</li>
                    </ul>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Top Slot Titles:</div>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach (['Safari Life', 'Great Blue', 'Panther Moon', 'Highway Kings', 'Bonus Bear'] as $title)
                            <div class="rounded-lg border border-white/10 bg-white/[0.04] px-3 py-1.5 text-sm">
                                {{ $title }}</div>
                        @endforeach
                    </div>
                    <p class="mt-4 text-sm text-white/80">
                        Whether you're chasing small frequent wins or aiming for a life-changing payout, our slots offer
                        endless excitement.
                    </p>
                </div>
            </div>
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
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Available Live Games:</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Live Baccarat</li>
                        <li>Live Blackjack</li>
                        <li>Live Roulette</li>
                        <li>Sic Bo</li>
                        <li>Dragon Tiger</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Why You’ll Love It</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Real-time betting with instant results</li>
                        <li>Chat with dealers and enjoy social gameplay</li>
                        <li>Crystal-clear HD streams</li>
                        <li>Play on mobile or desktop seamlessly</li>
                    </ul>
                    <p class="mt-3 text-sm text-white/70">It’s as close to the real casino floor as you can get!</p>
                </div>
            </div>
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
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Table Games You’ll Find:</div>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach (['Blackjack', 'Roulette', 'Poker', 'Sic Bo', 'Three Card Brag'] as $g)
                            <div class="rounded-lg border border-white/10 bg-white/[0.04] px-3 py-1.5 text-sm">
                                {{ $g }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Player Friendly</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Smooth controls & detailed instructions</li>
                        <li>Fair RNG-based outcomes</li>
                        <li>Great for beginners and pros alike</li>
                    </ul>
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
            <p class="mt-3 text-white/80">
                Keep an eye out for special symbols and bonus triggers — you never know when you’ll hit the next big
                win!
            </p>
        </div>
    </div>

    <!-- Mobile / Desktop -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="mobile-desktop">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Play on Mobile or Desktop</h2>
            <p class="mt-2 text-white/80">
                All Pussy888 games are fully optimized for mobile devices (Android & iOS) and desktop browsers.
                Whether you're at home or on the move, your favorite games are just a tap away.
            </p>

            <div class="mt-4 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <ul class="space-y-2 text-sm text-white/80">
                        <li>Smooth gameplay with fast loading speeds</li>
                        <li>Touch-friendly interfaces for mobile play</li>
                        <li>Compatible with the Pussy888 mobile app and browser version</li>
                        <li>Auto-adjusting graphics for any screen size</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="text-sm text-white/70">Pro Tip</div>
                    <p class="mt-2 text-sm text-white/80">
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
    <x-partials.download
        title="Start Playing Today!"
        primaryCtaText="Download Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="Browse All Games"
        secondaryCtaLink="#"
    >
        Explore the full Pussy888 game list and discover why we're one of
        Malaysia’s favorite online
        casinos.
        Whether you're in it for fun or fortune, Pussy888 delivers unmatched quality and variety in every
        spin, hand, and round.
    </x-partials.download>
</div>
