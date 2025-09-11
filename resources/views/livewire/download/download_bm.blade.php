<div class="bg-black text-white" x-data>
    <!-- Header -->
    <x-partials.heading title="Muat Turun" subtitle="Pussy888 • Kasino Dalam Talian Dipercayai • Malaysia" />
    <!-- H1 / Hero -->
    <div class="relative">
        <div class="mx-auto max-w-7xl px-4 py-10">
            <div class="grid items-center gap-6 lg:grid-cols-[1.2fr_.8fr]">
                <div>
                    <h1 class="text-3xl/tight font-bold sm:text-4xl/tight">
                        Muat Turun Pussy888 – Main Di Mana-mana, Bila-bila Masa di Mudah Alih atau Web
                    </h1>
                    <p class="mt-4 text-white/80">
                        Mencari cara pantas dan selamat untuk menikmati permainan kasino dalam talian terbaik di
                        Malaysia?
                        Aplikasi mudah alih Pussy888 menawarkan pengalaman permainan yang lancar di hujung jari anda.
                        Sama ada anda menggunakan peranti Android atau iOS, atau lebih suka akses segera melalui pelayar
                        mudah alih, kami sedia membantu.
                    </p>
                    <p class="mt-3 text-white/80">
                        Muat turun aplikasi rasmi Pussy888 hari ini dan sertai permainan slot yang mendebarkan, meja
                        dealer langsung,
                        jackpot dan banyak lagi — semuanya dioptimumkan untuk permainan mudah alih.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <x-partials.button href="#">APK Android</x-partials.button>
                        <x-partials.button href="#">Pasang iOS</x-partials.button>
                        <x-partials.button type="outline" href="#">Main di Web</x-partials.button>
                    </div>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="font-semibold">Sorotan</div>
                    <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                        <li>Akses penuh ke semua permainan kasino Pussy888</li>
                        <li>Prestasi lancar & responsif</li>
                        <li>Pemberitahuan tolak untuk promo</li>
                        <li>Log masuk lebih pantas & kelajuan pemuatan lebih baik</li>
                        <li>Pengalaman mudah alih dipertingkat (Android & iOS)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-t border-white/10"></div>
    </div>

    <!-- Why Download (cards) -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">Mengapa Muat Turun Aplikasi Pussy888?</div>
            <div class="text-sm text-white/70">Nikmati pengalaman mesra-mudah alih terbaik dengan kelajuan, keselamatan,
                dan kemudahan.</div>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (['Akses penuh ke semua permainan kasino Pussy888', 'Prestasi yang lancar dan responsif pada semua peranti', 'Pemberitahuan tolak untuk promosi dan kemas kini', 'Log masuk lebih pantas dan kelajuan pemuatan permainan dipertingkat', 'Pengalaman mudah alih yang dipertingkat untuk pengguna Android dan iOS'] as $point)
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="text-sm">{{ $point }}</div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Android APK -->
    <div class="mx-auto max-w-7xl px-4 pb-10">
        <div class="mb-4 flex items-end justify-between">
            <div>
                <div class="text-2xl font-bold">Muat Turun Pussy888 untuk Android (APK)</div>
                <div class="text-sm text-white/70">Pasang APK dalam beberapa langkah pantas.</div>
            </div>
            <div class="hidden gap-3 sm:flex">
                <x-partials.button href="#">Muat Turun untuk Android</x-partials.button>
                <x-partials.button type="outline" href="#">Pautan Cermin</x-partials.button>
            </div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="mb-4 flex gap-3 sm:hidden">
                    <a class="flex-1 rounded-md bg-purple-400 px-4 py-2 text-center text-sm font-semibold text-black hover:bg-purple-300"
                        href="#"
                    >Muat Turun untuk Android</a>
                    <a class="flex-1 rounded-md border border-white/15 px-4 py-2 text-center text-sm hover:bg-white/5"
                        href="#"
                    >Pautan Cermin</a>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.03]" x-data="{ open: true }">
                    <div class="flex items-center justify-between px-4 py-3">
                        <div class="font-semibold">Langkah untuk Muat Turun dan Pasang</div>
                        <button class="inline-flex items-center gap-1 text-sm text-white/70 hover:text-white"
                            @click="open=!open"
                        >
                            <span x-text="open ? 'Sembunyi' : 'Tunjuk'"></span>
                            <svg
                                class="size-4 transition"
                                :class="open && 'rotate-180'"
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
                    </div>
                    <div x-show="open" x-collapse>
                        <div class="space-y-3 border-t border-white/10 px-4 py-4 text-sm">
                            <div class="rounded-lg bg-white/[0.02] p-3">1) Lawati laman rasmi Pussy888 Malaysia atau
                                pautan rakan kongsi yang dipercayai.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">2) Ketik butang “Muat Turun untuk Android” untuk
                                mula memuat turun fail APK.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">3) Pergi ke Settings &gt; Security, dan benarkan
                                “Install from Unknown Sources.”</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">4) Buka fail APK yang dimuat turun dan ikut
                                arahan pada skrin untuk memasang.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">5) Setelah siap, buka aplikasi dan log masuk
                                atau daftar untuk mula bermain.</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 rounded-xl border border-purple-400/30 bg-purple-400/10 p-4 text-sm text-purple-200">
                    <span class="font-semibold">Nota:</span> Sentiasa muat turun APK Pussy888 daripada sumber yang
                    disahkan untuk mengelakkan aplikasi palsu atau berbahaya.
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Tip Pantas (Android)</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>Jika APK tidak dapat dipasang, pastikan “Unknown Sources” dibenarkan.</li>
                    <li>Kosongkan cache pelayar jika fail kelihatan rosak.</li>
                    <li>Simpan sekurang-kurangnya 500MB ruang kosong untuk kemas kini lancar.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- iOS Install -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">Pasang Pussy888 pada Peranti iOS</div>
            <div class="text-sm text-white/70">Berfungsi pada iPhone dan iPad dengan profil konfigurasi.</div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="flex flex-wrap gap-3">
                    <x-partials.button href="#">Muat Turun untuk iOS</x-partials.button>
                    <x-partials.button type="outline" href="#">Pautan iOS Alternatif</x-partials.button>
                </div>

                <div class="mt-6 rounded-xl border border-white/10 bg-white/[0.03]" x-data="{ open: true }">
                    <div class="flex items-center justify-between px-4 py-3">
                        <div class="font-semibold">Langkah untuk Pemasangan</div>
                        <button class="inline-flex items-center gap-1 text-sm text-white/70 hover:text-white"
                            @click="open=!open"
                        >
                            <span x-text="open ? 'Sembunyi' : 'Tunjuk'"></span>
                            <svg
                                class="size-4 transition"
                                :class="open && 'rotate-180'"
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
                    </div>
                    <div x-show="open" x-collapse>
                        <div class="space-y-3 border-t border-white/10 px-4 py-4 text-sm">
                            <div class="rounded-lg bg-white/[0.02] p-3">1) Buka Safari pada iPhone atau iPad anda.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">2) Pergi ke halaman muat turun rasmi Pussy888.
                            </div>
                            <div class="rounded-lg bg-white/[0.02] p-3">3) Ketik “Muat Turun untuk iOS” dan benarkan
                                profil konfigurasi.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">4) Pergi ke Settings &gt; General &gt; Device
                                Management.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">5) Ketik profil Pussy888 dan pilih “Trust” untuk
                                mengesahkan aplikasi.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">6) Kembali ke skrin utama dan lancarkan
                                aplikasi.</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 rounded-xl border border-purple-400/30 bg-purple-400/10 p-4 text-sm text-purple-200">
                    <span class="font-semibold">Tip Keselamatan:</span> Kekalkan iOS terkini dan percayai hanya profil
                    konfigurasi rasmi bagi mengelakkan ralat pemasangan.
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Tip Pantas (iOS)</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>Jika profil tidak kelihatan, muat turun semula menggunakan Safari (bukan pelayar lain).</li>
                    <li>Selepas “Trust”, tutup paksa dan buka semula aplikasi jika ia tidak dilancarkan.</li>
                    <li>Pastikan storan mencukupi untuk kemas kini lancar.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Mobile Web -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">Main Pussy888 di Web Mudah Alih – Tidak Perlu Muat Turun</div>
            <div class="text-sm text-white/70">Akses segera melalui pelayar telefon anda.</div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="flex flex-wrap gap-3">
                    <x-partials.button href="#">Buka Web Mudah Alih</x-partials.button>
                    <x-partials.button type="outline" href="#">Cipta Akaun</x-partials.button>
                </div>

                <div class="mt-6 rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="font-semibold">Cara Bermain di Web Mudah Alih</div>
                    <div class="mt-3 space-y-3 text-sm">
                        <div class="rounded-lg bg-white/[0.02] p-3">1) Buka pelayar pilihan anda (Safari, Chrome,
                            dll.).</div>
                        <div class="rounded-lg bg-white/[0.02] p-3">2) Lawati laman rasmi Pussy888.</div>
                        <div class="rounded-lg bg-white/[0.02] p-3">3) Log masuk ke akaun anda atau daftar akaun
                            baharu.</div>
                        <div class="rounded-lg bg-white/[0.02] p-3">4) Main serta-merta — tidak perlu pemasangan.</div>
                    </div>
                </div>

                <div class="mt-4 text-sm text-white/80">
                    Versi web mudah alih dioptimumkan untuk navigasi yang lancar, permainan pantas, dan akses penuh
                    kepada semua
                    permainan serta promosi — sangat sesuai untuk akses pantas atau peranti berkongsi.
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Mengapa Web Mudah Alih?</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>Tiada storan diperlukan.</li>
                    <li>Berfungsi pada mana-mana pelayar mudah alih moden.</li>
                    <li>Akses segera jika stor aplikasi disekat.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Security -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="text-2xl font-bold">Permainan Mudah Alih Selamat & Terjamin</div>
        <p class="mt-3 max-w-3xl text-white/80">
            Semua versi mudah alih Pussy888 — APK, iOS, dan web — menggunakan enkripsi SSL lanjutan untuk melindungi
            data dan transaksi anda.
            Kami memastikan setiap permainan berjalan dengan lancar, selamat, dan adil pada semua peranti.
        </p>
    </div>

    <!-- Troubleshooting -->
    <div class="mx-auto max-w-7xl px-4 pb-12">
        <div class="grid gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Petua Penyelesaian Masalah</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>Jika APK tidak dapat dipasang, pastikan “Unknown Sources” dibenarkan.</li>
                    <li>Untuk isu pemasangan iOS, pastikan profil dipercayai.</li>
                    <li>Sentiasa pastikan sambungan internet stabil semasa memuat turun atau bermain.</li>
                </ul>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Perlukan Bantuan?</div>
                <p class="mt-3 text-sm text-white/80">
                    Hubungi sokongan pelanggan Pussy888 jika anda perlukan bantuan untuk muat turun, pemasangan, atau
                    log masuk.
                </p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <x-partials.button href="#">Sembang Langsung</x-partials.button>
                    <x-partials.button type="outline" href="#">Sokongan WhatsApp</x-partials.button>
                </div>
            </div>
        </div>
    </div>
    <x-partials.download
        title="Mula Bermain Sekarang!"
        primaryCtaText="APK Android"
        primaryCtaLink="#"
        secondaryCtaText="Pasang iOS"
        secondaryCtaLink="#"
    >
            Pilih kaedah yang paling sesuai untuk anda: Muat turun APK untuk Android, pasang aplikasi iOS, atau bermain
            serta-merta melalui pelayar mudah alih.
            Apa jua cara anda bermain, Pussy888 menjamin pengalaman kasino dalam talian bertaraf tinggi.
            <br><br>
            <span>Muat turun Pussy888 hari ini dan menangi ganjaran sebenar di mana sahaja!</span>
    </x-partials.download>
</div>
