@push('title')
    Polisi Privasi
@endpush

<div class="min-h-screen bg-black text-white">
    <!-- Page Header -->
    <x-partials.heading title="Polisi Privasi" subtitle="Pussy888 • Kasino Dalam Talian Dipercayai • Malaysia" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <!-- Intro -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                Di Pussy888 Malaysia, kami komited untuk melindungi privasi anda dan memastikan maklumat peribadi anda
                dikendalikan dengan cara yang selamat dan bertanggungjawab. Polisi Privasi ini menerangkan bagaimana
                kami mengumpul, menggunakan, menyimpan, dan melindungi data anda apabila anda mengakses platform kami
                melalui laman web atau aplikasi mudah alih.
                <br><br>
                Dengan menggunakan perkhidmatan kami, anda bersetuju dengan terma yang dinyatakan dalam polisi ini.
            </div>
        </div>

        <div class="space-y-6">
            <!-- 1. Maklumat Yang Kami Kumpul -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        1</div>
                    <div class="text-2xl font-semibold">Maklumat Yang Kami Kumpul</div>
                </div>

                <div class="mt-4 text-white/80">Kami mengumpul jenis maklumat peribadi berikut:</div>

                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <!-- Maklumat Akaun -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">a. Maklumat Akaun</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['Nama, nama pengguna, kata laluan', 'Alamat emel dan nombor telefon', 'Tarikh lahir', 'Bahasa dan mata wang pilihan'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Maklumat Transaksi -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">b. Maklumat Transaksi</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['Sejarah deposit dan pengeluaran', 'Butiran kaedah pembayaran (bank/e-dompet)', 'Penggunaan bonus dan promosi'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Data Teknikal -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">c. Data Teknikal</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['Jenis peranti dan pelayar digunakan', 'Alamat IP dan lokasi', 'Sistem operasi dan ID mudah alih', 'Log aktiviti permainan dan tempoh sesi'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sejarah Komunikasi -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">d. Sejarah Komunikasi</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['Mesej dengan sokongan pelanggan', 'Maklum balas dan aduan', 'Pilihan emel pemasaran'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Bagaimana Kami Menggunakan Maklumat Anda -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        2</div>
                    <div class="text-2xl font-semibold">Bagaimana Kami Menggunakan Maklumat Anda</div>
                </div>
                <div class="mt-4 text-white/80">Maklumat anda digunakan untuk:</div>
                <div class="mt-2 space-y-2">
                    @foreach (['Membuat dan mengurus akaun pemain anda', 'Memproses pembayaran dengan selamat', 'Mencegah penipuan, pencurian identiti, dan aktiviti haram', 'Menyesuaikan pengalaman permainan anda', 'Menghantar tawaran promosi (dengan persetujuan anda)', 'Meningkatkan prestasi dan kebolehgunaan platform', 'Mematuhi kewajipan undang-undang dan peraturan'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">Kami tidak menjual atau menyewakan data peribadi anda kepada pihak
                    ketiga.</div>
            </div>

            <!-- 3. Kuki dan Penjejakan -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        3</div>
                    <div class="text-2xl font-semibold">Kuki dan Penjejakan</div>
                </div>
                <div class="mt-4 text-white/80">
                    Kami menggunakan kuki dan teknologi yang serupa untuk meningkatkan pengalaman pengguna anda:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Mengingati kelayakan log masuk', 'Menjejak penggunaan dan prestasi', 'Menyampaikan kandungan dan tawaran peribadi'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    Anda boleh mengurus atau menyahdayakan kuki dalam tetapan pelayar anda, tetapi ini mungkin
                    menjejaskan beberapa ciri platform.
                </div>
            </div>

            <!-- 4. Perkongsian dan Pendedahan Data -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        4</div>
                    <div class="text-2xl font-semibold">Perkongsian dan Pendedahan Data</div>
                </div>
                <div class="mt-4 text-white/80">
                    Kami mungkin berkongsi data anda dengan pihak ketiga yang dipercayai hanya apabila perlu untuk:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Memproses pembayaran (contoh: gerbang pembayaran)', 'Mencegah penipuan dan mengesahkan identiti', 'Mematuhi permintaan undang-undang (contoh: pihak berkuasa penguatkuasaan)'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    Semua pihak ketiga diwajibkan secara kontrak untuk mengendalikan data anda dengan selamat dan sulit.
                </div>
            </div>

            <!-- 5. Keselamatan Data -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        5</div>
                    <div class="text-2xl font-semibold">Keselamatan Data</div>
                </div>
                <div class="mt-4 text-white/80">
                    Kami melaksanakan langkah keselamatan yang ketat untuk melindungi data anda:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Penyulitan SSL untuk semua transaksi', 'Sistem firewall dan pengesanan pencerobohan', 'Audit platform secara berkala', 'Akses terhad kepada data peribadi'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    Walaupun kami melakukan yang terbaik untuk melindungi data anda, tiada sistem yang 100% selamat.
                    Kami mengesyorkan menggunakan kata laluan yang kukuh dan mengaktifkan pengesahan dua faktor (jika
                    tersedia).
                </div>
            </div>

            <!-- 6. Penyimpanan Data -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        6</div>
                    <div class="text-2xl font-semibold">Penyimpanan Data</div>
                </div>
                <div class="mt-4 text-white/80">
                    Kami menyimpan data peribadi anda hanya selama yang perlu untuk:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Memenuhi keperluan undang-undang dan peraturan', 'Menyelesaikan pertikaian', 'Mengekalkan rekod transaksi yang tepat'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    Selepas tempoh penyimpanan, data anda akan dipadamkan atau dianonimkan dengan selamat.
                </div>
            </div>

            <!-- 7. Hak Anda -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        7</div>
                    <div class="text-2xl font-semibold">Hak Anda</div>
                </div>
                <div class="mt-4 text-white/80">
                    Anda mempunyai hak untuk:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Mengakses dan menyemak data peribadi yang kami simpan tentang anda', 'Membetulkan maklumat yang tidak tepat atau sudah lapuk', 'Meminta pemadaman akaun dan data berkaitan (tertakluk pada had undang-undang)', 'Menarik balik persetujuan untuk komunikasi pemasaran pada bila-bila masa'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    Untuk melaksanakan hak ini, sila hubungi pasukan sokongan kami.
                </div>
            </div>

            <!-- 8. Komunikasi Pemasaran -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        8</div>
                    <div class="text-2xl font-semibold">Komunikasi Pemasaran</div>
                </div>
                <div class="mt-4 text-white/80">
                    Jika anda memilih untuk menerima promosi, kami mungkin menghantar:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Bonus alu-aluan', 'Tawaran mingguan dan promosi pulangan tunai', 'Ganjaran VIP dan kejohanan eksklusif'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    Anda boleh berhenti melanggan emel pemasaran pada bila-bila masa dengan mengklik pautan
                    "unsubscribe" atau menghubungi sokongan.
                </div>
            </div>

            <!-- 9. Privasi Kanak-Kanak -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        9</div>
                    <div class="text-2xl font-semibold">Privasi Kanak-Kanak</div>
                </div>
                <div class="mt-4 text-white/80">
                    Pussy888 Malaysia tidak mengumpul atau membenarkan pendaftaran oleh sesiapa di bawah umur 18 tahun.
                    Jika kami mendapati seorang bawah umur telah memberikan maklumat peribadi kepada kami, kami akan
                    segera memadamkannya dan menamatkan akaun tersebut.
                </div>
            </div>

            <!-- 10. Perubahan Polisi -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        10</div>
                    <div class="text-2xl font-semibold">Perubahan Polisi Ini</div>
                </div>
                <div class="mt-4 text-white/80">
                    Kami berhak untuk mengemas kini Polisi Privasi ini pada bila-bila masa. Sebarang perubahan akan
                    disiarkan di halaman ini, dengan tarikh terkini. Penggunaan berterusan platform kami selepas
                    perubahan bermakna anda menerima polisi baharu.
                </div>
                <div class="mt-2 text-sm text-white/60">Kali terakhir dikemas kini: [Masukkan Tarikh]</div>
            </div>

            <!-- 11. Hubungi Kami -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        11</div>
                    <div class="text-2xl font-semibold">Hubungi Kami</div>
                </div>

                <div class="mt-4 text-white/80">
                    Jika anda mempunyai sebarang soalan atau kebimbangan mengenai Polisi Privasi ini atau bagaimana kami
                    mengendalikan data anda, sila hubungi kami:
                </div>

                <div class="mt-6 grid gap-4 sm:grid-cols-3">
                    <!-- Live Chat -->
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
                            <div class="font-semibold">Live Chat</div>
                        </div>
                        <div class="mt-2 text-sm text-white/70">Tersedia 24/7</div>
                    </div>

                    <!-- Email -->
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
                            <div class="font-semibold">Emel</div>
                        </div>
                        <div class="mt-2 text-sm text-white/70">privacy@pussy888malaysia.com</div>
                    </div>

                    <!-- Telefon -->
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
                        <div class="mt-2 text-sm text-white/70">Tersedia melalui sokongan pelanggan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
