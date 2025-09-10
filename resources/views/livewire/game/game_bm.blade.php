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
                    paling mengujakan dan berbaloi di Malaysia.
                    Sama ada anda meminati slot buah klasik, permainan dealer langsung berstak tinggi, atau slot video
                    moden
                    dengan jackpot besar,
                    Pussy888 Malaysia menawarkan permainan untuk setiap jenis pemain.
                </p>
                <p class="mt-3 text-white/80">
                    Bersedia untuk menikmati permainan premium, grafik yang imersif, dan potensi kemenangan sebenar
                    dengan
                    pilihan judul kasino kami yang luas,
                    tersedia di mudah alih dan desktop.
                </p>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-sm text-white/70">Lompat Pantas</div>
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
                        >Mudah Alih/Desktop</a>
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
                <div class="mt-1 text-sm text-white/70">Ratusan judul dengan putaran percuma, pengganda & jackpot.</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('slot', [app()->getLocale()]) }}" wire:navigate.hover>Terokai →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Kasino Langsung</div>
                <div class="mt-1 text-sm text-white/70">Strim HD & dealer profesional: Baccarat, Roulette, Blackjack.
                </div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('live-casino', [app()->getLocale()]) }}" wire:navigate.hover
                    >Terokai →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Permainan Meja</div>
                <div class="mt-1 text-sm text-white/70">Klasik strategi dengan kawalan lancar & RNG yang adil.</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('table-games', [app()->getLocale()]) }}" wire:navigate.hover
                    >Terokai →
                    </a>
                </div>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5">
                <div class="text-lg font-semibold">Permainan Jackpot</div>
                <div class="mt-1 text-sm text-white/70">Kolam progresif yang meningkat dengan setiap putaran.</div>
                <div class="mt-4">
                    <a class="inline-flex items-center gap-1 text-sm text-purple-300 hover:underline"
                        href="{{ route('jackpot', [app()->getLocale()]) }}" wire:navigate.hover
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
                        Kategori paling popular kami, permainan slot Pussy888, menampilkan ratusan judul yang direka
                        untuk semua citarasa dan bajet.
                        Dari slot 3-gulung ringkas hingga pengembaraan 5-gulung sarat ciri, setiap permainan hadir
                        dengan tema, ciri bonus dan potensi kemenangan tersendiri.
                    </p>
                </div>
            </div>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Ciri Popular:</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Putaran percuma dan pusingan bonus</li>
                        <li>Wild, scatter dan pengganda</li>
                        <li>Jackpot progresif Pussy888</li>
                        <li>Mod auto-play dan putaran pantas</li>
                        <li>Visual menakjubkan dan animasi lancar</li>
                    </ul>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Tajuk Slot Teratas:</div>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach (['Safari Life', 'Great Blue', 'Panther Moon', 'Highway Kings', 'Bonus Bear'] as $title)
                            <div class="rounded-lg border border-white/10 bg-white/[0.04] px-3 py-1.5 text-sm">
                                {{ $title }}</div>
                        @endforeach
                    </div>
                    <p class="mt-4 text-sm text-white/80">
                        Sama ada anda memburu kemenangan kecil yang kerap atau mengejar bayaran yang mengubah hidup,
                        slot kami menawarkan
                        keseronokan tanpa henti.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Live Casino -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="live-casino">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Kasino Langsung</h2>
            <p class="mt-2 text-white/80">
                Mahukan aksi masa nyata? Kasino langsung Pussy888 membawa suasana kasino sebenar terus ke skrin anda.
                Bermain menentang dealer profesional dan mesra melalui strim definisi tinggi dan permainan interaktif.
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Permainan Langsung Tersedia:</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Baccarat Langsung</li>
                        <li>Blackjack Langsung</li>
                        <li>Roulette Langsung</li>
                        <li>Sic Bo</li>
                        <li>Dragon Tiger</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Kenapa Anda Akan Suka</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Pertaruhan masa nyata dengan keputusan segera</li>
                        <li>Berbual dengan dealer & nikmati permainan sosial</li>
                        <li>Strim HD yang jelas</li>
                        <li>Main lancar di mudah alih atau desktop</li>
                    </ul>
                    <p class="mt-3 text-sm text-white/70">Pengalaman paling hampir dengan lantai kasino sebenar!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="table-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Permainan Meja</h2>
            <p class="mt-2 text-white/80">
                Gemar permainan strategi & kemahiran? Bahagian permainan meja di Pussy888 menawarkan versi digital
                bagi pilihan klasik kegemaran.
            </p>

            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Permainan Meja Yang Ada:</div>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach (['Blackjack', 'Roulette', 'Poker', 'Sic Bo', 'Three Card Brag'] as $g)
                            <div class="rounded-lg border border-white/10 bg-white/[0.04] px-3 py-1.5 text-sm">
                                {{ $g }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="font-semibold">Mesra Pemain</div>
                    <ul class="mt-3 space-y-2 text-sm text-white/80">
                        <li>Kawalan lancar & arahan terperinci</li>
                        <li>Keputusan adil berasaskan RNG</li>
                        <li>Sesuai untuk pemula dan pro</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Jackpot Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="jackpot-games">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Permainan Jackpot</h2>
            <p class="mt-2 text-white/80">
                Mahu menang besar? Cuba nasib anda pada permainan jackpot Pussy888 yang menawarkan hadiah mengubah
                hidup.
                Slot progresif ini menambah nilai kolam hadiah dengan setiap putaran — lebih lama ia berjalan, lebih
                besar
                jackpotnya.
            </p>
            <p class="mt-3 text-white/80">
                Perhatikan simbol khas dan pencetus bonus — anda tidak tahu bila kemenangan besar seterusnya akan tiba!
            </p>
        </div>
    </div>

    <!-- Mobile / Desktop -->
    <div class="mx-auto max-w-7xl px-4 pb-10" id="mobile-desktop">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-2xl font-bold">Main di Mudah Alih atau Desktop</h2>
            <p class="mt-2 text-white/80">
                Semua permainan Pussy888 dioptimumkan sepenuhnya untuk peranti mudah alih (Android & iOS) dan pelayar
                desktop.
                Sama ada di rumah atau dalam perjalanan, permainan kegemaran anda hanya selangkah sahaja.
            </p>

            <div class="mt-4 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <ul class="space-y-2 text-sm text-white/80">
                        <li>Permainan lancar dengan kelajuan muat pantas</li>
                        <li>Antara muka mesra sentuhan untuk permainan mudah alih</li>
                        <li>Serasi dengan aplikasi dan versi pelayar Pussy888</li>
                        <li>Grafik melaras automatik untuk sebarang saiz skrin</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="text-sm text-white/70">Tip Pro</div>
                    <p class="mt-2 text-sm text-white/80">
                        Untuk pengalaman terbaik, pastikan aplikasi anda dikemas kini dan aktifkan pecutan perkakasan
                        dalam pelayar yang disokong.
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
                Setiap permainan di Pussy888 dikuasakan oleh penyedia perisian yang diperakui dan menggunakan Penjana
                Nombor Rawak
                (RNG)
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
                Tidak pasti mahu mula di mana? Banyak permainan kami menawarkan mod demo supaya anda boleh meneroka
                ciri,
                menguji strategi dan mempelajari peraturan — semuanya tanpa membelanjakan wang sebenar.
            </p>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="Mula Bermain Hari Ini!"
        primaryCtaText="Muat Turun Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="Lihat Semua Permainan"
        secondaryCtaLink="#"
    >
        Terokai senarai penuh permainan Pussy888 dan ketahui mengapa kami antara kasino dalam talian
        kegemaran Malaysia.
        Sama ada untuk hiburan atau keuntungan, Pussy888 menawarkan kualiti dan variasi tiada tandingan pada setiap
        putaran, tangan, dan pusingan.
    </x-partials.download>
</div>
