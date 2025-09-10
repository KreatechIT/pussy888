@push('title')
    Terms & Conditions
@endpush

<div class="min-h-screen bg-black text-white">
    <!-- Page Heading -->
    <x-partials.heading title="Terms & Conditions" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <!-- Intro -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-lg leading-relaxed text-white/80">
                Welcome to Pussy888 Malaysia. Please read these Terms & Conditions (“Terms”) carefully before using our
                website or mobile application. By accessing or using our platform, you agree to be bound by these Terms.
                If you do not agree, please do not use our services.
            </div>
        </div>

        <!-- 1. Eligibility -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    1
                </div>
                <div class="text-2xl font-bold">Eligibility</div>
            </div>
            <div class="space-y-2">
                @foreach (['Be at least 18 years old or of legal gambling age in your jurisdiction.', 'Agree to abide by all applicable local, national, and international laws.', 'Not reside in a country or region where online gambling is prohibited.', 'We reserve the right to request age or identity verification at any time.'] as $item)
                    <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                        <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                        <div class="text-sm text-white/80 sm:text-base">{{ $item }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- 2. Account Registration -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    2
                </div>
                <div class="text-2xl font-bold">Account Registration</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>To play real-money games, you must create an account by providing accurate and complete information,
                    including:</p>
                <div class="space-y-2">
                    @foreach (['Username and secure password', 'Valid mobile number and email address'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>You are responsible for maintaining the confidentiality of your login credentials. Any activity under
                    your account will be deemed as your own actions.</p>
            </div>
        </div>

        <!-- 3. Responsible Gaming -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    3
                </div>
                <div class="text-2xl font-bold">Responsible Gaming</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                We are committed to promoting responsible gambling. You may request to set deposit limits, take a
                temporary break, or self-exclude. If you feel your gambling is out of control, we encourage you to seek
                help from professional support services.
            </div>
        </div>

        <!-- 4. Game Fairness -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    4
                </div>
                <div class="text-2xl font-bold">Game Fairness</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                All games use certified Random Number Generators (RNG) to ensure fair and unbiased outcomes. Our
                platform is regularly audited by third-party agencies for compliance and integrity.
            </div>
        </div>

        <!-- 5. Bonuses & Promotions -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    5
                </div>
                <div class="text-2xl font-bold">Bonuses & Promotions</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>Bonuses, free spins, and other promotions are subject to:</p>
                <div class="space-y-2">
                    @foreach (['Wagering requirements', 'Expiry dates', 'Specific game restrictions'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>Pussy888 reserves the right to amend or withdraw any promotion at its discretion. Abuse of bonus
                    offers may lead to account suspension or termination.</p>
            </div>
        </div>

        <!-- 6. Deposits & Withdrawals -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    6
                </div>
                <div class="text-2xl font-bold">Deposits & Withdrawals</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>We support safe and secure transactions using local payment methods, including bank transfers and
                    e-wallets.</p>
                <div class="space-y-2">
                    @foreach (['Minimum and maximum deposit/withdrawal limits apply.', 'Withdrawals may require identity verification.', 'All transactions are processed in Malaysian Ringgit (MYR) unless otherwise stated.', 'Suspicious or fraudulent activity may result in delays or refusal of withdrawals.'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 7. Prohibited Activities -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    7
                </div>
                <div class="text-2xl font-bold">Prohibited Activities</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>You agree not to:</p>
                <div class="space-y-2">
                    @foreach (['Use multiple accounts to claim bonuses or manipulate outcomes', 'Use bots, software, or automation tools to play games', 'Transfer, sell, or rent your account', 'Share or publish offensive, harmful, or illegal content'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
                <p>Violation of these terms may result in permanent account suspension without notice.</p>
            </div>
        </div>

        <!-- 8. Intellectual Property -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    8
                </div>
                <div class="text-2xl font-bold">Intellectual Property</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                All content, logos, software, and images on the Pussy888 Malaysia platform are the exclusive property of
                our company. You may not copy, distribute, modify, or reproduce any part without prior written consent.
            </div>
        </div>

        <!-- 9. Limitation of Liability -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    9
                </div>
                <div class="text-2xl font-bold">Limitation of Liability</div>
            </div>
            <div class="space-y-3 text-sm text-white/80 sm:text-base">
                <p>We strive to provide a stable and secure gaming environment, but:</p>
                <div class="space-y-2">
                    @foreach (['We are not liable for damages due to technical issues, internet disruptions, or server downtime.', 'We do not guarantee uninterrupted access or error-free performance of games or services.', 'Your use of our platform is at your own risk.'] as $item)
                        <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/[0.04] p-4">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div>{{ $item }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 10. Modifications to Terms -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    10
                </div>
                <div class="text-2xl font-bold">Modifications to Terms</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                We may update these Terms at any time. Continued use of the platform after changes means you accept the
                updated Terms. We encourage users to review this page regularly.
            </div>
        </div>

        <!-- 11. Termination of Access -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    11
                </div>
                <div class="text-2xl font-bold">Termination of Access</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                We reserve the right to terminate your access or account at any time, with or without notice, if we
                suspect fraud, breach of terms, or illegal activity.
            </div>
        </div>

        <!-- 12. Governing Law -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="mb-4 flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    12
                </div>
                <div class="text-2xl font-bold">Governing Law</div>
            </div>
            <div class="text-sm text-white/80 sm:text-base">
                These Terms shall be governed and interpreted in accordance with the laws of Malaysia. Any disputes
                arising from your use of the platform will be handled under Malaysian jurisdiction.
            </div>
        </div>

        <!-- Contact -->
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                    13
                </div>
                <div class="text-2xl font-semibold">Contact Us</div>
            </div>

            <div class="mt-4 text-white/80">
                If you have questions about these Terms & Conditions, please contact our customer support via:
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
                        <div class="font-semibold">Live Chat</div>
                    </div>
                    <div class="mt-2 text-sm text-white/70">Available 24/7 on our website and app</div>
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
                        <div class="font-semibold">Email</div>
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
                        <div class="font-semibold">Phone</div>
                    </div>
                    <div class="mt-2 text-sm text-white/70">Available upon request via live support</div>
                </div>
            </div>
        </div>
    </div>
</div>
