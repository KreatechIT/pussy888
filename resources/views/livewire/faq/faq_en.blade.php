<div class="min-h-screen bg-black text-white" x-data>
    <!-- Header -->
    <!-- Page Header -->
    <x-partials.heading title="Frequently Asked Questions"
        subtitle="Pussy888 • Trusted Online Casino • Malaysia"
    />
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-8 space-y-3 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                Welcome to the Pussy888 FAQ section, where you’ll find quick answers to common questions about our
                platform, games, payments, bonuses, and more.
                If you don’t find the answers you're looking for here, our friendly customer support team is available
                24/7 to help.
            </div>
        </div>

        <div wire:ignore>
            <!-- General Questions -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">General Questions</div>

                <!-- Q1 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q1</div>
                        <div class="flex-1 text-left text-lg font-semibold">What is Pussy888?</div>
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
                        Pussy888 is a trusted and secure online casino platform popular in Malaysia, offering slot
                        games, live dealer tables, jackpots, and table games accessible on mobile and desktop devices.
                    </div>
                </div>

                <!-- Q2 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q2</div>
                        <div class="flex-1 text-left text-lg font-semibold">Is Pussy888 legal and safe to play?</div>
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
                        Yes. Pussy888 operates with certified gaming software, strong SSL encryption, and complies with
                        industry standards to ensure a safe, secure, and fair gaming environment.
                    </div>
                </div>
            </div>

            <!-- Download & Installation -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">Download & Installation</div>

                <!-- Q3 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q3</div>
                        <div class="flex-1 text-left text-lg font-semibold">How can I download Pussy888 on my phone?
                        </div>
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
                        class="space-y-3 px-4 pb-4 text-sm text-white/80 sm:text-base"
                        x-show="open"
                        x-transition
                    >
                        <div><span class="font-semibold text-white">Android:</span> Download the APK from our official
                            site, enable installation from unknown sources, then install.</div>
                        <div><span class="font-semibold text-white">iOS:</span> Visit our website via Safari, download
                            the app profile, and verify it in your device settings.</div>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q4</div>
                        <div class="flex-1 text-left text-lg font-semibold">Can I play Pussy888 without downloading the
                            app?</div>
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
                        Yes, you can play instantly via the mobile web browser version without any downloads.
                    </div>
                </div>
            </div>

            <!-- Account & Login -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">Account & Login</div>

                <!-- Q5 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q5</div>
                        <div class="flex-1 text-left text-lg font-semibold">How do I register an account?</div>
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
                        Visit the Pussy888 website or app, click “Register,” and complete the registration form. Verify
                        your details via email or SMS, then start playing immediately.
                    </div>
                </div>

                <!-- Q6 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q6</div>
                        <div class="flex-1 text-left text-lg font-semibold">I forgot my login password. What do I do?
                        </div>
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
                        Simply click the "Forgot Password" link on the login page and follow instructions to reset your
                        password securely.
                    </div>
                </div>
            </div>

            <!-- Deposits & Withdrawals -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">Deposits & Withdrawals</div>

                <!-- Q7 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q7</div>
                        <div class="flex-1 text-left text-lg font-semibold">What deposit methods are accepted?</div>
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
                        Pussy888 accepts local bank transfers, ATM deposits, and popular e-wallets such as Touch ‘n Go,
                        Boost, and GrabPay.
                    </div>
                </div>

                <!-- Q8 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q8</div>
                        <div class="flex-1 text-left text-lg font-semibold">How long does it take to process
                            withdrawals?</div>
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
                        Withdrawals usually process within 24 hours, depending on your verification status and the
                        chosen payment method.
                    </div>
                </div>

                <!-- Q9 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q9</div>
                        <div class="flex-1 text-left text-lg font-semibold">Is there a minimum deposit and withdrawal
                            amount?</div>
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
                        Yes, the minimum deposit is RM10, and the minimum withdrawal is RM50.
                    </div>
                </div>
            </div>

            <!-- Bonuses & Promotions -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">Bonuses & Promotions</div>

                <!-- Q10 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q10</div>
                        <div class="flex-1 text-left text-lg font-semibold">What bonuses can I get as a new player?
                        </div>
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
                        Pussy888 offers a generous welcome bonus to new players, typically matching your first deposit
                        by a certain percentage. Check the Promotions page for current details.
                    </div>
                </div>

                <!-- Q11 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q11</div>
                        <div class="flex-1 text-left text-lg font-semibold">How can I claim my bonus?</div>
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
                        Log in to your account, visit the Promotions page, select your desired bonus, and follow the
                        activation instructions.
                    </div>
                </div>

                <!-- Q12 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q12</div>
                        <div class="flex-1 text-left text-lg font-semibold">What are wagering requirements?</div>
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
                        Wagering requirements specify how many times you need to wager the bonus amount before
                        withdrawing winnings. Always review bonus terms for exact details.
                    </div>
                </div>
            </div>

            <!-- Game Information -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">Game Information</div>

                <!-- Q13 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q13</div>
                        <div class="flex-1 text-left text-lg font-semibold">What type of games does Pussy888 offer?
                        </div>
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
                        Pussy888 provides a variety of casino games including slots, live dealer games, table games
                        (blackjack, roulette, baccarat), and progressive jackpot slots.
                    </div>
                </div>

                <!-- Q14 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q14</div>
                        <div class="flex-1 text-left text-lg font-semibold">Are the games fair and random?</div>
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
                        Yes, all Pussy888 games use certified Random Number Generators (RNGs) to guarantee unbiased,
                        fair results.
                    </div>
                </div>
            </div>

            <!-- Customer Support -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">Customer Support</div>

                <!-- Q15 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q15</div>
                        <div class="flex-1 text-left text-lg font-semibold">How can I contact Pussy888 customer
                            support?</div>
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
                        Our support team is available 24/7 via live chat, email (support@pussy888.com), and phone for
                        immediate assistance.
                    </div>
                </div>
            </div>

            <!-- Security & Privacy -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">Security & Privacy</div>

                <!-- Q16 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q16</div>
                        <div class="flex-1 text-left text-lg font-semibold">Is my personal information secure at
                            Pussy888?</div>
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
                        Absolutely. Pussy888 uses advanced SSL encryption to protect your personal data and transactions
                        at all times.
                    </div>
                </div>
            </div>

            <!-- Responsible Gambling -->
            <div class="mb-8 rounded-xl border border-white/10 bg-white/[0.03] p-6">
                <div class="mb-4 text-2xl font-bold">Responsible Gambling</div>

                <!-- Q17 -->
                <div class="mb-3 rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q17</div>
                        <div class="flex-1 text-left text-lg font-semibold">How can I gamble responsibly on Pussy888?
                        </div>
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
                        Set a budget, play within your limits, take breaks regularly, and use our deposit limit and
                        self-exclusion tools to maintain safe gaming habits.
                    </div>
                </div>

                <!-- Q18 -->
                <div class="rounded-xl border border-white/10 bg-white/[0.02]" x-data="{ open: false }">
                    <button class="flex w-full items-center gap-3 px-4 py-3" @click.stop="open=!open">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 font-bold text-black">
                            Q18</div>
                        <div class="flex-1 text-left text-lg font-semibold">What should I do if I have a gambling
                            problem?</div>
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
                        If you’re experiencing issues, contact our customer support team for help, or reach out to local
                        gambling support organizations such as MyGAMCARE (1-800-88-2200).
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Join the Community -->
    <x-partials.download
        title="Start Playing Today!"
        primaryCtaText="Download App"
        primaryCtaLink="#"
        secondaryCtaText="Play Now"
        secondaryCtaLink="#"
    >
        Didn’t find your question here? Contact our Pussy888 customer support anytime—we’re always
        ready to
        help.
        <div class="mt-3">
            Download Pussy888 now, register your account, and start enjoying your favorite casino games
            with
            confidence!
        </div>
    </x-partials.download>
</div>
