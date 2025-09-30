<div class="bg-black text-white">
    <!-- Header -->
    <x-partials.heading title="Jackpot" subtitle="Pussy888 • Kasino Dalam Talian Dipercayai • Malaysia" />
    <!-- Page Heading -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-6">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs ring-1 ring-white/15">
                🎰 <span>Hab Jackpot</span>
            </div>
            <div class="mt-3 text-3xl/tight font-bold sm:text-4xl/tight">
                Jackpot Pussy888 – Putar Besar, Menang Lebih Besar!
            </div>
            <div class="mt-4 max-w-3xl text-white/80">
                Selamat datang ke dunia jackpot Pussy888, di mana setiap putaran berpotensi menjadi detik yang mengubah
                hidup.
                Di Pussy888 Malaysia, kami menawarkan pelbagai slot jackpot progresif dan permainan jackpot tetap yang
                menarik
                memberi anda peluang untuk memenangi hadiah wang tunai besar — semuanya dari keselesaan peranti mudah
                alih anda.
                Jika anda mencari keseronokan terbaik dalam permainan kasino dalam talian, bahagian jackpot adalah
                tempat di mana
                keseronokan terbesar berada.
            </div>
        </div>
    </div>

    <!-- What Are Jackpot Games? -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Apakah Permainan Jackpot?</div>
            <div class="mt-3 max-w-3xl text-white/80">
                Permainan jackpot ialah permainan slot khas di mana hadiah jauh lebih tinggi daripada bayaran slot
                biasa.
                Permainan ini datang dalam dua jenis utama:
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <!-- Fixed Jackpots -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="flex items-center gap-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-emerald-500/20">🔒</div>
                        <div class="text-lg font-semibold">Jackpot Tetap</div>
                    </div>
                    <div class="mt-3 space-y-2 text-sm text-white/80">
                        <div>• Menawarkan bayaran tetap untuk kombinasi simbol tertentu.</div>
                        <div>• Bayaran adalah konsisten dan tidak berubah dari masa ke masa.</div>
                        <div>• Lebih mudah dimenangi berbanding jackpot progresif.</div>
                    </div>
                </div>

                <!-- Progressive Jackpots -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-5">
                    <div class="flex items-center gap-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-pink-500/20">📈</div>
                        <div class="text-lg font-semibold">Jackpot Progresif</div>
                    </div>
                    <div class="mt-3 space-y-2 text-sm text-white/80">
                        <div>• Sebahagian kecil daripada setiap pertaruhan pemain ditambah ke dalam jumlah hadiah yang
                            semakin meningkat.</div>
                        <div>• Jackpot terus meningkat sehingga seseorang memenanginya — selalunya mencapai jumlah
                            besar.</div>
                        <div>• Lebih ramai pemain berputar, lebih tinggi jumlah hadiah.</div>
                    </div>
                    <div class="mt-3 text-sm text-white/70">
                        Jackpot progresif Pussy888 adalah antara ciri paling popular di platform ini dan telah memberi
                        ganjaran kepada pemain bertuah dengan kemenangan yang menakjubkan.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Jackpot Games -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="mb-4 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Permainan Jackpot Teratas di Pussy888</div>
                <div class="text-sm text-white/70">Visual menakjubkan, runut bunyi mengasyikkan & peluang sebenar untuk
                    menang besar.</div>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([['t' => 'Great Blue Jackpot', 'd' => 'Selami laut dalam untuk pengganda besar dan hadiah utama yang hebat.', 'img' => 'great-blue.jpg'], ['t' => 'Safari Heat Jackpot', 'd' => 'Slot bertema hidupan liar penuh dengan simbol wild, putaran percuma, dan jackpot yang meningkat.', 'img' => 'safari-heat.jpg'], ['t' => 'Panther Moon Jackpot', 'd' => 'Misteri, gelap, dan penuh dengan kemenangan mengejutkan.', 'img' => 'panther-moon.jpg'], ['t' => 'Highway Kings Progressive', 'd' => 'Reka bentuk klasik dengan bayaran lumayan dan pusingan bonus.', 'img' => 'highway-kings.jpg'], ['t' => 'Bonus Bear Jackpot', 'd' => 'Tema santai dengan potensi kemenangan yang serius.', 'img' => 'bonus-bear.jpg']] as $g)
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
                            <div class="text-xs text-white/70">Slot Jackpot</div>
                        </div>
                        <!-- Optional live jackpot meter -->
                        <div
                            class="absolute right-3 top-3 rounded-md bg-purple-400 px-2 py-1 text-xs font-semibold text-black">
                            RM 1,248,930+
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3">
                        <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                            href="https://lv168.com/en/register?up=luckywinwin14"
                        >Main Sekarang</a>
                        <a class="text-sm text-white/70 hover:text-white" href="https://lv168.com/en/register?up=luckywinwin14">Butiran →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Why Play -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Mengapa Main Slot Jackpot Pussy888?</div>
            <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([['i' => '💰', 't' => 'Bayaran lebih besar daripada slot biasa'], ['i' => '🎯', 't' => 'Nilai main semula tinggi dengan pusingan bonus menarik'], ['i' => '🏆', 't' => 'Jumlah hadiah besar pada tajuk progresif'], ['i' => '📱', 't' => 'Dioptimumkan untuk Android & iOS (aplikasi Pussy888)'], ['i' => '🇲🇾', 't' => 'Hadiah wang sebenar dimenangi oleh pemain Malaysia setiap minggu'], ['i' => '⚡', 't' => 'Permainan pantas, lancar & masa muat cepat']] as $w)
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
                Sama ada anda mengejar ribuan atau jutaan, jackpot Pussy888 menawarkan peluang mendebarkan untuk menang
                besar dengan setiap putaran.
            </div>
        </div>
    </div>

    <!-- Play Anytime, Anywhere -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="grid items-center gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="text-2xl font-bold">Main Permainan Jackpot Bila-bila Masa, Di Mana Saja</div>
                <div class="mt-3 text-white/80">
                    Semua slot jackpot Pussy888 serasi sepenuhnya dengan peranti mudah alih dan platform desktop. Anda
                    boleh
                    berputar untuk hadiah utama di mana sahaja anda berada.
                </div>
                <div class="mt-4 space-y-2 text-white/80">
                    <div>• Muat turun Pussy888 pada Android (APK) atau iOS</div>
                    <div>• Atau main serta-merta melalui pelayar mudah alih anda</div>
                    <div>• Permainan dimuat dengan pantas, berjalan lancar, dan dioptimumkan untuk sentuhan</div>
                    <div>• Tiada lengah. Tiada had. Hanya aksi jackpot tulen.</div>
                </div>
                <div class="mt-5 flex flex-wrap gap-3">
                    <a class="rounded-md bg-purple-400 px-4 py-2 font-semibold text-black hover:bg-purple-300"
                        href="https://lv168.com/en/register?up=luckywinwin14"
                    >Muat Turun APK</a>
                    <a class="rounded-md border border-white/15 px-4 py-2 hover:bg-white/5" href="https://lv168.com/en/register?up=luckywinwin14">Dapatkan
                        iOS</a>
                    <a class="rounded-md border border-white/15 px-4 py-2 hover:bg-white/5" href="https://lv168.com/en/register?up=luckywinwin14">Main dalam
                        Pelayar</a>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.02]">
                <img
                    class="h-full w-full object-cover"
                    src="{{ asset('assets/frontend/images/jackpots/jackpot-mobile.jpg') }}"
                    alt="Main Di Mana Saja"
                >
            </div>
        </div>
    </div>

    <!-- Safe & Fair -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Permainan Selamat, Adil & Dikawal</div>
            <div class="mt-3 text-white/80">
                Semua permainan jackpot Pussy888 disokong oleh Penjana Nombor Rawak (RNG) yang diperakui dan penyedia
                permainan berlesen.
                Dengan penyulitan SSL, data dan transaksi anda dilindungi setiap masa.
            </div>
            <div class="mt-4 grid gap-4 text-sm sm:grid-cols-3">
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">🔐 Penyulitan SSL</div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">🧪 RNG Disahkan</div>
                <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">📜 Penyedia Berlesen</div>
            </div>
        </div>
    </div>

    <!-- Bonuses -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Bonus Yang Meningkatkan Permainan Jackpot Anda</div>
            <div class="mt-3 text-white/80">
                Mahu lebih nilai semasa memburu jackpot? Ambil kesempatan daripada bonus dan promosi tetap kami:
            </div>
            <div class="mt-5 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([['t' => 'Bonus Selamat Datang', 'd' => 'Mulakan permainan anda dengan kredit tambahan.'], ['t' => 'Putaran Percuma', 'd' => 'Tersedia pada slot jackpot terpilih.'], ['t' => 'Pulangan Tunai', 'd' => 'Dapatkan % kembali untuk permainan aktif.'], ['t' => 'Acara VIP', 'd' => 'Acara jackpot eksklusif untuk VIP.']] as $b)
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold">{{ $b['t'] }}</div>
                        <div class="mt-1 text-sm text-white/70">{{ $b['d'] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                <a class="inline-flex items-center gap-2 rounded-md bg-purple-400 px-4 py-2 font-semibold text-black hover:bg-purple-300"
                    href="https://lv168.com/en/register?up=luckywinwin14"
                >
                    Lihat Promosi →
                </a>
            </div>
        </div>
    </div>

    <!-- Tips (Accordion with Alpine) -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-2xl font-bold">Tip Untuk Menang Slot Jackpot</div>

            @php
                $tips = [
                    'Mainkan garisan dan pertaruhan maksimum untuk layak mendapat bayaran penuh jackpot',
                    'Tetapkan bajet dan patuhi – permainan jackpot boleh menjadi sangat tidak menentu',
                    'Cuba versi demo dahulu untuk memahami ciri dan pencetus bonus',
                    'Cari meter jackpot yang menunjukkan sejauh mana jumlah hadiah telah meningkat',
                    'Perhatikan promosi yang menawarkan kredit bonus atau putaran percuma untuk permainan jackpot',
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
                            Ingat, setiap putaran boleh menjadi yang mengubah segalanya!
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-partials.download
        title="Mula Berputar Untuk Jackpot Sekarang!"
        primaryCtaText="Muat Turun Pussy888"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="Main Sekarang"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        Keseronokan kemenangan hanya satu sentuhan sahaja. Sertai ribuan pemain di seluruh Malaysia yang sedang berputar
        menuju kekayaan dengan jackpot Pussy888.
        <div class="mt-3">
            Dengan permainan yang dipercayai, grafik menakjubkan, dan ganjaran wang sebenar, sudah tiba masanya untuk
            memburu hadiah utama.
            Muat turun Pussy888 hari ini dan putar menuju kemenangan besar anda yang seterusnya!
        </div>
    </x-partials.download>
</div>
