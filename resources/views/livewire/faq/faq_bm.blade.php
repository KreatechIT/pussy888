@push('title')
    Soalan Lazim
@endpush

<div class="min-h-screen bg-black text-white" x-data>
    <!-- Header -->
    <x-partials.heading title="Soalan Lazim" subtitle="Pussy888 • Kasino Dalam Talian Dipercayai • Malaysia" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-8 space-y-3 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                Selamat datang ke bahagian Soalan Lazim Pussy888, di mana anda boleh dapatkan jawapan pantas untuk
                soalan biasa tentang platform kami, permainan, pembayaran, bonus dan banyak lagi. Jika jawapan tidak
                dijumpai di sini, pasukan sokongan pelanggan kami tersedia 24/7 untuk membantu.
            </div>
        </div>

        @php
            $sections = [
                [
                    'title' => 'Soalan Umum',
                    'items' => [
                        [
                            'q' => 'Apa itu Pussy888?',
                            'a' =>
                                'Pussy888 ialah platform kasino dalam talian yang dipercayai dan selamat, popular di Malaysia, menawarkan permainan slot, meja dealer langsung, jackpot dan permainan meja yang boleh diakses di telefon bimbit dan komputer.',
                        ],
                        [
                            'q' => 'Adakah Pussy888 sah dan selamat dimainkan?',
                            'a' =>
                                'Ya. Pussy888 menggunakan perisian permainan yang disahkan, penyulitan SSL yang kuat, dan mematuhi piawaian industri untuk memastikan pengalaman permainan yang adil dan selamat.',
                        ],
                    ],
                ],
                [
                    'title' => 'Muat Turun & Pemasangan',
                    'items' => [
                        [
                            'q' => 'Bagaimana saya boleh memuat turun Pussy888 di telefon saya?',
                            'a' => '<div><span class="font-semibold text-white">Android:</span> Muat turun APK dari laman rasmi kami, aktifkan pemasangan dari sumber tidak dikenali, kemudian pasang.</div>
                                    <div class="mt-2"><span class="font-semibold text-white">iOS:</span> Layari laman web kami melalui Safari, muat turun profil aplikasi, dan sahkan di tetapan peranti anda.</div>',
                        ],
                        [
                            'q' => 'Bolehkah saya bermain Pussy888 tanpa memuat turun aplikasi?',
                            'a' =>
                                'Ya, anda boleh bermain terus melalui versi pelayar mudah alih tanpa sebarang muat turun.',
                        ],
                    ],
                ],
                [
                    'title' => 'Akaun & Log Masuk',
                    'items' => [
                        [
                            'q' => 'Bagaimana cara saya mendaftar akaun?',
                            'a' =>
                                'Lawati laman web atau aplikasi Pussy888, klik “Daftar,” dan lengkapkan borang pendaftaran. Sahkan butiran anda melalui emel atau SMS, kemudian mula bermain serta-merta.',
                        ],
                        [
                            'q' => 'Saya terlupa kata laluan log masuk. Apa yang perlu saya buat?',
                            'a' =>
                                'Hanya klik pautan "Lupa Kata Laluan" di halaman log masuk dan ikuti arahan untuk menetapkan semula kata laluan dengan selamat.',
                        ],
                    ],
                ],
                [
                    'title' => 'Deposit & Pengeluaran',
                    'items' => [
                        [
                            'q' => 'Kaedah deposit apa yang diterima?',
                            'a' =>
                                'Pussy888 menerima pindahan bank tempatan, deposit ATM, dan e-dompet popular seperti Touch ‘n Go, Boost, dan GrabPay.',
                        ],
                        [
                            'q' => 'Berapa lama masa pemprosesan pengeluaran?',
                            'a' =>
                                'Pengeluaran biasanya diproses dalam masa 24 jam, bergantung kepada status pengesahan anda dan kaedah pembayaran yang dipilih.',
                        ],
                        [
                            'q' => 'Adakah terdapat jumlah minimum untuk deposit dan pengeluaran?',
                            'a' => 'Ya, deposit minimum ialah RM10, dan pengeluaran minimum ialah RM50.',
                        ],
                    ],
                ],
                [
                    'title' => 'Bonus & Promosi',
                    'items' => [
                        [
                            'q' => 'Apakah bonus yang saya boleh dapat sebagai pemain baru?',
                            'a' =>
                                'Pussy888 menawarkan bonus alu-aluan yang lumayan kepada pemain baru, biasanya memadankan deposit pertama anda dengan peratusan tertentu. Semak halaman Promosi untuk butiran terkini.',
                        ],
                        [
                            'q' => 'Bagaimana saya boleh menuntut bonus saya?',
                            'a' =>
                                'Log masuk ke akaun anda, lawati halaman Promosi, pilih bonus yang anda mahu, dan ikuti arahan pengaktifan.',
                        ],
                        [
                            'q' => 'Apakah syarat pertaruhan?',
                            'a' =>
                                'Syarat pertaruhan menentukan berapa kali anda perlu mempertaruhkan jumlah bonus sebelum boleh mengeluarkan kemenangan. Sentiasa semak terma bonus untuk butiran tepat.',
                        ],
                    ],
                ],
                [
                    'title' => 'Maklumat Permainan',
                    'items' => [
                        [
                            'q' => 'Apakah jenis permainan yang ditawarkan oleh Pussy888?',
                            'a' =>
                                'Pussy888 menyediakan pelbagai permainan kasino termasuk slot, permainan dealer langsung, permainan meja (blackjack, rolet, baccarat), dan slot jackpot progresif.',
                        ],
                        [
                            'q' => 'Adakah permainan adil dan rawak?',
                            'a' =>
                                'Ya, semua permainan Pussy888 menggunakan Penjana Nombor Rawak (RNG) yang disahkan untuk menjamin keputusan yang adil.',
                        ],
                    ],
                ],
                [
                    'title' => 'Sokongan Pelanggan',
                    'items' => [
                        [
                            'q' => 'Bagaimana saya boleh hubungi sokongan pelanggan Pussy888?',
                            'a' =>
                                'Pasukan sokongan kami tersedia 24/7 melalui live chat, emel (<a href="mailto:support@pussy888.com" class="text-white underline">support@pussy888.com</a>), dan telefon untuk bantuan segera.',
                        ],
                    ],
                ],
                [
                    'title' => 'Keselamatan & Privasi',
                    'items' => [
                        [
                            'q' => 'Adakah maklumat peribadi saya selamat di Pussy888?',
                            'a' =>
                                'Sudah tentu. Pussy888 menggunakan penyulitan SSL canggih untuk melindungi data peribadi dan transaksi anda setiap masa.',
                        ],
                    ],
                ],
                [
                    'title' => 'Perjudian Bertanggungjawab',
                    'items' => [
                        [
                            'q' => 'Bagaimana saya boleh berjudi secara bertanggungjawab di Pussy888?',
                            'a' =>
                                'Tetapkan bajet, bermain dalam had anda, berehat secara berkala, dan gunakan had deposit serta alat pengecualian kendiri untuk mengekalkan tabiat permainan yang sihat.',
                        ],
                        [
                            'q' => 'Apa yang perlu saya lakukan jika saya ada masalah perjudian?',
                            'a' =>
                                'Jika anda menghadapi masalah, hubungi pasukan sokongan pelanggan kami untuk bantuan, atau dapatkan sokongan daripada organisasi tempatan seperti MyGAMCARE (1-800-88-2200).',
                        ],
                    ],
                ],
            ];
        @endphp

        <div wire:ignore>
            @php $q = 1; @endphp

            @foreach ($sections as $section)
                <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                    <div class="mb-4 text-2xl font-bold">{{ $section['title'] }}</div>

                    @foreach ($section['items'] as $item)
                        <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02] last:mb-0"
                            x-data="{ open: false }"
                        >
                            <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                                    Q{{ $q }}
                                </div>
                                <div class="flex-1 text-left text-lg font-semibold">{{ $item['q'] }}</div>
                                <svg
                                    class="size-5 transition"
                                    :class="open ? 'rotate-180' : ''"
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
                                class="px-4 pb-4 text-sm text-white/80 sm:text-base"
                                x-show="open"
                                x-transition
                            >
                                {!! $item['a'] !!}
                            </div>
                        </div>
                        @php $q++; @endphp
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <!-- Join the Community -->
    <x-partials.download
        title="Mula Bermain Hari Ini!"
        primaryCtaText="Muat Turun Aplikasi"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="Main Sekarang"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        Tidak jumpa jawapan anda di sini? Hubungi sokongan pelanggan Pussy888 pada bila-bila masa — kami sentiasa
        bersedia membantu.
        <div class="mt-3">
            Muat turun Pussy888 sekarang, daftar akaun anda, dan mula nikmati permainan kasino kegemaran anda dengan
            penuh keyakinan!
        </div>
    </x-partials.download>
</div>
