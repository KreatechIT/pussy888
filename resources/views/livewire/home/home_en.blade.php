@push('title')
    Pussy888 Malaysia: Download, Play Slots & Live Casino | Trusted Online Casino
@endpush

@push('meta_title')
    Pussy888 Malaysia | Download & Play Trusted Online Casino
@endpush

@push('meta_description')
    Download & play! Enjoy top slots & live casino games at a trusted online platform in Malaysia. Find your favorite games
    now!
@endpush

@push('meta_keywords')
    Pussy888, Pussy888 Malaysia, Download Pussy888, Online Casino Malaysia, Live Casino Malaysia, Slot Games Malaysia
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
                        Trusted Online Casino in Malaysia
                    </div>
                    <div class="mt-4 text-4xl/tight font-bold sm:text-5xl/tight">
                        Pussy888 Malaysia: Download, Play Slots &amp; Live Casino
                    </div>
                    <p class="mt-3 text-white/80">
                        Hundreds of slots, HD live dealers, seamless mobile app, and secure payments—made for Malaysian
                        players.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <x-partials.button href="https://lv168.com/en/register?up=luckywinwin14">Download
                            App</x-partials.button>
                        <x-partials.button type="outline" href="https://lv168.com/en/register?up=luckywinwin14">Explore</x-partials.button>
                        {{-- <a href="https://lv168.com/en/register?up=luckywinwin14"
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
                <div class="text-xl font-semibold">Why Pussy888</div>
                <p class="mt-2 text-white/75">
                    A leading, secure platform with a vast game library, smooth mobile play, and encrypted payments for
                    safe, real-money gaming.
                    Optimized for Android &amp; iOS with APK/iOS profile install and instant browser play.
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-xl font-semibold">Security Snapshot</div>
                <ul class="mt-3 space-y-2 text-sm text-white/80">
                    <li>• SSL-encrypted connections</li>
                    <li>• Secure payment gateways</li>
                    <li>• RNG-certified games</li>
                    <li>• Account recovery &amp; 2FA options</li>
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
                <div class="text-2xl font-bold">Get Started &amp; Install the App</div>
                <div class="text-sm text-white/70">Android (APK), iOS profile, or play instantly in browser.</div>
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
                >Mobile Web</button>
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/home/play-now.jpg') }}"
                    alt=""
                >
            </div>

            <div class="space-y-4">
                <!-- Android -->
                <div x-show="tab==='android'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">Android APK Install</div>
                        <ol class="mt-2 list-decimal space-y-1 pl-5 text-sm text-white/80">
                            <li>Visit the official site / trusted partner &amp; download the <span
                                    class="font-semibold">Pussy888 APK</span>.</li>
                            <li>Enable <em>Install from unknown sources</em> in Settings.</li>
                            <li>Open the APK and tap <em>Install</em>.</li>
                            <li>Launch the app to register or log in.</li>
                        </ol>
                    </div>
                </div>

                <!-- iOS -->
                <div x-show="tab==='ios'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">iOS Profile Install</div>
                        <ol class="mt-2 list-decimal space-y-1 pl-5 text-sm text-white/80">
                            <li>Open Safari and visit the official site.</li>
                            <li>Follow prompts to add the iOS app profile.</li>
                            <li>Go to <em>Settings &gt; General &gt; Profiles &amp; Device Management</em> and
                                <em>Trust</em> the profile.
                            </li>
                            <li>Launch the app and sign in.</li>
                        </ol>
                    </div>
                </div>

                <!-- Web -->
                <div x-show="tab==='web'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">Instant Play (Mobile Web)</div>
                        <p class="mt-2 text-sm text-white/80">
                            Use your mobile browser—no install required. Most games and features are available
                            instantly.
                        </p>
                    </div>
                </div>

                <!-- Safety tips -->
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-lg font-semibold">Avoid Fake Apps</div>
                    <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-white/80">
                        <li>Only download from the official site or verified partners.</li>
                        <li>Beware third-party mirrors; check app permissions.</li>
                        <li>Keep device security updates enabled.</li>
                    </ul>
                </div>

                <div class="flex gap-3">
                    <x-partials.button href="https://lv168.com/en/register?up=luckywinwin14">Download
                        APK</x-partials.button>
                    <x-partials.button type="outline" href="https://lv168.com/en/register?up=luckywinwin14">Get iOS
                        App</x-partials.button>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Registration & Login (Steps) -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="register">
        <div class="mb-6">
            <div class="text-2xl font-bold">Registration &amp; Login</div>
            <div class="text-sm text-white/70">Create your account in minutes, then enable extra security.</div>
        </div>
        <div class="grid gap-4 md:grid-cols-4">
            @foreach ([['t' => 'Register', 'd' => 'Tap Register and complete username, password, phone, email.'], ['t' => 'Verify', 'd' => 'Confirm via SMS/email if prompted.'], ['t' => 'Login', 'd' => 'Enter your credentials. Optionally use Remember Me.'], ['t' => 'Secure', 'd' => 'Enable 2FA if available, and set strong password.']] as $s)
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
                { img: '{{ asset('assets/frontend/images/home/Explore-the-Game-Library-1.jpg') }}', t: 'Dragon Treasure' },
                { img: '{{ asset('assets/frontend/images/home/Explore-the-Game-Library-2.jpg') }}', t: 'Golden Fist' },
                { img: '{{ asset('assets/frontend/images/home/Explore-the-Game-Library-3.jpg') }}', t: 'Safari Life' }
            ]
        }"
    >
        <div class="mb-6 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Explore the Game Library</div>
                <div class="text-sm text-white/70">Slots, Live Casino, and Table/Specialty games.</div>
            </div>
            <div class="hidden gap-2 sm:flex">
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="cat='slots'"
                    :class="cat === 'slots' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >Slots</button>
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="cat='live'"
                    :class="cat === 'live' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >Live Casino</button>
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="cat='table'"
                    :class="cat === 'table' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >Table &amp; Specialty</button>
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
                                        Features: Free Spins • Multipliers • Jackpots
                                    </div>
                                    <div
                                        class="text-xs text-white/70"
                                        x-cloak
                                        x-show="cat==='live'"
                                    >
                                        HD Streams • Real Dealers • Baccarat/Roulette/Blackjack
                                    </div>
                                    <div
                                        class="text-xs text-white/70"
                                        x-cloak
                                        x-show="cat==='table'"
                                    >
                                        Poker • Sic Bo • And more
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
                    <div class="text-lg font-semibold">Slot Games</div>
                    <p class="mt-2 text-sm text-white/80">
                        Hundreds of themed slots with free spins, multipliers, bonus rounds, and progressive jackpots.
                        Try favorites like <em>Dragon Treasure</em>, <em>Golden Fist</em>, and <em>Safari Life</em>.
                    </p>
                </div>

                <div
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5"
                    x-cloak
                    x-show="cat==='live'"
                    x-transition
                >
                    <div class="text-lg font-semibold">Live Dealer</div>
                    <p class="mt-2 text-sm text-white/80">
                        Real-time HD streams for Baccarat, Roulette, and Blackjack with interactive chat and pro
                        dealers.
                    </p>
                </div>

                <div
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5"
                    x-cloak
                    x-show="cat==='table'"
                    x-transition
                >
                    <div class="text-lg font-semibold">Table &amp; Specialty</div>
                    <p class="mt-2 text-sm text-white/80">
                        Poker, Sic Bo, and more fast-paced games for quick sessions and classic strategies.
                    </p>
                </div>

                <div class="flex gap-3">
                    <x-partials.button href="https://lv168.com/en/register?up=luckywinwin14">Play Now</x-partials.button>
                    <x-partials.button type="outline" href="https://lv168.com/en/register?up=luckywinwin14">View All Games</x-partials.button>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. Bonuses & Promotions -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="promos">
        <div class="mb-6 text-2xl font-bold">Bonuses &amp; Promotions</div>
        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-amber-500/20 to-pink-500/10 p-5">
                <div class="text-lg font-semibold">Welcome Bonus</div>
                <p class="mt-1 text-sm text-white/80">Matched deposit for new users. Check wagering rules before
                    claiming.</p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Cashback &amp; Reload</div>
                <p class="mt-1 text-sm text-white/80">Daily rebates, reload offers, and seasonal promos.</p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">VIP Program</div>
                <p class="mt-1 text-sm text-white/80">Higher limits, faster withdrawals, and exclusive tournaments.</p>
            </div>
        </div>
    </div>

    <!-- 6. Payments -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="payments">
        <div class="mb-6 text-2xl font-bold">Payment Methods &amp; Withdrawals</div>
        <div class="grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Local &amp; E-Wallet Friendly</div>
                <p class="mt-2 text-sm text-white/80">
                    Deposits via local bank transfer, Touch 'n Go, Boost, GrabPay, and trusted gateways for quick
                    top-ups.
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Fast Withdrawals</div>
                <p class="mt-2 text-sm text-white/80">
                    Transparent limits and verification—most withdrawals within 24 hours (method-dependent).
                </p>
            </div>
        </div>
    </div>

    <!-- 7. Safety & Fairness (Accordion) -->
    @php
        $faqs = [
            [
                'q' => 'Encryption & Account Protection',
                'a' =>
                    'Industry-standard SSL, strong passwords, and optional 2FA help secure your account and data.',
            ],
            [
                'q' => 'RNG Certification & Audits',
                'a' =>
                    'RNG-certified games ensure unbiased outcomes; third-party audits reinforce fairness.',
            ],
            [
                'q' => 'Responsible Gaming',
                'a' => 'Set limits, take breaks, and access support resources to keep gaming healthy.',
            ],
        ];
    @endphp
    <x-partials.accordion
        title="Safety & Fairness"
        subtitle="Quick answers for a smooth start on Pussy888 Malaysia."
        :items="$faqs"
        :open-index="null"
    />

    <!-- 8. Tips for New Players -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6 text-2xl font-bold">Tips for New Players</div>
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ([['t' => 'Try Demo First', 'd' => 'Learn mechanics with free demos before wagering real money.'], ['t' => 'Manage Bankroll', 'd' => 'Set a budget and stick to it for responsible play.'], ['t' => 'Know the Rules', 'd' => 'Read paytables and features to improve decisions.'], ['t' => 'Use Bonuses Smartly', 'd' => 'Check terms and wagering to maximize value.'], ['t' => 'Take Breaks', 'd' => 'Avoid chasing losses; play at a healthy pace.'], ['t' => 'Stay Secure', 'd' => 'Protect your account with strong passwords and 2FA.']] as $tip)
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <div class="text-lg font-semibold">{{ $tip['t'] }}</div>
                    <p class="mt-1 text-sm text-white/80">{{ $tip['d'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- 9. Support -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6 text-2xl font-bold">Customer Support</div>
        <div class="grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">We’re here 24/7</div>
                <p class="mt-2 text-sm text-white/80">
                    Live chat for instant help, email for detailed queries, and phone for urgent cases.
                </p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <x-partials.button href="https://lv168.com/en/register?up=luckywinwin14">Live Chat</x-partials.button>
                    <x-partials.button type="outline" href="https://lv168.com/en/register?up=luckywinwin14">Email Support</x-partials.button>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/home/24-7-support.jpg') }}"
                    alt=""
                >
            </div>
        </div>
    </div>

    <!-- 10. FAQs -->
    @php
        $faqs = [
            [
                'q' => 'How do I get the app safely?',
                'a' =>
                    'Get the app only from the official website or verified sources. For Android, download the APK and enable “Install from unknown sources.” For iOS, follow the on-screen steps to install and trust the app profile.',
            ],
            [
                'q' => 'Is the platform compatible with my device?',
                'a' =>
                    'Yes. It supports Android and iOS, and you can also play via mobile browsers without installing anything.',
            ],
            [
                'q' => 'How long do withdrawals take?',
                'a' => 'Typically within 24 hours after verification, depending on your chosen payment method.',
            ],
            [
                'q' => 'What bonuses are offered?',
                'a' =>
                    'Welcome bonuses, daily/weekly promos, and a VIP program with exclusive rewards. Always check wagering terms.',
            ],
            [
                'q' => 'Is the platform fair and safe?',
                'a' => 'Yes. It uses certified RNG for fair outcomes and SSL encryption for data security.',
            ],
            [
                'q' => 'What if I forget my login details?',
                'a' => 'Use the Forgot Password option on the login page to reset your credentials securely.',
            ],
        ];
    @endphp
    <x-partials.accordion
        title="Frequently Asked Questions (FAQs)"
        subtitle="Quick answers for a smooth start on Pussy888 Malaysia."
        :items="$faqs"
        :open-index="null"
    />

    <x-partials.download
        title="Pussy888 Malaysia – Play Safely, Win Big"
        primaryCtaText="Download App"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="Explore Games"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        <div class="text-white">
            Enjoy a huge game library (including pokies), generous bonuses (like the 100 free spins offer),
            secure payments, and responsive support—on desktop and mobile.
        </div>
    </x-partials.download>
</div>
