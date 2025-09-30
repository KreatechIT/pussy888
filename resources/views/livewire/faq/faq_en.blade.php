@push('title')
    Frequently Asked Questions
@endpush

<div class="min-h-screen bg-black text-white" x-data>
    <!-- Header -->
    <x-partials.heading title="Frequently Asked Questions" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />

    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-8 space-y-3 rounded-xl border border-white/10 bg-white/[0.03] p-6">
            <div class="text-white/80">
                Welcome to the Pussy888 FAQ section, where you’ll find quick answers to common questions about our
                platform, games, payments, bonuses, and more. If you don’t find the answers you're looking for here, our
                friendly customer support team is available 24/7 to help.
            </div>
        </div>

        @php
            $sections = [
                [
                    'title' => 'General Questions',
                    'items' => [
                        [
                            'q' => 'What is Pussy888?',
                            'a' =>
                                'Pussy888 is a trusted and secure online casino platform popular in Malaysia, offering slot games, live dealer tables, jackpots, and table games accessible on mobile and desktop devices.',
                        ],
                        [
                            'q' => 'Is Pussy888 legal and safe to play?',
                            'a' =>
                                'Yes. Pussy888 operates with certified gaming software, strong SSL encryption, and complies with industry standards to ensure a safe, secure, and fair gaming environment.',
                        ],
                    ],
                ],
                [
                    'title' => 'Download & Installation',
                    'items' => [
                        [
                            'q' => 'How can I download Pussy888 on my phone?',
                            'a' => '<div><span class="font-semibold text-white">Android:</span> Download the APK from our official site, enable installation from unknown sources, then install.</div>
                                    <div class="mt-2"><span class="font-semibold text-white">iOS:</span> Visit our website via Safari, download the app profile, and verify it in your device settings.</div>',
                        ],
                        [
                            'q' => 'Can I play Pussy888 without downloading the app?',
                            'a' =>
                                'Yes, you can play instantly via the mobile web browser version without any downloads.',
                        ],
                    ],
                ],
                [
                    'title' => 'Account & Login',
                    'items' => [
                        [
                            'q' => 'How do I register an account?',
                            'a' =>
                                'Visit the Pussy888 website or app, click “Register,” and complete the registration form. Verify your details via email or SMS, then start playing immediately.',
                        ],
                        [
                            'q' => 'I forgot my login password. What do I do?',
                            'a' =>
                                'Simply click the "Forgot Password" link on the login page and follow instructions to reset your password securely.',
                        ],
                    ],
                ],
                [
                    'title' => 'Deposits & Withdrawals',
                    'items' => [
                        [
                            'q' => 'What deposit methods are accepted?',
                            'a' =>
                                'Pussy888 accepts local bank transfers, ATM deposits, and popular e-wallets such as Touch ‘n Go, Boost, and GrabPay.',
                        ],
                        [
                            'q' => 'How long does it take to process withdrawals?',
                            'a' =>
                                'Withdrawals usually process within 24 hours, depending on your verification status and the chosen payment method.',
                        ],
                        [
                            'q' => 'Is there a minimum deposit and withdrawal amount?',
                            'a' => 'Yes, the minimum deposit is RM10, and the minimum withdrawal is RM50.',
                        ],
                    ],
                ],
                [
                    'title' => 'Bonuses & Promotions',
                    'items' => [
                        [
                            'q' => 'What bonuses can I get as a new player?',
                            'a' =>
                                'Pussy888 offers a generous welcome bonus to new players, typically matching your first deposit by a certain percentage. Check the Promotions page for current details.',
                        ],
                        [
                            'q' => 'How can I claim my bonus?',
                            'a' =>
                                'Log in to your account, visit the Promotions page, select your desired bonus, and follow the activation instructions.',
                        ],
                        [
                            'q' => 'What are wagering requirements?',
                            'a' =>
                                'Wagering requirements specify how many times you need to wager the bonus amount before withdrawing winnings. Always review bonus terms for exact details.',
                        ],
                    ],
                ],
                [
                    'title' => 'Game Information',
                    'items' => [
                        [
                            'q' => 'What type of games does Pussy888 offer?',
                            'a' =>
                                'Pussy888 provides a variety of casino games including slots, live dealer games, table games (blackjack, roulette, baccarat), and progressive jackpot slots.',
                        ],
                        [
                            'q' => 'Are the games fair and random?',
                            'a' =>
                                'Yes, all Pussy888 games use certified Random Number Generators (RNGs) to guarantee unbiased, fair results.',
                        ],
                    ],
                ],
                [
                    'title' => 'Customer Support',
                    'items' => [
                        [
                            'q' => 'How can I contact Pussy888 customer support?',
                            'a' =>
                                'Our support team is available 24/7 via live chat, email (<a href="mailto:support@pussy888.com" class="text-white underline">support@pussy888.com</a>), and phone for immediate assistance.',
                        ],
                    ],
                ],
                [
                    'title' => 'Security & Privacy',
                    'items' => [
                        [
                            'q' => 'Is my personal information secure at Pussy888?',
                            'a' =>
                                'Absolutely. Pussy888 uses advanced SSL encryption to protect your personal data and transactions at all times.',
                        ],
                    ],
                ],
                [
                    'title' => 'Responsible Gambling',
                    'items' => [
                        [
                            'q' => 'How can I gamble responsibly on Pussy888?',
                            'a' =>
                                'Set a budget, play within your limits, take breaks regularly, and use our deposit limit and self-exclusion tools to maintain safe gaming habits.',
                        ],
                        [
                            'q' => 'What should I do if I have a gambling problem?',
                            'a' =>
                                'If you’re experiencing issues, contact our customer support team for help, or reach out to local gambling support organizations such as MyGAMCARE (1-800-88-2200).',
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
        title="Start Playing Today!"
        primaryCtaText="Download App"
        primaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
        secondaryCtaText="Play Now"
        secondaryCtaLink="https://lv168.com/en/register?up=luckywinwin14"
    >
        Didn’t find your question here? Contact our Pussy888 customer support anytime—we’re always
        ready to help.
        <div class="mt-3">
            Download Pussy888 now, register your account, and start enjoying your favorite casino games with confidence!
        </div>
    </x-partials.download>
</div>
