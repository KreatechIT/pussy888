@push('title')
    Kasino Langsung
@endpush

<div class="bg-black text-white" x-data="{
    openFilter: false,
    selectedFilter: 'Semua',
    filters: ['Semua', 'Bakarat', 'Blackjack', 'Rolet', 'Naga Harimau', 'Sic Bo'],
    matches(category) { return this.selectedFilter === 'Semua' || this.selectedFilter === category }
}">
    <!-- Page Header -->
    <x-partials.heading title="Kasino Langsung" subtitle="Pussy888 • Dealer Sebenar • Malaysia" />

    <!-- Page Title -->
    <div class="mx-auto max-w-7xl px-4 pt-8">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h1 class="text-2xl font-bold sm:text-3xl">Pussy888 Kasino Langsung – Aksi Masa Nyata dengan Dealer Sebenar
            </h1>
            <p class="mt-3 text-white/80">
                Alami dunia Pussy888 Kasino Langsung, di mana anda bukan sekadar bermain — anda merasai debaran lantai
                kasino sebenar.
                Dari rumah atau peranti mudah alih, nikmati permainan interaktif berstakes tinggi yang distrim secara
                langsung,
                dengan dealer profesional memimpin permainan.
            </p>
            <p class="mt-3 text-white/80">
                Sama ada anda pemain berpengalaman atau pemula yang ingin mencuba, Pussy888 menawarkan pengalaman dealer
                langsung
                yang lengkap untuk pemain Malaysia yang mahukan keterujaan, keaslian dan kepercayaan pada setiap
                permainan.
            </p>
        </div>
    </div>

    <!-- What is a Live Casino -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Apa Itu Kasino Langsung?</h2>
            <p class="mt-2 text-white/80">
                Kasino langsung ialah persekitaran permainan dalam talian yang imersif di mana dealer sebenar
                mengendalikan permainan
                melalui penstriman video langsung. Anda boleh melihat setiap kad dikocok, roda rolet berpusing, atau
                dadu berguling
                secara masa nyata — sama seperti di kasino fizikal.
            </p>
            <p class="mt-2 text-white/80">
                Tidak seperti permainan meja berasaskan RNG tradisional, permainan kasino langsung menambah sentuhan
                manusia
                dan membawa pemain lebih dekat kepada pengalaman perjudian sebenar.
            </p>
        </div>
    </div>

    <!-- Live Dealer Games + Filter -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="flex items-end justify-between gap-3">
            <div>
                <h2 class="text-xl font-semibold">Permainan Dealer Langsung di Pussy888</h2>
                <p class="text-sm text-white/70">Perpustakaan kasino langsung Pussy888 merangkumi beberapa permainan
                    kasino paling popular dan mengujakan:</p>
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
            <!-- Live Baccarat -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Bakarat')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/baccarat.jpg') }}"
                        alt="Bakarat Langsung"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Bakarat Langsung</div>
                        <div class="text-xs text-white/70">Klasik abadi dan antara permainan langsung paling popular di
                            Pussy888.
                            Pertaruhkan pada pemain, banker, atau seri — dan rasai debaran saat kad diagih.</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Bakarat</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Masuk Meja</a>
                </div>
            </div>

            <!-- Live Blackjack -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Blackjack')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/blackjack.jpg') }}"
                        alt="Blackjack Langsung"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Blackjack Langsung</div>
                        <div class="text-xs text-white/70">Guna strategi dan kemahiran untuk menewaskan dealer dalam
                            permainan 21 yang mendebarkan.
                            Berinteraksi dengan dealer dan pemain lain untuk pengalaman sosial yang pantas.</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Blackjack</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Masuk Meja</a>
                </div>
            </div>

            <!-- Live Roulette -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Rolet')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/roulette.jpg') }}"
                        alt="Rolet Langsung"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Rolet Langsung</div>
                        <div class="text-xs text-white/70">Letak cip anda, saksikan roda berputar, dan rasai keterujaan
                            saat bola mendarat.
                            Pussy888 menawarkan pelbagai versi rolet dengan hos profesional dan keputusan masa nyata.
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Rolet</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Masuk Meja</a>
                </div>
            </div>

            <!-- Dragon Tiger -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Naga Harimau')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/dragon-tiger.jpg') }}"
                        alt="Naga Harimau"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Naga Harimau</div>
                        <div class="text-xs text-white/70">Permainan ringkas dan pantas di mana pemain bertaruh kad mana
                            — Naga atau Harimau — yang lebih tinggi.
                            Sesuai untuk pemula dan pemburu adrenalin.</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Naga Harimau</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Masuk Meja</a>
                </div>
            </div>

            <!-- Sic Bo -->
            <div class="group overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]"
                x-show="matches('Sic Bo')"
            >
                <div class="relative aspect-[16/10]">
                    <img
                        class="h-full w-full object-cover transition group-hover:scale-[1.02]"
                        src="{{ asset('assets/frontend/images/live/sic-bo.jpg') }}"
                        alt="Sic Bo"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 p-3">
                        <div class="font-semibold">Sic Bo</div>
                        <div class="text-xs text-white/70">Gulingkan dadu dan uji nasib anda dalam permainan Asia
                            popular ini.
                            Dengan pelbagai pilihan pertaruhan, Sic Bo menawarkan kemungkinan tanpa had dan pulangan
                            tinggi.</div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3">
                    <div class="text-xs text-white/60">Kategori: Sic Bo</div>
                    <a class="rounded-md bg-purple-400 px-3 py-1.5 text-sm font-semibold text-white hover:bg-purple-300"
                        href="#"
                    >Masuk Meja</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Play on Mobile and Desktop -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <div class="grid items-center gap-6 p-6 md:grid-cols-2 md:p-8">
                <!-- Copy -->
                <div>
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80">
                        <svg
                            class="size-3.5"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <path
                                d="M7 4h10a2 2 0 0 1 2 2v10h-2V6H7V4Zm-2 4h10a2 2 0 0 1 2 2v10H5a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2Zm8 6H8v2h5v-2Z"
                            />
                        </svg>
                        Utama Mudah Alih • Penstriman HD
                    </div>
                    <h2 class="mt-3 text-xl font-semibold">Bermain di Mudah Alih dan Desktop</h2>
                    <p class="mt-2 text-white/80">
                        Semua permainan kasino langsung Pussy888 dibina untuk pengalaman mudah alih terlebih dahulu.
                        Sama ada Android, iOS atau komputer desktop, anda akan menikmati penstriman HD yang lancar
                        dan antara muka pertaruhan yang intuitif.
                    </p>

                    <!-- Actions as feature list -->
                    <div class="mt-5 grid gap-3">
                        <a class="group rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#"
                        >
                            <div class="flex items-center gap-3">
                                <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                                    <svg
                                        class="size-5"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <path
                                            d="M7 4h10a2 2 0 0 1 2 2v12H5V6a2 2 0 0 1 2-2Zm5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"
                                        />
                                    </svg>
                                </div>
                                <div class="font-semibold">
                                    Muat turun aplikasi mudah alih Pussy888 untuk prestasi terbaik
                                </div>
                            </div>
                        </a>
                        <a class="group rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#"
                        >
                            <div class="flex items-center gap-3">
                                <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                                    <svg
                                        class="size-5"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <path d="M4 5h16v10H4V5Zm0 12h16v2H4v-2Z" />
                                    </svg>
                                </div>
                                <div class="font-semibold">
                                    Atau bermain serta-merta melalui pelayar mudah alih — tanpa pemasangan
                                </div>
                            </div>
                        </a>
                        <a class="group rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300"
                            href="#"
                        >
                            <div class="flex items-center gap-3">
                                <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                                    <svg
                                        class="size-5"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <path d="M6 7h7v2H6V7Zm11 10h-4v-2h4v2ZM6 11h12v2H6v-2Z" />
                                    </svg>
                                </div>
                                <div class="font-semibold">
                                    Tukar peranti dengan lancar menggunakan akaun yang sama
                                </div>
                            </div>
                        </a>
                    </div>

                    <p class="mt-3 text-white/80">
                        Di mana sahaja anda berada, permainan kasino langsung kegemaran anda hanya satu ketikan sahaja.
                    </p>
                </div>

                <!-- Visual (placeholder) -->
                <div
                    class="relative order-first h-56 w-full overflow-hidden rounded-xl bg-gradient-to-br from-purple-500/20 via-pink-500/10 to-amber-400/10 md:order-last md:h-[300px]">
                    <div class="absolute inset-0 m-6 rounded-xl border border-white/10 bg-black/40 backdrop-blur">
                    </div>
                    <div
                        class="absolute right-6 top-6 m-6 hidden h-40 w-28 rotate-6 rounded-xl border border-white/10 bg-black/60 shadow-xl md:block">
                    </div>
                    <div
                        class="absolute bottom-6 left-10 hidden h-48 w-32 -rotate-6 rounded-xl border border-white/10 bg-black/60 shadow-xl md:block">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fair, Safe, and Transparent -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03] p-6 md:p-8">
            <div class="flex items-center justify-between gap-6">
                <div>
                    <h2 class="text-xl font-semibold">Adil, Selamat dan Telus</h2>
                    <p class="mt-2 text-white/80">
                        Pussy888 bekerjasama dengan penyedia dealer langsung berlesen dan bereputasi untuk memastikan
                        permainan adil,
                        keselamatan data dan perjudian bertanggungjawab:
                    </p>
                </div>
                <div
                    class="hidden rounded-full bg-emerald-400/15 px-3 py-1 text-xs font-medium text-emerald-300 ring-1 ring-inset ring-emerald-400/30 md:block">
                    Studio Bertauliah
                </div>
            </div>

            <!-- 2-column features with icons -->
            <div class="mt-5 grid gap-3 sm:grid-cols-2">
                <div
                    class="group cursor-pointer rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex items-center justify-center rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M4 7l8-4 8 4v6a8 8 0 1 1-16 0V7Zm8 12a6 6 0 0 0 6-6V8.3L12 5 6 8.3V13a6 6 0 0 0 6 6Z"
                                />
                            </svg>
                        </div>
                        <div class="font-semibold">
                            Semua permainan dihoskan oleh dealer sebenar di studio bertauliah
                        </div>
                    </div>
                </div>
                <div
                    class="group cursor-pointer rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M12 2 3 7v10l9 5 9-5V7l-9-5Zm0 2.2L19 8l-7 3.8L5 8l7-3.8ZM5 10.5l7 3.8 7-3.8V16l-7 3.8L5 16v-5.5Z"
                                />
                            </svg>
                        </div>
                        <div class="font-semibold">Penstriman langsung disulitkan dengan keselamatan SSL</div>
                    </div>
                </div>
                <div
                    class="group cursor-pointer rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M9 3h6v2H9V3ZM4 7h16v2H4V7Zm0 4h16v2H4v-2Zm0 4h10v2H4v-2Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Keputusan pertaruhan direkod dan boleh disahkan</div>
                    </div>
                </div>
                <div
                    class="group cursor-pointer rounded-xl border border-white/10 bg-white/[0.02] p-4 hover:bg-pink-400/10 hover:text-purple-300">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M8 10a4 4 0 1 1 8 0v1h1a3 3 0 1 1 0 6H7a3 3 0 1 1 0-6h1v-1Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Ciri sembang dan tip tersedia untuk interaksi lebih baik</div>
                    </div>
                </div>
            </div>

            <p class="mt-4 text-white/80">
                Anda boleh percaya setiap putaran dan setiap kocokan kad di Pussy888.
            </p>
        </div>
    </div>

    <!-- Bonuses & Promotions -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <!-- Header -->
            <div class="flex flex-wrap items-center justify-between gap-3 p-6 md:p-8">
                <div>
                    <h2 class="text-xl font-semibold">Bonus & Promosi Kasino Langsung</h2>
                    <p class="mt-2 text-white/80">
                        Bermain secara langsung tidak bermakna anda terlepas ganjaran. Pussy888 menawarkan bonus dan
                        promosi khas
                        untuk pemain kasino langsung, termasuk:
                    </p>
                </div>
                <div
                    class="rounded-full bg-purple-400/20 px-3 py-1 text-xs font-medium text-purple-300 ring-1 ring-inset ring-purple-400/30">
                    Dikemas Kini Setiap Hari
                </div>
            </div>

            <!-- Bonus grid -> 2 columns -->
            <div class="grid gap-3 p-6 pt-0 md:grid-cols-2">
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-amber-500/10 via-white/0 to-white/0 p-4 hover:from-amber-500/20">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M12 3l2.4 4.9L20 9l-4 3.9.9 5.6L12 16l-4.9 2.5L8 12.9 4 9l5.6-1.1L12 3Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Bonus alu-aluan untuk pengguna baharu</div>
                    </div>
                </div>
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-pink-500/10 via-white/0 to-white/0 p-4 hover:from-pink-500/20">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M12 4a8 8 0 1 1 0 16v-2a6 6 0 1 0 0-12V4Zm-1 6h2v6h-2v-6Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Tawaran pulangan tunai untuk kerugian meja langsung</div>
                    </div>
                </div>
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-purple-500/10 via-white/0 to-white/0 p-4 hover:from-purple-500/20">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M7 4h10v2H7V4Zm2 4h6v2H9V8Zm-2 4h10v2H7v-2Zm2 4h6v2H9v-2Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Ganjaran VIP untuk pemain berstak tinggi</div>
                    </div>
                </div>
                <div
                    class="group rounded-xl border border-white/10 bg-gradient-to-br from-emerald-500/10 via-white/0 to-white/0 p-4 hover:from-emerald-500/20">
                    <div class="flex items-center gap-3">
                        <div class="rounded-lg bg-white/10 p-2 ring-1 ring-inset ring-white/15">
                            <svg
                                class="size-5"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path d="M5 4h14v2H5V4Zm2 4h10v2H7V8Zm-2 4h14v2H5v-2Zm2 4h10v2H7v-2Z" />
                            </svg>
                        </div>
                        <div class="font-semibold">Bonus isian semula dan promosi harian</div>
                    </div>
                </div>
            </div>

            <!-- Note -->
            <div class="px-6 pb-6 text-white/80">
                Semak halaman Promosi kami secara berkala untuk merebut tawaran terkini — lebih nilai untuk bermain dan
                berpeluang menang lebih banyak.
            </div>
        </div>
    </div>

    <!-- 24/7 Live Support -->
    <div class="mx-auto mt-6 max-w-7xl px-4">
        <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <h2 class="text-xl font-semibold">Sokongan Langsung 24/7</h2>
            <p class="mt-2 text-white/80">
                Pasukan sokongan pelanggan Pussy888 sentiasa tersedia untuk membantu apa jua isu berkaitan pengalaman
                kasino langsung anda.
                Sama ada masalah teknikal atau soalan akaun, bantuan hanya satu klik sahaja.
            </p>
        </div>
    </div>

    <!-- CTA Banner -->
    <x-partials.download
        title="Mula Bermain Secara Langsung Sekarang!"
        primaryCtaText="Muat Turun Pussy888"
        primaryCtaLink="#"
        secondaryCtaText="Log Masuk & Sertai Meja"
        secondaryCtaLink="#"
    >
        Kasino langsung Pussy888 adalah destinasi utama hiburan masa nyata dengan dealer sebenar di Malaysia.
        Dengan dealer profesional, permainan mengujakan dan platform dipercayai, sudah tiba masanya untuk meningkatkan
        pengalaman kasino anda.
        Muat turun Pussy888 atau log masuk sekarang untuk sertai meja langsung dan bermain seperti tidak pernah sebelum
        ini.
    </x-partials.download>
</div>
