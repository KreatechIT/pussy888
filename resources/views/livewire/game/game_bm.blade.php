@push('title')
    Permainan
@endpush

<div class="bg-black text-white">
    <!-- Page Header -->
    <x-partials.heading title="Permainan" subtitle="Pussy888 • Kasino Dalam Talian Dipercayai • Malaysia" />
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="grid items-center gap-6 lg:grid-cols-[1.2fr_.8fr]">
            <div>
                <h1 class="text-3xl/tight font-bold sm:text-4xl/tight">
                    Terokai Permainan Pussy888 – Slot, Kasino Langsung, Permainan Meja & Banyak Lagi
                </h1>
                <p class="mt-4 text-white/80">
                    Selamat datang ke hab Permainan Pussy888 — destinasi sehenti anda untuk permainan kasino dalam
                    talian
                    paling menarik dan berbaloi di Malaysia.
                    Sama ada anda meminati slot buah klasik, permainan dealer langsung berisiko tinggi, atau slot video
                    moden
                    dengan jackpot besar,
                    Pussy888 Malaysia menawarkan permainan untuk setiap jenis pemain.
                </p>
                <p class="mt-3 text-white/80">
                    Bersedia untuk menikmati permainan premium, grafik yang mengasyikkan, dan potensi kemenangan sebenar
                    dengan pelbagai pilihan tajuk kasino kami,
                    tersedia di mudah alih dan komputer.
                </p>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-sm text-white/70">Pintasan Pantas</div>
                <div class="scroll-smooth">
                    <div class="mt-3 grid gap-2 sm:grid-cols-2">
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#slot-games"
                        >Permainan Slot</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#live-casino"
                        >Kasino Langsung</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#table-games"
                        >Permainan Meja</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#jackpot-games"
                        >Permainan Jackpot</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#mobile-desktop"
                        >Mudah Alih/Komputer</a>
                        <a class="rounded-lg border border-white/10 bg-white/[0.04] px-4 py-2 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#fair-safe"
                        >Adil & Selamat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Cards Overview -->
    <div class="mx-auto max-w-7xl px-4 pb-8">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Permainan Slot</div>
                <div class="mt-1 text-sm text-white/70">Ratusan tajuk dengan putaran percuma, pengganda & jackpot.</div>
                <div class="mt-4">
                    <a
                        class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('slot', [app()->getLocale()]) }}"
                        wire:navigate.hover
                    >Terokai →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Kasino Langsung</div>
                <div class="mt-1 text-sm text-white/70">Strim HD & dealer profesional: Baccarat, Roulette, Blackjack.
                </div>
                <div class="mt-4">
                    <a
                        class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('live-casino', [app()->getLocale()]) }}"
                        wire:navigate.hover
                    >Terokai →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Permainan Meja</div>
                <div class="mt-1 text-sm text-white/70">Klasik berstrategi dengan kawalan lancar & RNG yang adil.</div>
                <div class="mt-4">
                    <a
                        class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('table-games', [app()->getLocale()]) }}"
                        wire:navigate.hover
                    >Terokai →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Permainan Jackpot</div>
                <div class="mt-1 text-sm text-white/70">Jackpot progresif yang meningkat dengan setiap putaran.</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="#jackpot-games"
                    >Terokai →
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
                    <h2 class="text-2xl font-bold">Permainan Slot</h2>
                    <p class="mt-2 text-white/80">
                        Kategori permainan paling popular kami, slot Pussy888, menampilkan ratusan tajuk untuk
                        semua citarasa dan bajet.
                        Daripada slot 3-gulung ringkas hingga pengembaraan 5-gulung penuh ciri, setiap permainan hadir
                        dengan tema, ciri bonus, dan potensi kemenangan tersendiri.
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
                        <div class="text-2xl font-semibold text-white">Ciri Popular</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['Putaran percuma dan pusingan bonus', 'Wild, scatter, dan pengganda', 'Jackpot progresif Pussy888', 'Mod auto-play dan fast-spin', 'Visual menakjubkan dan animasi lancar'] as $feature)
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
                        <div class="text-2xl font-semibold text-white">Tajuk Slot Teratas</div>
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
                Sama ada anda memburu kemenangan kecil yang kerap atau mengejar hadiah yang mengubah hidup, slot kami
                menawarkan keseronokan tanpa henti.
            </p>
        </div>
    </div>

    <!-- Live Casino -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="live-casino">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Kasino Langsung</h2>
            <p class="mt-2 text-white/80">
                Mahukan aksi masa nyata? Kasino langsung Pussy888 membawa suasana kasino sebenar terus ke skrin anda.
                Bermain menentang dealer profesional dan mesra melalui strim definisi tinggi serta permainan interaktif.
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">Permainan Langsung Tersedia:</div>
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
                        <div class="text-2xl font-semibold text-white">Kenapa Anda Akan Suka</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['Pertaruhan masa nyata dengan keputusan segera', 'Sembang dengan dealer dan nikmati permainan sosial', 'Strim HD yang jelas', 'Main di mudah alih atau komputer dengan lancar'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <p class="mt-4 text-sm text-white/80">
                Ini hampir sama seperti berada di lantai kasino sebenar!
            </p>
        </div>
    </div>

    <!-- Table Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="table-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Permainan Meja</h2>
            <p class="mt-2 text-white/80">
                Gemarkan permainan berasaskan strategi dan kemahiran? Bahagian permainan meja di Pussy888 menawarkan
                versi digital
                kegemaran klasik.
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                            ✨
                        </div>
                        <div class="text-2xl font-semibold text-white">Mesra Pemain</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['Kawalan lancar & arahan terperinci', 'Keputusan adil berasaskan RNG', 'Sesuai untuk pemula dan pemain pro'] as $feature)
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
                        <div class="text-2xl font-semibold text-white">Permainan Meja Yang Tersedia:</div>
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
            <h2 class="text-2xl font-bold">Permainan Jackpot</h2>
            <p class="mt-2 text-white/80">
                Mahu menang besar? Cuba nasib anda pada permainan jackpot Pussy888 yang menawarkan hadiah bernilai
                tinggi.
                Slot progresif ini menambah jumlah hadiah dengan setiap putaran — semakin lama ia berjalan, semakin
                besar
                jackpotnya.
            </p>
            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Popular Features -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 text-lg font-bold text-black">
                            🎰
                        </div>
                        <div class="text-2xl font-semibold text-white">Permainan Langsung Tersedia:</div>
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
                        <div class="text-2xl font-semibold text-white">Kenapa Anda Akan Suka</div>
                    </div>
                    <div class="mt-4 space-y-2">
                        @foreach (['Pertaruhan masa nyata dengan keputusan segera', 'Sembang dengan dealer dan nikmati permainan sosial', 'Strim HD yang jelas', 'Main di mudah alih atau komputer dengan lancar'] as $feature)
                            <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                <div class="text-sm text-white/70">{{ $feature }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <p class="mt-4 text-sm text-white/80">
                Sentiasa perhatikan simbol khas dan pencetus bonus — anda tidak tahu bila anda akan mendapat
                kemenangan besar seterusnya!
            </p>
        </div>
    </div>

    <!-- Mobile / Desktop -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="mobile-desktop">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 md:p-8">
            <h2 class="text-2xl font-bold tracking-tight">Main di Mudah Alih atau Komputer</h2>
            <p class="mt-3 leading-relaxed text-white/80">
                Semua permainan Pussy888 dioptimumkan sepenuhnya untuk peranti mudah alih (Android &amp; iOS) dan
                pelayar komputer.
                Sama ada di rumah atau ketika bergerak, permainan kegemaran anda hanya satu ketikan sahaja.
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="mt-4 space-y-2">
                    @foreach (['Permainan lancar dengan kelajuan muat pantas', 'Antara muka mesra sentuhan untuk permainan mudah alih', 'Serasi dengan aplikasi mudah alih Pussy888 dan versi pelayar', 'Grafik melaras automatik untuk apa jua saiz skrin'] as $feature)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $feature }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5 md:p-6">
                    <div
                        class="inline-flex items-center rounded-full border border-white/15 bg-white/[0.04] px-3 py-1 text-xs font-medium uppercase tracking-wide text-white/70">
                        Tip Pro
                    </div>
                    <p class="mt-3 text-sm leading-relaxed text-white/80">
                        Untuk pengalaman terbaik, pastikan aplikasi anda dikemas kini dan aktifkan pecutan perkakasan
                        dalam
                        pelayar yang menyokong.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Fair & Safe -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="fair-safe">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Adil, Selamat & Diperakui</h2>
            <p class="mt-2 text-white/80">
                Setiap permainan di Pussy888 dikuasakan oleh penyedia perisian bertauliah dan menggunakan Penjana Nombor
                Rawak (RNG)
                untuk memastikan keputusan yang adil. Platform kami disulitkan dan selamat, jadi anda boleh fokus pada
                keseronokan
                sementara kami melindungi data anda.
            </p>
        </div>
    </div>

    <!-- Try Demo -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Cuba Permainan Demo</h2>
            <p class="mt-2 text-white/80">
                Tidak pasti di mana hendak bermula? Banyak permainan kami menawarkan mod demo supaya anda boleh meneroka
                ciri,
                menguji strategi, dan mempelajari peraturan — semuanya tanpa menggunakan wang sebenar.
            </p>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="Mula Bermain Hari Ini!"
        primaryCtaText="Muat Turun Pussy888"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="Lihat Semua Permainan"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        Terokai senarai penuh permainan Pussy888 dan ketahui mengapa kami antara
        kasino dalam talian kegemaran di Malaysia.
        Sama ada untuk hiburan atau keuntungan, Pussy888 memberikan kualiti dan kepelbagaian yang tiada tandingan dalam
        setiap
        putaran, tangan, dan pusingan.
    </x-partials.download>
</div>
