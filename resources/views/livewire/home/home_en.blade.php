<div>
    <!-- Hero -->
    <div class="relative">
        <img src="{{ asset('assets/frontend/images/hero.png') }}" alt="Pussy888 Malaysia"
            class="h-[520px] w-full object-cover opacity-30">
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
                        <x-partials.button href="#">Download
                            App</x-partials.button>
                        <x-partials.button type="outline" href="#">Explore</x-partials.button>
                        {{-- <a href="#"
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
            <div class="md:col-span-2 rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-xl font-semibold">Why Pussy888</div>
                <p class="mt-2 text-white/75">
                    A leading, secure platform with a vast game library, smooth mobile play, and encrypted payments for
                    safe, real-money gaming.
                    Optimized for Android &amp; iOS with APK/iOS profile install and instant browser play.
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-xl font-semibold">Security Snapshot</div>
                <ul class="mt-3 space-y-2 text-white/80 text-sm">
                    <li>• SSL-encrypted connections</li>
                    <li>• Secure payment gateways</li>
                    <li>• RNG-certified games</li>
                    <li>• Account recovery &amp; 2FA options</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- 2. Get Started & Install (Tabs) -->
    <div class="mx-auto max-w-7xl px-4 py-10" x-data="{ tab: 'android' }" id="download">
        <div class="mb-6 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Get Started &amp; Install the App</div>
                <div class="text-sm text-white/70">Android (APK), iOS profile, or play instantly in browser.</div>
            </div>
            <div class="hidden gap-2 sm:flex">
                <button @click="tab='android'"
                    :class="tab === 'android' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                    class="rounded-md px-3 py-2 text-sm">Android</button>
                <button @click="tab='ios'"
                    :class="tab === 'ios' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                    class="rounded-md px-3 py-2 text-sm">iOS</button>
                <button @click="tab='web'"
                    :class="tab === 'web' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                    class="rounded-md px-3 py-2 text-sm">Mobile Web</button>
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <img src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                    class="h-full w-full object-cover" alt="">
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
                    <x-partials.button href="#">Download
                        APK</x-partials.button>
                    <x-partials.button type="outline" href="#">Get iOS
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
    <div class="mx-auto max-w-7xl px-4 py-10" id="games" x-data="{
        cat: 'slots',
        slide: 0,
        items: [
            { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Dragon Treasure' },
            { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Golden Fist' },
            { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Safari Life' }
        ]
    }">
        <div class="mb-6 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Explore the Game Library</div>
                <div class="text-sm text-white/70">Slots, Live Casino, and Table/Specialty games.</div>
            </div>
            <div class="hidden gap-2 sm:flex">
                <button @click="cat='slots'"
                    :class="cat === 'slots' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                    class="rounded-md px-3 py-2 text-sm">Slots</button>
                <button @click="cat='live'"
                    :class="cat === 'live' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                    class="rounded-md px-3 py-2 text-sm">Live Casino</button>
                <button @click="cat='table'"
                    :class="cat === 'table' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                    class="rounded-md px-3 py-2 text-sm">Table &amp; Specialty</button>
            </div>
        </div>

        <!-- Tabs content -->
        <div class="grid gap-6 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <!-- Simple slider -->
                <div class="relative">
                    <template x-for="(card, idx) in items" :key="idx">
                        <div x-show="slide===idx" x-transition class="relative">
                            <img :src="card.img" class="h-full w-full object-cover" :alt="card.t">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                <div class="text-lg font-semibold" x-text="card.t"></div>
                                <div class="text-xs text-white/70" x-show="cat==='slots'">Features: Free Spins •
                                    Multipliers • Jackpots</div>
                                <div class="text-xs text-white/70" x-show="cat==='live'">HD Streams • Real Dealers •
                                    Baccarat/Roulette/Blackjack</div>
                                <div class="text-xs text-white/70" x-show="cat==='table'">Poker • Sic Bo • And more
                                </div>
                            </div>
                        </div>
                    </template>

                    <!-- Controls -->
                    <div class="absolute inset-x-0 top-1/2 flex -translate-y-1/2 items-center justify-between px-2">
                        <button class="rounded-md bg-black/50 p-2 ring-1 ring-white/10 hover:bg-black/70"
                            @click="slide = (slide - 1 + items.length) % items.length" aria-label="Prev">
                            ‹
                        </button>
                        <button class="rounded-md bg-black/50 p-2 ring-1 ring-white/10 hover:bg-black/70"
                            @click="slide = (slide + 1) % items.length" aria-label="Next">
                            ›
                        </button>
                    </div>

                    <!-- Dots -->
                    <div class="absolute bottom-3 left-0 right-0 flex justify-center gap-2">
                        <template x-for="(dot, i) in items" :key="'d' + i">
                            <button @click="slide=i" class="size-2 rounded-full"
                                :class="slide === i ? 'bg-purple-400' : 'bg-white/40'"></button>
                        </template>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div x-show="cat==='slots'" x-transition
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <div class="text-lg font-semibold">Slot Games</div>
                    <p class="mt-2 text-sm text-white/80">
                        Hundreds of themed slots with free spins, multipliers, bonus rounds, and progressive jackpots.
                        Try favorites like <em>Dragon Treasure</em>, <em>Golden Fist</em>, and <em>Safari Life</em>.
                    </p>
                </div>
                <div x-show="cat==='live'" x-transition
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <div class="text-lg font-semibold">Live Dealer</div>
                    <p class="mt-2 text-sm text-white/80">
                        Real-time HD streams for Baccarat, Roulette, and Blackjack with interactive chat and pro
                        dealers.
                    </p>
                </div>
                <div x-show="cat==='table'" x-transition
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <div class="text-lg font-semibold">Table &amp; Specialty</div>
                    <p class="mt-2 text-sm text-white/80">
                        Poker, Sic Bo, and more fast-paced games for quick sessions and classic strategies.
                    </p>
                </div>

                <div class="flex gap-3">
                    <x-partials.button href="#">Play Now</x-partials.button>
                    <x-partials.button type="outline" href="#">View All Games</x-partials.button>
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
    <div class="mx-auto max-w-7xl px-4 py-10" x-data="{ a1: true, a2: false, a3: false }">
        <div class="mb-6 text-2xl font-bold">Safety &amp; Fairness</div>
        <div class="space-y-3">
            <div class="overflow-hidden rounded-2xl border border-white/10">
                <button @click="a1=!a1" class="flex w-full items-center justify-between bg-white/[0.03] px-4 py-3">
                    <span class="text-left font-semibold">Encryption &amp; Account Protection</span>
                    <span :class="a1 ? 'rotate-180' : ''" class="transition">⌄</span>
                </button>
                <div x-show="a1" x-transition class="px-4 pb-4 text-sm text-white/80">
                    Industry-standard SSL, strong passwords, and optional 2FA help secure your account and data.
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10">
                <button @click="a2=!a2" class="flex w-full items-center justify-between bg-white/[0.03] px-4 py-3">
                    <span class="text-left font-semibold">RNG Certification &amp; Audits</span>
                    <span :class="a2 ? 'rotate-180' : ''" class="transition">⌄</span>
                </button>
                <div x-show="a2" x-transition class="px-4 pb-4 text-sm text-white/80">
                    RNG-certified games ensure unbiased outcomes; third-party audits reinforce fairness.
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10">
                <button @click="a3=!a3" class="flex w-full items-center justify-between bg-white/[0.03] px-4 py-3">
                    <span class="text-left font-semibold">Responsible Gaming</span>
                    <span :class="a3 ? 'rotate-180' : ''" class="transition">⌄</span>
                </button>
                <div x-show="a3" x-transition class="px-4 pb-4 text-sm text-white/80">
                    Set limits, take breaks, and access support resources to keep gaming healthy.
                </div>
            </div>
        </div>
    </div>

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
                    <x-partials.button href="#">Live Chat</x-partials.button>
                    <x-partials.button type="outline" href="#">Email Support</x-partials.button>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <img src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                    class="h-full w-full object-cover" alt="">
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 py-10" x-data="{ open: 0 }" id="faqs">

        <div class="mb-6">
            <div class="text-2xl font-bold">Frequently Asked Questions (FAQs)</div>
            <div class="text-sm text-white/70">Quick answers for a smooth start on Pussy888 Malaysia.</div>
        </div>

        <div class="space-y-3">

            <!-- Q1 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        class="size-8 rounded object-cover" alt="">
                    <button @click="open = open===1 ? 0 : 1"
                        class="flex w-full items-center justify-between text-left">
                        <div class="font-semibold">How do I get the app safely?</div>
                        <span :class="open === 1 ? 'rotate-180' : ''" class="transition">⌄</span>
                    </button>
                </div>
                <div x-show="open===1" x-transition class="px-4 pb-4 text-sm text-white/80">
                    Get the app only from the official website or verified sources. For Android, download the APK
                    and enable
                    “Install from unknown sources.” For iOS, follow the on-screen steps to install and trust the app
                    profile.
                </div>
            </div>

            <!-- Q2 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        class="size-8 rounded object-cover" alt="">
                    <button @click="open = open===2 ? 0 : 2"
                        class="flex w-full items-center justify-between text-left">
                        <div class="font-semibold">Is the platform compatible with my device?</div>
                        <span :class="open === 2 ? 'rotate-180' : ''" class="transition">⌄</span>
                    </button>
                </div>
                <div x-show="open===2" x-transition class="px-4 pb-4 text-sm text-white/80">
                    Yes. It supports Android and iOS, and you can also play via mobile browsers without installing
                    anything.
                </div>
            </div>

            <!-- Q3 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        class="size-8 rounded object-cover" alt="">
                    <button @click="open = open===3 ? 0 : 3"
                        class="flex w-full items-center justify-between text-left">
                        <div class="font-semibold">How long do withdrawals take?</div>
                        <span :class="open === 3 ? 'rotate-180' : ''" class="transition">⌄</span>
                    </button>
                </div>
                <div x-show="open===3" x-transition class="px-4 pb-4 text-sm text-white/80">
                    Typically within 24 hours after verification, depending on your chosen payment method.
                </div>
            </div>

            <!-- Q4 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        class="size-8 rounded object-cover" alt="">
                    <button @click="open = open===4 ? 0 : 4"
                        class="flex w-full items-center justify-between text-left">
                        <div class="font-semibold">What bonuses are offered?</div>
                        <span :class="open === 4 ? 'rotate-180' : ''" class="transition">⌄</span>
                    </button>
                </div>
                <div x-show="open===4" x-transition class="px-4 pb-4 text-sm text-white/80">
                    Welcome bonuses, daily/weekly promos, and a VIP program with exclusive rewards. Always check
                    wagering terms.
                </div>
            </div>

            <!-- Q5 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        class="size-8 rounded object-cover" alt="">
                    <button @click="open = open===5 ? 0 : 5"
                        class="flex w-full items-center justify-between text-left">
                        <div class="font-semibold">Is the platform fair and safe?</div>
                        <span :class="open === 5 ? 'rotate-180' : ''" class="transition">⌄</span>
                    </button>
                </div>
                <div x-show="open===5" x-transition class="px-4 pb-4 text-sm text-white/80">
                    Yes. It uses certified RNG for fair outcomes and SSL encryption for data security.
                </div>
            </div>

            <!-- Q6 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        class="size-8 rounded object-cover" alt="">
                    <button @click="open = open===6 ? 0 : 6"
                        class="flex w-full items-center justify-between text-left">
                        <div class="font-semibold">What if I forget my login details?</div>
                        <span :class="open === 6 ? 'rotate-180' : ''" class="transition">⌄</span>
                    </button>
                </div>
                <div x-show="open===6" x-transition class="px-4 pb-4 text-sm text-white/80">
                    Use the <em>Forgot Password</em> option on the login page to reset your credentials securely.
                </div>
            </div>

        </div>

    </div>

    <div class="text-white" id="cta">
        <div class="mx-auto max-w-7xl px-4 py-12">
            <div class="grid items-center gap-6 md:grid-cols-3">
                <div class="md:col-span-2">
                    <div class="text-2xl font-bold">Pussy888 Malaysia – Play Safely, Win Big</div>
                    <div class="mt-2 text-white/80">
                        Enjoy a huge game library (including pokies), generous bonuses (like the 100 free spins offer),
                        secure payments, and responsive support—on desktop and mobile.
                    </div>
                    <div class="mt-4 flex flex-wrap gap-3">
                        <x-partials.button href="#">Download App</x-partials.button>
                        <x-partials.button type="outline" href="#">Create Account</x-partials.button>
                        <x-partials.button type="outline" href="#">Explore Games</x-partials.button>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                    <!-- Interactive placeholder image (swap later) -->
                    <img src="{{ asset('assets/frontend/images/qr-code.jpeg') }}" alt="QR Code"
                        class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </div>
</div>
