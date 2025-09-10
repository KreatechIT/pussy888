@push('title')
    Privacy Policy
@endpush

<div class="min-h-screen bg-black text-white">
    <!-- Page Header -->
    <x-partials.heading title="Privacy Policy" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <!-- Intro -->
        <div class="mb-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                At Pussy888 Malaysia, we are committed to protecting your privacy and ensuring that your
                personal information is handled in a safe and responsible manner. This Privacy Policy
                explains how we collect, use, store, and protect your data when you access our platform
                through our website or mobile app.
                <br><br>
                By using our services, you agree to the terms outlined in this policy.
            </div>
        </div>

        <div class="space-y-6">
            <!-- 1. Information We Collect -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        1</div>
                    <div class="text-2xl font-semibold">Information We Collect</div>
                </div>

                <div class="mt-4 text-white/80">We collect the following types of personal information:</div>

                <!-- Subsections Grid -->
                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <!-- Account Info -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">Account Information</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['Name, username, password', 'Email address and phone number', 'Date of birth', 'Preferred language and currency'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Transaction Info -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">Transaction Information</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['Deposit and withdrawal history', 'Payment method details (bank/e-wallet info)', 'Bonus and promotional usage'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Technical Data -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">Technical Data</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['Device type and browser used', 'IP address and location', 'Operating system and mobile ID', 'Game activity logs and session duration'] as $i)
                                <div
                                    class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                                    <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                                    <div class="text-sm text-white/70">{{ $i }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Communication History -->
                    <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                        <div class="font-semibold text-purple-400">Communication History</div>
                        <div class="mt-3 space-y-2">
                            @foreach (['Messages with customer support', 'Feedback and complaints', 'Marketing email preferences'] as $i)
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

            <!-- 2. How We Use Your Information -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        2</div>
                    <div class="text-2xl font-semibold">How We Use Your Information</div>
                </div>
                <div class="mt-4 text-white/80">Your information is used to:</div>
                <div class="mt-2 space-y-2">
                    @foreach (['Create and manage your player account', 'Process payments securely', 'Prevent fraud, identity theft, and illegal activity', 'Customize your gaming experience', 'Send promotional offers (with your consent)', 'Improve platform performance and usability', 'Comply with legal and regulatory obligations'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">We do not sell or rent your personal data to third parties.</div>
            </div>

            <!-- 3. Cookies and Tracking -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        3</div>
                    <div class="text-2xl font-semibold">Cookies and Tracking</div>
                </div>
                <div class="mt-4 text-white/80">
                    We use cookies and similar technologies to enhance your user experience:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Remember login credentials', 'Track usage and performance', 'Deliver personalized content and offers'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    You can manage or disable cookies in your browser settings, though this may affect some platform
                    features.
                </div>
            </div>

            <!-- 4. Data Sharing and Disclosure -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        4</div>
                    <div class="text-2xl font-semibold">Data Sharing and Disclosure</div>
                </div>
                <div class="mt-4 text-white/80">
                    We may share your data with trusted third parties only when necessary to:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Process payments (e.g., payment gateways)', 'Prevent fraud and verify identities', 'Comply with legal requests (e.g., from regulators or law enforcement)'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    All third parties are contractually required to handle your data securely and confidentially.
                </div>
            </div>

            <!-- 5. Data Security -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        5</div>
                    <div class="text-2xl font-semibold">Data Security</div>
                </div>
                <div class="mt-4 text-white/80">
                    We implement strict security measures to protect your data:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['SSL encryption for all transactions', 'Firewall and intrusion detection systems', 'Regular platform audits', 'Restricted access to personal data'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    While we do our best to safeguard your data, no system is 100% secure. We recommend using strong
                    passwords and enabling two-factor authentication (if available).
                </div>
            </div>

            <!-- 6. Data Retention -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        6</div>
                    <div class="text-2xl font-semibold">Data Retention</div>
                </div>
                <div class="mt-4 text-white/80">
                    We retain your personal data only as long as necessary for:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Fulfilling legal and regulatory requirements', 'Resolving disputes', 'Maintaining accurate transaction records'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    After the retention period, your data is securely deleted or anonymized.
                </div>
            </div>

            <!-- 7. Your Rights -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        7</div>
                    <div class="text-2xl font-semibold">Your Rights</div>
                </div>
                <div class="mt-4 space-y-2">
                    @foreach (['Access and review the personal data we hold about you', 'Correct inaccurate or outdated information', 'Request deletion of your account and associated data (subject to legal limitations)', 'Withdraw consent for marketing communications at any time'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-pink-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    To exercise these rights, please contact our support team.
                </div>
            </div>

            <!-- 8. Marketing Communications -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        8</div>
                    <div class="text-2xl font-semibold">Marketing Communications</div>
                </div>
                <div class="mt-4 text-white/80">
                    If you opt-in to receive promotions, we may send you:
                </div>
                <div class="mt-2 space-y-2">
                    @foreach (['Welcome bonuses', 'Weekly offers and cashback promotions', 'VIP rewards and exclusive tournaments'] as $i)
                        <div class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/[0.04] p-3">
                            <div class="mt-1 size-2 rounded-full bg-purple-400"></div>
                            <div class="text-sm text-white/70">{{ $i }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 text-white/80">
                    You may unsubscribe from marketing emails at any time by clicking the "unsubscribe" link
                    or contacting support.
                </div>
            </div>

            <!-- 9. Children’s Privacy -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        9</div>
                    <div class="text-2xl font-semibold">Children’s Privacy</div>
                </div>
                <div class="mt-4 text-white/80">
                    Pussy888 Malaysia does not knowingly collect or allow registration by anyone under the age of 18.
                    If we discover that a minor has provided us with personal information, we will immediately
                    delete it and terminate the account.
                </div>
            </div>

            <!-- 10. Changes to This Policy -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        10</div>
                    <div class="text-2xl font-semibold">Changes to This Policy</div>
                </div>
                <div class="mt-4 text-white/80">
                    We reserve the right to update this Privacy Policy at any time. Any changes will be posted
                    on this page, with the updated date. Continued use of our platform after changes implies
                    acceptance of the new policy.
                </div>
                <div class="mt-2 text-sm text-white/60">Last updated: [Insert Date]</div>
            </div>

            <!-- 11. Contact Us -->
            <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-bold text-black">
                        11</div>
                    <div class="text-2xl font-semibold">Contact Us</div>
                </div>

                <div class="mt-4 text-white/80">
                    If you have any questions or concerns about this Privacy Policy or how we handle your data,
                    please contact us:
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
                        <div class="mt-2 text-sm text-white/70">Available 24/7</div>
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
                            <div class="font-semibold">Email</div>
                        </div>
                        <div class="mt-2 text-sm text-white/70">privacy@pussy888malaysia.com</div>
                    </div>

                    <!-- Phone -->
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
                        <div class="mt-2 text-sm text-white/70">Available via customer service support</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
