@push('title')
    Terma & Syarat
@endpush

<div class="min-h-screen bg-black text-white">
    <x-partials.heading title="Terma & Syarat" subtitle="Pussy888 • Kasino Dalam Talian Dipercayai • Malaysia" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <!-- Pengenalan -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-lg leading-relaxed text-white/80">
                Selamat datang ke Pussy888 Malaysia. Sila baca Terma & Syarat (“Terma”) ini dengan teliti sebelum
                menggunakan laman web atau aplikasi mudah alih kami. Dengan mengakses atau menggunakan platform kami,
                anda bersetuju untuk terikat dengan Terma ini. Jika anda tidak bersetuju, sila jangan gunakan
                perkhidmatan kami.
            </div>
        </div>

        <!-- 1. Kelayakan -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    1</div>
                <div class="text-2xl font-bold">Kelayakan</div>
            </div>
            <div class="space-y-2">
                @foreach (['Berumur sekurang-kurangnya 18 tahun atau umur perjudian sah di bidang kuasa anda.', 'Bersetuju untuk mematuhi semua undang-undang tempatan, kebangsaan, dan antarabangsa yang berkenaan.', 'Tidak tinggal di negara atau wilayah di mana perjudian dalam talian adalah dilarang.', 'Kami berhak untuk meminta pengesahan umur atau identiti pada bila-bila masa.'] as $item)
                    <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                        <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                        <div class="text-sm text-white/80 sm:text-base">{{ $item }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- 2. Pendaftaran Akaun -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    2</div>
                <div class="text-2xl font-bold">Pendaftaran Akaun</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>Untuk bermain permainan wang sebenar, anda mesti mencipta akaun dengan memberikan maklumat yang tepat
                    dan lengkap, termasuk:</p>
                <div class="space-y-2">
                    @foreach (['Nama pengguna dan kata laluan yang selamat', 'Nombor mudah alih dan alamat e-mel yang sah'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>Anda bertanggungjawab untuk mengekalkan kerahsiaan kelayakan log masuk anda. Sebarang aktiviti di
                    bawah akaun anda akan dianggap sebagai tindakan anda sendiri.</p>
            </div>
        </div>

        <!-- 3. Perjudian Bertanggungjawab -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    3</div>
                <div class="text-2xl font-bold">Perjudian Bertanggungjawab</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                Kami komited untuk mempromosikan perjudian yang bertanggungjawab. Anda boleh meminta untuk menetapkan
                had deposit, mengambil rehat sementara, atau mengecualikan diri. Jika anda merasakan perjudian anda di
                luar kawalan, kami menggalakkan anda mendapatkan bantuan daripada perkhidmatan sokongan profesional.
            </div>
        </div>

        <!-- 4. Keadilan Permainan -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    4</div>
                <div class="text-2xl font-bold">Keadilan Permainan</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                Semua permainan menggunakan Penjana Nombor Rawak (RNG) yang diperakui untuk memastikan keputusan yang
                adil dan tidak berat sebelah. Platform kami diaudit secara berkala oleh agensi pihak ketiga bagi tujuan
                pematuhan dan integriti.
            </div>
        </div>

        <!-- 5. Bonus & Promosi -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    5</div>
                <div class="text-2xl font-bold">Bonus & Promosi</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>Bonus, putaran percuma, dan promosi lain tertakluk kepada:</p>
                <div class="space-y-2">
                    @foreach (['Keperluan pertaruhan', 'Tarikh luput', 'Sekatan permainan tertentu'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>Pussy888 berhak meminda atau menarik balik mana-mana promosi mengikut budi bicara sendiri.
                    Penyalahgunaan tawaran bonus boleh menyebabkan penggantungan atau penamatan akaun.</p>
            </div>
        </div>

        <!-- 6. Deposit & Pengeluaran -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    6</div>
                <div class="text-2xl font-bold">Deposit & Pengeluaran</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>Kami menyokong transaksi yang selamat dan terjamin menggunakan kaedah pembayaran tempatan, termasuk
                    pemindahan bank dan e-dompet.</p>
                <div class="space-y-2">
                    @foreach (['Had minimum dan maksimum untuk deposit/pengeluaran adalah terpakai.', 'Pengeluaran mungkin memerlukan pengesahan identiti.', 'Semua transaksi diproses dalam Ringgit Malaysia (MYR) melainkan dinyatakan sebaliknya.', 'Aktiviti mencurigakan atau penipuan boleh menyebabkan kelewatan atau penolakan pengeluaran.'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 7. Aktiviti Dilarang -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    7</div>
                <div class="text-2xl font-bold">Aktiviti Dilarang</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>Anda bersetuju untuk tidak:</p>
                <div class="space-y-2">
                    @foreach (['Menggunakan berbilang akaun untuk menuntut bonus atau memanipulasi keputusan', 'Menggunakan bot, perisian, atau alat automasi untuk bermain permainan', 'Memindahkan, menjual, atau menyewakan akaun anda', 'Berkongsi atau menerbitkan kandungan yang menyinggung, berbahaya, atau menyalahi undang-undang'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>Pelanggaran terma ini boleh mengakibatkan penggantungan akaun secara kekal tanpa notis.</p>
            </div>
        </div>

        <!-- 8. Harta Intelek -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    8</div>
                <div class="text-2xl font-bold">Harta Intelek</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                Semua kandungan, logo, perisian, dan imej di platform Pussy888 Malaysia adalah harta eksklusif syarikat
                kami. Anda tidak boleh menyalin, mengedar, mengubah suai, atau menghasilkan semula mana-mana bahagian
                tanpa kebenaran bertulis terlebih dahulu.
            </div>
        </div>

        <!-- 9. Had Tanggungjawab -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    9</div>
                <div class="text-2xl font-bold">Had Tanggungjawab</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>Kami berusaha menyediakan persekitaran permainan yang stabil dan selamat, namun:</p>
                <div class="space-y-2">
                    @foreach (['Kami tidak bertanggungjawab atas kerosakan akibat isu teknikal, gangguan internet, atau masa henti pelayan.', 'Kami tidak menjamin akses tanpa gangguan atau prestasi permainan/perkhidmatan tanpa ralat.', 'Penggunaan platform kami adalah atas risiko anda sendiri.'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 10. Pindaan Terma -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    10</div>
                <div class="text-2xl font-bold">Pindaan Terma</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                Kami boleh mengemas kini Terma ini pada bila-bila masa. Penggunaan berterusan platform selepas perubahan
                bermakna anda menerima Terma yang dikemas kini. Kami menggalakkan pengguna untuk menyemak halaman ini
                secara berkala.
            </div>
        </div>

        <!-- 11. Penamatan Akses -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    11</div>
                <div class="text-2xl font-bold">Penamatan Akses</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                Kami berhak untuk menamatkan akses atau akaun anda pada bila-bila masa, dengan atau tanpa notis, jika
                kami mengesyaki penipuan, pelanggaran terma, atau aktiviti haram.
            </div>
        </div>

        <!-- 12. Undang-Undang Mentadbir -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    12</div>
                <div class="text-2xl font-bold">Undang-Undang Mentadbir</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                Terma ini akan ditadbir dan ditafsirkan mengikut undang-undang Malaysia. Sebarang pertikaian yang timbul
                daripada penggunaan platform akan dikendalikan di bawah bidang kuasa Malaysia.
            </div>
        </div>

        <!-- Hubungi Kami -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    13</div>
                <div class="text-2xl font-semibold">Hubungi Kami</div>
            </div>

            <div class="mt-4 text-white/80">
                Jika anda mempunyai soalan tentang Terma & Syarat ini, sila hubungi sokongan pelanggan kami melalui:
            </div>

            <div class="mt-6 grid gap-4 sm:grid-cols-3">
                <div class="flex flex-col items-start rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="flex items-center gap-2">
                        <svg
                            class="h-5 w-5 text-purple-400"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.83L3 20l1.16-3.51A7.96 7.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                            />
                        </svg>
                        <div class="font-semibold">Sembang Langsung</div>
                    </div>
                    <div class="mt-2 text-sm text-white/70">Tersedia 24/7 di laman web dan aplikasi kami</div>
                </div>

                <div class="flex flex-col items-start rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="flex items-center gap-2">
                        <svg
                            class="h-5 w-5 text-purple-400"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M16 12H8m0 0l4-4m-4 4l4 4m8-8v8a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2h12a2 2 0 012 2z"
                            />
                        </svg>
                        <div class="font-semibold">E-mel</div>
                    </div>
                    <div class="mt-2 text-sm text-white/70">support@pussy888malaysia.com</div>
                </div>

                <div class="flex flex-col items-start rounded-lg border border-white/10 bg-white/[0.02] p-4">
                    <div class="flex items-center gap-2">
                        <svg
                            class="h-5 w-5 text-purple-400"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h2.28a2 2 0 011.97 1.56l.7 3.1a2 2 0 01-.57 1.94l-1.2 1.2a16 16 0 006.58 6.58l1.2-1.2a2 2 0 011.94-.57l3.1.7A2 2 0 0121 18.72V21a2 2 0 01-2 2c-9.39 0-17-7.61-17-17z"
                            />
                        </svg>
                        <div class="font-semibold">Telefon</div>
                    </div>
                    <div class="mt-2 text-sm text-white/70">Tersedia atas permintaan melalui sokongan langsung</div>
                </div>
            </div>
        </div>
    </div>
</div>
