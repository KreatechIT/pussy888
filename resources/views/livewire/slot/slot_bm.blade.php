@push('title')
    Slot
@endpush

<div class="bg-black text-white" x-data="{
    openFilter: false,
    selectedFilter: 'Semua',
    filters: ['Semua', 'Klasik 3-Gulung', 'Video 5-Gulung', 'Jackpot Progresif'],
    matches(category) { return this.selectedFilter === 'Semua' || this.selectedFilter === category }
}">
    <!-- Page Header -->
    <x-partials.heading title="Permainan Slot" subtitle="Pussy888 • Kasino Dalam Talian Dipercayai • Malaysia" />

    <!-- Page Title -->
    <div class="mx-auto max-w-7xl px-4 pt-8">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h1 class="text-2xl font-bold sm:text-3xl">Pussy888 Permainan Slot – Putar untuk Menang Besar!</h1>
            <p class="mt-3 text-white/80">
                Selamat datang ke dunia mendebarkan permainan slot Pussy888, di mana keseronokan bertemu peluang pada
                setiap putaran.
                Sebagai salah satu platform kasino dalam talian paling popular di Malaysia, Pussy888 menawarkan koleksi
                slot berkualiti tinggi yang direka untuk permainan pantas dan ganjaran wang sebenar. Sama ada anda
                pemain
                berpengalaman atau baru dalam slot, anda akan temui permainan yang sesuai dengan gaya dan bajet anda.
            </p>
        </div>
    </div>

    <!-- Why Play -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Kenapa Bermain Slot di Pussy888?</h2>
            <p class="mt-2 text-white/80">
                Permainan slot ialah nadi pengalaman Pussy888 — pantas, menguntungkan, dan penuh ciri. Dengan
                ratusan judul, terokai semuanya daripada mesin klasik 3-gulung hingga slot video moden 5-gulung yang
                sarat pusingan bonus dan animasi.
            </p>

            <!-- Highlights + Mobile dropdown -->
            <div class="mt-4 grid gap-4 md:grid-cols-2">
                <!-- Static list (desktop) -->
                <div class="hidden md:block">
                    <div class="grid gap-3">
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Variasi tema yang besar</div>
                            <div class="text-sm text-white/70">Pengembaraan, mitologi, buah-buahan, fantasi dan banyak
                                lagi.</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Permainan penuh ciri</div>
                            <div class="text-sm text-white/70">Putaran percuma, wild, scatter dan pengganda.</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Mudah mula, sukar dikuasai</div>
                            <div class="text-sm text-white/70">Mesra pemula tetapi mendalam untuk pro.</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Lancarnya di semua peranti</div>
                            <div class="text-sm text-white/70">Tanpa lengah di mudah alih dan desktop.</div>
                        </div>
                        <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                            <div class="font-semibold">Potensi jackpot</div>
                            <div class="text-sm text-white/70">Peluang memenangi jackpot Pussy888 bernilai ribuan.</div>
                        </div>
                    </div>
                </div>

                <!-- Mobile accordion (Alpine) -->
                <div class="md:hidden">
                    <div class="rounded-lg border border-white/10">
                        <button class="flex w-full items-center justify-between px-4 py-3"
                            @click="openFilter=!openFilter"
                        >
                            <span class="font-semibold">Sorotan</span>
                            <svg
                                class="size-4 transition"
                                :class="openFilter && 'rotate-180'"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m19 9-7 7-7-7"
                                />
                            </svg>
                        </button>
                        <div
                            class="space-y-3 px-4 pb-4"
                            x-show="openFilter"
                            x-transition
                        >
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Variasi tema yang besar</div>
                                <div class="text-white/70">Pengembaraan, mitologi, buah-buahan, fantasi dan banyak lagi.
                                </div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Permainan penuh ciri</div>
                                <div class="text-white/70">Putaran percuma, wild, scatter dan pengganda.</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Mudah mula, sukar dikuasai</div>
                                <div class="text-white/70">Mesra pemula tetapi mendalam untuk pro.</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Lancarnya di semua peranti</div>
                                <div class="text-white/70">Tanpa lengah di mudah alih dan desktop.</div>
                            </div>
                            <div class="rounded-md bg-white/[0.02] p-3 text-sm">
                                <div class="font-semibold">Potensi jackpot</div>
                                <div class="text-white/70">Peluang memenangi jackpot Pussy888 bernilai ribuan.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.02]">
                    <img
                        class="h-full w-full object-cover"
                        src="{{ asset('assets/frontend/images/slots/why-play-games-at-pussy888.jpg') }}"
                        alt="Play Anywhere"
                    >
                </div>
            </div>

            <p class="mt-4 text-sm text-white/70">
                Semua slot adalah adil dan 100% disahkan dengan Penjana Nombor Rawak (RNG) untuk memastikan setiap
                putaran benar-benar rawak.
            </p>
        </div>
    </div>

    <!-- Category Filter + Top Titles -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="flex items-end justify-between gap-3">
            <div>
                <h2 class="text-xl font-semibold">Tajuk Slot Teratas Pussy888</h2>
                <p class="text-sm text-white/70">Popular, bayaran tinggi, dan digemari pemain Malaysia.</p>
            </div>

            <!-- Alpine dropdown filter -->
            <div class="relative">
                <button
                    class="inline-flex cursor-pointer items-center gap-2 rounded-md border border-white/15 px-3 py-2 text-sm hover:bg-pink-400/10 hover:text-purple-300"
                    @click="openFilter=!openFilter"
                >
                    <span x-text="selectedFilter"></span>
                    <svg
                        class="size-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m19 9-7 7-7-7"
                        />
                    </svg>
                </button>
                <div
                    class="absolute right-0 z-10 mt-2 w-56 rounded-lg border border-white/10 bg-zinc-900/95 p-2 shadow-lg"
                    x-show="openFilter"
                    @click.outside="openFilter=false"
                    x-transition
                >
                    <template x-for="f in filters" :key="f">
                        <button
                            class="w-full cursor-pointer rounded-md px-3 py-2 text-left text-sm hover:bg-pink-400/10 hover:text-purple-300"
                            @click="selectedFilter=f; openFilter=false"
                            x-text="f"
                        ></button>
                    </template>
                </div>
            </div>
        </div>

        <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Great Blue -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Video 5-Gulung')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/great-blue.jpg') }}"
                        alt="Great Blue"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Great Blue</div>
                        <div class="text-xs text-white/70">Tema lautan dengan pengganda besar & putaran percuma</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Video 5-Gulung</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="https://lv168.com/en/register?up=luckywinwin14"
                    >Main</a>
                </div>
            </div>

            <!-- Highway Kings -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Klasik 3-Gulung')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/highway-kings.jpg') }}"
                        alt="Highway Kings"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Highway Kings</div>
                        <div class="text-xs text-white/70">Permainan pantas dengan reka bentuk nostalgia</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Klasik 3-Gulung</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="https://lv168.com/en/register?up=luckywinwin14"
                    >Main</a>
                </div>
            </div>

            <!-- Panther Moon -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Video 5-Gulung')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/panther-moon.jpg') }}"
                        alt="Panther Moon"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Panther Moon</div>
                        <div class="text-xs text-white/70">Hutan mistik dengan wild yang menguntungkan</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Video 5-Gulung</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="https://lv168.com/en/register?up=luckywinwin14"
                    >Main</a>
                </div>
            </div>

            <!-- Safari Heat -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Video 5-Gulung')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/safari-heat.jpg') }}"
                        alt="Safari Heat"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Safari Heat</div>
                        <div class="text-xs text-white/70">Pengembaraan haiwan liar dengan putaran percuma & jackpot
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Video 5-Gulung</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                        href="https://lv168.com/en/register?up=luckywinwin14"
                    >Main</a>
                </div>
            </div>

            <!-- Bonus Bear -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Video 5-Gulung')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/bonus-bear.jpg') }}"
                        alt="Bonus Bear"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Bonus Bear</div>
                        <div class="text-xs text-white/70">Keriangan kartun dengan bonus periuk madu</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Video 5-Gulung</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                        href="https://lv168.com/en/register?up=luckywinwin14"
                    >Main</a>
                </div>
            </div>

            <!-- Progressive sample card -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Jackpot Progresif')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/slots/progressive.jpg') }}"
                        alt="Jackpot Progresif"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Jackpot Rush</div>
                        <div class="text-xs text-white/70">Kolam jackpot progresif meningkat setiap putaran</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Jackpot Progresif</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-black hover:bg-purple-300"
                        href="https://lv168.com/en/register?up=luckywinwin14"
                    >Main</a>
                </div>
            </div>
        </div>

        <p class="mt-3 text-sm text-white/70">
            Permainan ini digemari kerana grafik, kesan bunyi dan potensi kemenangan yang kerap.
        </p>
    </div>

    <!-- Progressive Jackpots Info -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Jackpot Progresif – Putaran Lebih Besar, Menang Lebih Besar</h2>
            <p class="mt-2 text-white/80">
                Sesetengah slot Pussy888 menampilkan jackpot progresif, di mana jumlah hadiah meningkat dengan setiap
                putaran sehingga
                seseorang memenangi hadiah utama. Perhatikan meter jackpot atau simbol khas yang mencetuskan ganjaran
                besar —
                satu putaran bertuah boleh mengubah segalanya.
            </p>
        </div>
    </div>

    <!-- Mobile Play -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Bermain di Mudah Alih – Bila-bila Masa, Di Mana Saja</h2>
            <p class="mt-2 text-white/80">
                Semua slot serasi sepenuhnya dengan aplikasi mudah alih Pussy888 dan juga permainan melalui pelayar.
                Nikmati putaran lancar
                di Android atau iOS.
            </p>
            <div class="mt-4 grid gap-3 md:grid-cols-3">
                <a class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]" href="https://lv168.com/en/register?up=luckywinwin14">
                    <div class="font-semibold">Muat Turun APK Pussy888 (Android)</div>
                    <div class="text-sm text-white/70">Pemasangan pantas & akses segera.</div>
                </a>
                <a class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]" href="https://lv168.com/en/register?up=luckywinwin14">
                    <div class="font-semibold">Pasang pada iPhone/iPad (iOS)</div>
                    <div class="text-sm text-white/70">Dioptimumkan untuk prestasi iOS.</div>
                </a>
                <a class="rounded-lg border border-white/15 bg-white/[0.02] p-4 hover:bg-white/[0.05]" href="https://lv168.com/en/register?up=luckywinwin14">
                    <div class="font-semibold">Main dalam Pelayar Mudah Alih</div>
                    <div class="text-sm text-white/70">Tiada muat turun — ketik & putar.</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Demo Mode -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Cuba Dahulu – Mod Demo Tersedia</h2>
            <p class="mt-2 text-white/80">
                Uji ciri, fahami garis bayaran, dan cari kegemaran anda tanpa risiko. Mod demo sesuai untuk pemain baru
                mempelajari cara slot Pussy888 berfungsi.
            </p>
        </div>
    </div>

    <!-- Safety / Trust -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Selamat, Terjamin & Dipercayai Ribuan Pemain</h2>
            <div class="mt-4 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Berlesen & Dikawal Selia</div>
                    <div class="text-sm text-white/70">Beroperasi di bawah garis panduan ketat.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Penyulitan SSL</div>
                    <div class="text-sm text-white/70">Data anda kekal dilindungi.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">RNG Diuji</div>
                    <div class="text-sm text-white/70">Semakan keadilan bebas.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Sokongan Responsif</div>
                    <div class="text-sm text-white/70">Bantuan apabila anda perlukan.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bonuses -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Jangan Lupa Bonus Slot Anda!</h2>
            <div class="mt-4 grid gap-3 md:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Bonus Alu-aluan</div>
                    <div class="text-sm text-white/70">Tingkatkan deposit pertama anda.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Putaran Percuma</div>
                    <div class="text-sm text-white/70">Judul slot terpilih.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Isian Semula & Pulangan Tunai</div>
                    <div class="text-sm text-white/70">Nilai tambahan setiap minggu.</div>
                </div>
                <div class="rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="font-semibold">Ganjaran VIP</div>
                    <div class="text-sm text-white/70">Keistimewaan untuk pemain setia.</div>
                </div>
            </div>
            <a class="mt-4 inline-flex rounded-md border border-white/15 px-4 py-2 text-sm hover:bg-white/5"
                href="https://lv168.com/en/register?up=luckywinwin14"
            >Lihat Promosi</a>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="Putar Sekarang & Menang Besar!"
        primaryCtaText="Muat Turun Pussy888"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="Main di Pelayar"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        Ribuan pemain Malaysia sudah menikmati keseronokan slot Pussy888 — grafik bertaraf tinggi, pembayaran pantas,
        dan permainan untuk setiap gaya. Muat turun sekarang dan mula memutar untuk ganjaran sebenar!
    </x-partials.download>
</div>
