@push('title')
    Pussy888 Malaysia: Muat Turun, Main Slot & Live Casino | Kasino Dalam Talian Dipercayai
@endpush

@push('meta_title')
    Pussy888 Malaysia | Muat Turun & Main Kasino Dalam Talian Dipercayai
@endpush

@push('meta_description')
    Muat turun & main! Nikmati slot teratas & permainan live casino di platform dalam talian dipercayai di Malaysia. Cari
    permainan kegemaran anda sekarang!
@endpush

@push('meta_keywords')
    Pussy888, Pussy888 Malaysia, Muat Turun Pussy888, Kasino Dalam Talian Malaysia, Live Casino Malaysia, Permainan Slot
    Malaysia
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
                        Kasino Dalam Talian Dipercayai di Malaysia
                    </div>
                    <div class="mt-4 text-4xl/tight font-bold sm:text-5xl/tight">
                        Pussy888 Malaysia: Muat Turun, Main Slot &amp; Live Casino
                    </div>
                    <p class="mt-3 text-white/80">
                        Ratusan slot, dealer live HD, aplikasi mudah alih lancar, dan pembayaran selamat—dicipta khas
                        untuk pemain Malaysia.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <x-partials.button href="#">Muat Turun Aplikasi</x-partials.button>
                        <x-partials.button type="outline" href="#">Terokai</x-partials.button>
                        {{-- <a href="#"
                            class="rounded-md bg-amber-400 px-5 py-3 font-semibold text-black hover:bg-amber-300">Muat Turun
                            Aplikasi</a>
                        <a href="#games" class="rounded-md border border-white/15 px-5 py-3 hover:bg-white/5">Terokai
                            Permainan</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro / Trust -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="grid items-stretch gap-6 md:grid-cols-3">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5 md:col-span-2">
                <div class="text-xl font-semibold">Mengapa Pussy888</div>
                <p class="mt-2 text-white/75">
                    Platform terkemuka yang selamat dengan perpustakaan permainan yang luas, permainan mudah alih
                    lancar, dan pembayaran disulitkan untuk permainan wang sebenar yang selamat.
                    Dioptimumkan untuk Android &amp; iOS dengan pemasangan APK/profil iOS dan main segera dalam pelayar.
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-xl font-semibold">Ringkasan Keselamatan</div>
                <ul class="mt-3 space-y-2 text-sm text-white/80">
                    <li>• Sambungan disulitkan SSL</li>
                    <li>• Gerbang pembayaran selamat</li>
                    <li>• Permainan diperakui RNG</li>
                    <li>• Pemulihan akaun &amp; pilihan 2FA</li>
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
                <div class="text-2xl font-bold">Mula &amp; Pasang Aplikasi</div>
                <div class="text-sm text-white/70">Android (APK), profil iOS, atau main serta-merta dalam pelayar.</div>
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
                >Web Mudah Alih</button>
            </div>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                    alt=""
                >
            </div>

            <div class="space-y-4">
                <!-- Android -->
                <div x-show="tab==='android'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">Pemasangan APK Android</div>
                        <ol class="mt-2 list-decimal space-y-1 pl-5 text-sm text-white/80">
                            <li>Kunjungi laman rasmi / rakan yang dipercayai &amp; muat turun <span
                                    class="font-semibold"
                                >Pussy888 APK</span>.</li>
                            <li>Aktifkan <em>Pasang daripada sumber tidak diketahui</em> dalam Tetapan.</li>
                            <li>Buka APK dan ketik <em>Pasang</em>.</li>
                            <li>Lancarkan aplikasi untuk mendaftar atau log masuk.</li>
                        </ol>
                    </div>
                </div>

                <!-- iOS -->
                <div x-show="tab==='ios'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">Pemasangan Profil iOS</div>
                        <ol class="mt-2 list-decimal space-y-1 pl-5 text-sm text-white/80">
                            <li>Buka Safari dan lawati laman rasmi.</li>
                            <li>I ikut arahan untuk menambah profil aplikasi iOS.</li>
                            <li>Pergi ke <em>Tetapan &gt; Umum &gt; Profil &amp; Pengurusan Peranti</em> dan
                                <em>Percaya</em> profil tersebut.
                            </li>
                            <li>Lancarkan aplikasi dan log masuk.</li>
                        </ol>
                    </div>
                </div>

                <!-- Web -->
                <div x-show="tab==='web'" x-transition>
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                        <div class="text-lg font-semibold">Main Segera (Web Mudah Alih)</div>
                        <p class="mt-2 text-sm text-white/80">
                            Guna pelayar mudah alih anda—tiada pemasangan diperlukan. Kebanyakan permainan dan ciri
                            tersedia serta-merta.
                        </p>
                    </div>
                </div>

                <!-- Safety tips -->
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-lg font-semibold">Elakkan Aplikasi Palsu</div>
                    <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-white/80">
                        <li>Muat turun hanya daripada laman rasmi atau rakan yang disahkan.</li>
                        <li>Waspada cermin pihak ketiga; semak keizinan aplikasi.</li>
                        <li>Pastikan kemas kini keselamatan peranti diaktifkan.</li>
                    </ul>
                </div>

                <div class="flex gap-3">
                    <x-partials.button href="#">Muat Turun
                        APK</x-partials.button>
                    <x-partials.button type="outline" href="#">Dapatkan Aplikasi
                        iOS</x-partials.button>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Registration & Login (Steps) -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="register">
        <div class="mb-6">
            <div class="text-2xl font-bold">Pendaftaran &amp; Log Masuk</div>
            <div class="text-sm text-white/70">Cipta akaun anda dalam beberapa minit, kemudian aktifkan keselamatan
                tambahan.</div>
        </div>
        <div class="grid gap-4 md:grid-cols-4">
            @foreach ([['t' => 'Daftar', 'd' => 'Ketik Daftar dan lengkapkan nama pengguna, kata laluan, telefon, e-mel.'], ['t' => 'Sahkan', 'd' => 'Sahkan melalui SMS/e-mel jika diminta.'], ['t' => 'Log Masuk', 'd' => 'Masukkan kelayakan anda. Pilih Ingat Saya jika perlu.'], ['t' => 'Selamat', 'd' => 'Aktifkan 2FA jika tersedia, dan tetapkan kata laluan kukuh.']] as $s)
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
                { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Dragon Treasure' },
                { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Golden Fist' },
                { img: '{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}', t: 'Safari Life' }
            ]
        }"
    >
        <div class="mb-6 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Terokai Perpustakaan Permainan</div>
                <div class="text-sm text-white/70">Slot, Live Casino, dan permainan Meja/Khas.</div>
            </div>
            <div class="hidden gap-2 sm:flex">
                <button
                    class="rounded-md px-3 py-2 text-sm"
                    @click="cat='slots'"
                    :class="cat === 'slots' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' :
                        'border border-white/15 hover:bg-white/5'"
                >Slot</button>
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
                >Meja &amp; Khas</button>
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
                                        Ciri: Putaran Percuma • Pengganda • Jackpot
                                    </div>
                                    <div
                                        class="text-xs text-white/70"
                                        x-cloak
                                        x-show="cat==='live'"
                                    >
                                        Strim HD • Dealer Sebenar • Baccarat/Roulette/Blackjack
                                    </div>
                                    <div
                                        class="text-xs text-white/70"
                                        x-cloak
                                        x-show="cat==='table'"
                                    >
                                        Poker • Sic Bo • Dan lain-lain
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
                    <div class="text-lg font-semibold">Permainan Slot</div>
                    <p class="mt-2 text-sm text-white/80">
                        Ratusan slot bertema dengan putaran percuma, pengganda, pusingan bonus, dan jackpot progresif.
                        Cuba kegemaran seperti <em>Dragon Treasure</em>, <em>Golden Fist</em>, dan <em>Safari Life</em>.
                    </p>
                </div>

                <div
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5"
                    x-cloak
                    x-show="cat==='live'"
                    x-transition
                >
                    <div class="text-lg font-semibold">Dealer Langsung</div>
                    <p class="mt-2 text-sm text-white/80">
                        Strim HD masa nyata untuk Baccarat, Roulette, dan Blackjack dengan sembang interaktif dan dealer
                        profesional.
                    </p>
                </div>

                <div
                    class="rounded-2xl border border-white/10 bg-white/[0.03] p-5"
                    x-cloak
                    x-show="cat==='table'"
                    x-transition
                >
                    <div class="text-lg font-semibold">Meja &amp; Khas</div>
                    <p class="mt-2 text-sm text-white/80">
                        Poker, Sic Bo, dan banyak lagi permainan pantas untuk sesi ringkas dan strategi klasik.
                    </p>
                </div>

                <div class="flex gap-3">
                    <x-partials.button href="#">Main Sekarang</x-partials.button>
                    <x-partials.button type="outline" href="#">Lihat Semua Permainan</x-partials.button>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. Bonuses & Promotions -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="promos">
        <div class="mb-6 text-2xl font-bold">Bonus &amp; Promosi</div>
        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-amber-500/20 to-pink-500/10 p-5">
                <div class="text-lg font-semibold">Bonus Selamat Datang</div>
                <p class="mt-1 text-sm text-white/80">Deposit dipadankan untuk pengguna baharu. Semak peraturan
                    pertaruhan sebelum menuntut.</p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Cashback &amp; Muat Semula</div>
                <p class="mt-1 text-sm text-white/80">Rebat harian, tawaran muat semula, dan promosi bermusim.</p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Program VIP</div>
                <p class="mt-1 text-sm text-white/80">Had lebih tinggi, pengeluaran lebih pantas, dan kejohanan
                    eksklusif.</p>
            </div>
        </div>
    </div>

    <!-- 6. Payments -->
    <div class="mx-auto max-w-7xl px-4 py-10" id="payments">
        <div class="mb-6 text-2xl font-bold">Kaedah Pembayaran &amp; Pengeluaran</div>
        <div class="grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Mesra Tempatan &amp; E-Dompet</div>
                <p class="mt-2 text-sm text-white/80">
                    Deposit melalui pemindahan bank tempatan, Touch 'n Go, Boost, GrabPay, dan gerbang dipercayai untuk
                    tambah nilai pantas.
                </p>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Pengeluaran Pantas</div>
                <p class="mt-2 text-sm text-white/80">
                    Had dan pengesahan telus—kebanyakan pengeluaran dalam masa 24 jam (bergantung kaedah).
                </p>
            </div>
        </div>
    </div>

    <!-- 7. Safety & Fairness (Accordion) -->
    <div class="mx-auto max-w-7xl px-4 py-10" x-data="{ a1: true, a2: false, a3: false }">
        <div class="mb-6 text-2xl font-bold">Keselamatan &amp; Keadilan</div>
        <div class="space-y-3">
            <div class="overflow-hidden rounded-2xl border border-white/10">
                <button class="flex w-full items-center justify-between bg-white/[0.03] px-4 py-3" @click="a1=!a1">
                    <span class="text-left font-semibold">Penyulitan &amp; Perlindungan Akaun</span>
                    <span class="transition" :class="a1 ? 'rotate-180' : ''">⌄</span>
                </button>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="a1"
                    x-transition
                >
                    SSL piawaian industri, kata laluan kukuh, dan 2FA pilihan membantu melindungi akaun serta data anda.
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10">
                <button class="flex w-full items-center justify-between bg-white/[0.03] px-4 py-3" @click="a2=!a2">
                    <span class="text-left font-semibold">Pensijilan RNG &amp; Audit</span>
                    <span class="transition" :class="a2 ? 'rotate-180' : ''">⌄</span>
                </button>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="a2"
                    x-transition
                >
                    Permainan diperakui RNG memastikan keputusan tidak berat sebelah; audit pihak ketiga mengukuhkan
                    keadilan.
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10">
                <button class="flex w-full items-center justify-between bg-white/[0.03] px-4 py-3" @click="a3=!a3">
                    <span class="text-left font-semibold">Perjudian Bertanggungjawab</span>
                    <span class="transition" :class="a3 ? 'rotate-180' : ''">⌄</span>
                </button>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="a3"
                    x-transition
                >
                    Tetapkan had, ambil rehat, dan akses sumber sokongan untuk memastikan permainan kekal sihat.
                </div>
            </div>
        </div>
    </div>

    <!-- 8. Tips for New Players -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6 text-2xl font-bold">Petua untuk Pemain Baharu</div>
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ([['t' => 'Cuba Demo Dahulu', 'd' => 'Pelajari mekanik dengan demo percuma sebelum pertaruhan wang sebenar.'], ['t' => 'Urus Bankroll', 'd' => 'Tetapkan bajet dan patuhi untuk permainan bertanggungjawab.'], ['t' => 'Ketahui Peraturan', 'd' => 'Baca jadual pembayaran dan ciri untuk membuat keputusan lebih baik.'], ['t' => 'Guna Bonus dengan Bijak', 'd' => 'Semak terma dan pertaruhan untuk memaksimumkan nilai.'], ['t' => 'Ambil Rehat', 'd' => 'Elak mengejar kerugian; bermain pada kadar yang sihat.'], ['t' => 'Kekal Selamat', 'd' => 'Lindungi akaun anda dengan kata laluan kukuh dan 2FA.']] as $tip)
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                    <div class="text-lg font-semibold">{{ $tip['t'] }}</div>
                    <p class="mt-1 text-sm text-white/80">{{ $tip['d'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- 9. Support -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6 text-2xl font-bold">Sokongan Pelanggan</div>
        <div class="grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Kami tersedia 24/7</div>
                <p class="mt-2 text-sm text-white/80">
                    Sembang langsung untuk bantuan segera, e-mel untuk pertanyaan terperinci, dan telefon untuk kes
                    mendesak.
                </p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <x-partials.button href="#">Sembang Langsung</x-partials.button>
                    <x-partials.button type="outline" href="#">Sokongan E-mel</x-partials.button>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                    alt=""
                >
            </div>
        </div>
    </div>

    <div
        class="mx-auto max-w-7xl px-4 py-10"
        id="faqs"
        x-data="{ open: 0 }"
    >

        <div class="mb-6">
            <div class="text-2xl font-bold">Soalan Lazim (FAQ)</div>
            <div class="text-sm text-white/70">Jawapan pantas untuk permulaan yang lancar di Pussy888 Malaysia.</div>
        </div>

        <div class="space-y-3">

            <!-- Q1 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img
                        class="size-8 rounded object-cover"
                        src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        alt=""
                    >
                    <button class="flex w-full items-center justify-between text-left"
                        @click="open = open===1 ? 0 : 1"
                    >
                        <div class="font-semibold">Bagaimana saya mendapatkan aplikasi dengan selamat?</div>
                        <span class="transition" :class="open === 1 ? 'rotate-180' : ''">⌄</span>
                    </button>
                </div>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="open===1"
                    x-transition
                >
                    Dapatkan aplikasi hanya dari laman rasmi atau sumber yang disahkan. Untuk Android, muat turun APK
                    dan aktifkan
                    “Pasang daripada sumber tidak diketahui.” Untuk iOS, ikut langkah pada skrin untuk pasang dan
                    percayai profil aplikasi.
                </div>
            </div>

            <!-- Q2 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img
                        class="size-8 rounded object-cover"
                        src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        alt=""
                    >
                    <button class="flex w-full items-center justify-between text-left"
                        @click="open = open===2 ? 0 : 2"
                    >
                        <div class="font-semibold">Adakah platform serasi dengan peranti saya?</div>
                        <span class="transition" :class="open === 2 ? 'rotate-180' : ''">⌄</span>
                    </button>
                </div>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="open===2"
                    x-transition
                >
                    Ya. Ia menyokong Android dan iOS, dan anda juga boleh bermain melalui pelayar mudah alih tanpa
                    pemasangan.
                </div>
            </div>

            <!-- Q3 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img
                        class="size-8 rounded object-cover"
                        src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        alt=""
                    >
                    <button class="flex w-full items-center justify-between text-left"
                        @click="open = open===3 ? 0 : 3"
                    >
                        <div class="font-semibold">Berapa lama masa diambil untuk pengeluaran?</div>
                        <span class="transition" :class="open === 3 ? 'rotate-180' : ''">⌄</span>
                    </button>
                </div>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="open===3"
                    x-transition
                >
                    Biasanya dalam masa 24 jam selepas pengesahan, bergantung kepada kaedah pembayaran yang dipilih.
                </div>
            </div>

            <!-- Q4 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img
                        class="size-8 rounded object-cover"
                        src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        alt=""
                    >
                    <button class="flex w-full items-center justify-between text-left"
                        @click="open = open===4 ? 0 : 4"
                    >
                        <div class="font-semibold">Apakah bonus yang ditawarkan?</div>
                        <span class="transition" :class="open === 4 ? 'rotate-180' : ''">⌄</span>
                    </button>
                </div>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="open===4"
                    x-transition
                >
                    Bonus selamat datang, promosi harian/mingguan, dan program VIP dengan ganjaran eksklusif. Sentiasa
                    semak terma pertaruhan.
                </div>
            </div>

            <!-- Q5 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img
                        class="size-8 rounded object-cover"
                        src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        alt=""
                    >
                    <button class="flex w-full items-center justify-between text-left"
                        @click="open = open===5 ? 0 : 5"
                    >
                        <div class="font-semibold">Adakah platform ini adil dan selamat?</div>
                        <span class="transition" :class="open === 5 ? 'rotate-180' : ''">⌄</span>
                    </button>
                </div>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="open===5"
                    x-transition
                >
                    Ya. Ia menggunakan RNG yang diperakui untuk keputusan adil dan penyulitan SSL untuk keselamatan
                    data.
                </div>
            </div>

            <!-- Q6 -->
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="flex items-center gap-3 px-4 py-3">
                    <img
                        class="size-8 rounded object-cover"
                        src="{{ asset('assets/frontend/images/placeholder/800x450.jpg') }}"
                        alt=""
                    >
                    <button class="flex w-full items-center justify-between text-left"
                        @click="open = open===6 ? 0 : 6"
                    >
                        <div class="font-semibold">Bagaimana jika saya terlupa butiran log masuk?</div>
                        <span class="transition" :class="open === 6 ? 'rotate-180' : ''">⌄</span>
                    </button>
                </div>
                <div
                    class="px-4 pb-4 text-sm text-white/80"
                    x-show="open===6"
                    x-transition
                >
                    Guna pilihan <em>Lupa Kata Laluan</em> di halaman log masuk untuk menetapkan semula kelayakan anda
                    dengan selamat.
                </div>
            </div>

        </div>

    </div>

    <div class="text-white" id="cta">
        <div class="mx-auto max-w-7xl px-4 py-12">
            <div class="grid items-center gap-6 md:grid-cols-3">
                <div class="md:col-span-2">
                    <div class="text-2xl font-bold">Pussy888 Malaysia – Bermain dengan Selamat, Menang Besar</div>
                    <div class="mt-2 text-white/80">
                        Nikmati perpustakaan permainan yang besar (termasuk pokies), bonus murah hati (seperti tawaran
                        100 putaran percuma),
                        pembayaran selamat, dan sokongan responsif—di desktop dan mudah alih.
                    </div>
                    <div class="mt-4 flex flex-wrap gap-3">
                        <x-partials.button href="#">Muat Turun Aplikasi</x-partials.button>
                        <x-partials.button type="outline" href="#">Cipta Akaun</x-partials.button>
                        <x-partials.button type="outline" href="#">Terokai Permainan</x-partials.button>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/5">
                    <!-- Interactive placeholder image (swap later) -->
                    <img
                        class="h-full w-full object-cover"
                        src="{{ asset('assets/frontend/images/qr-code.jpeg') }}"
                        alt="Kod QR"
                    >
                </div>
            </div>
        </div>
    </div>
</div>
