<div class="bg-black text-white" x-data>
    <!-- Header -->
    <x-partials.heading title="Download" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />
    <!-- H1 / Hero -->
    <div class="relative">
        <div class="mx-auto max-w-7xl px-4 py-10">
            <div class="grid items-center gap-6 lg:grid-cols-[1.2fr_.8fr]">
                <div>
                    <h1 class="text-3xl/tight font-bold sm:text-4xl/tight">
                        Download Pussy888 – Play Anywhere, Anytime on Mobile or Web
                    </h1>
                    <p class="mt-4 text-white/80">
                        Looking for a fast and secure way to enjoy the best online casino games in Malaysia?
                        The Pussy888 mobile app offers a seamless gaming experience right at your fingertips.
                        Whether you use an Android or iOS device, or prefer instant access via mobile browser, we’ve got
                        you covered.
                    </p>
                    <p class="mt-3 text-white/80">
                        Download the official Pussy888 app today and dive into exciting slot games, live dealer tables,
                        jackpots, and more — all optimized for mobile play.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <x-partials.button href="#">Android APK</x-partials.button>
                        <x-partials.button href="#">iOS Install</x-partials.button>
                        <x-partials.button type="outline" href="#">Play on Web</x-partials.button>
                    </div>
                </div>
                <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="font-semibold">Highlights</div>
                    <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                        <li>Full access to all Pussy888 casino games</li>
                        <li>Smooth & responsive performance</li>
                        <li>Push notifications for promos</li>
                        <li>Faster login & loading speed</li>
                        <li>Enhanced mobile experience (Android & iOS)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-t border-white/10"></div>
    </div>

    <!-- Why Download (cards) -->
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">Why Download the Pussy888 App?</div>
            <div class="text-sm text-white/70">Enjoy the best mobile-first experience with speed, security, and
                convenience.</div>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (['Full access to all Pussy888 casino games', 'Smooth and responsive performance on all devices', 'Push notifications for promotions and updates', 'Faster login and improved game loading speed', 'Enhanced mobile experience for both Android and iOS users'] as $point)
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
                <div class="text-2xl font-bold">Download Pussy888 for Android (APK)</div>
                <div class="text-sm text-white/70">Install the APK in a few quick steps.</div>
            </div>
            <div class="hidden gap-3 sm:flex">
                <x-partials.button href="#">Download for Android</x-partials.button>
                <x-partials.button type="outline" href="#">Mirror Link</x-partials.button>
            </div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="mb-4 flex gap-3 sm:hidden">
                    <a class="flex-1 rounded-md bg-purple-400 px-4 py-2 text-center text-sm font-semibold text-black hover:bg-purple-300"
                        href="#"
                    >Download for Android</a>
                    <a class="flex-1 rounded-md border border-white/15 px-4 py-2 text-center text-sm hover:bg-white/5"
                        href="#"
                    >Mirror Link</a>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/[0.03]" x-data="{ open: true }">
                    <div class="flex items-center justify-between px-4 py-3">
                        <div class="font-semibold">Steps to Download and Install</div>
                        <button class="inline-flex items-center gap-1 text-sm text-white/70 hover:text-white"
                            @click="open=!open"
                        >
                            <span x-text="open ? 'Hide' : 'Show'"></span>
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
                            <div class="rounded-lg bg-white/[0.02] p-3">1) Visit the official Pussy888 Malaysia website
                                or a trusted partner link.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">2) Tap the “Download for Android” button to
                                begin downloading the APK file.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">3) Go to Settings &gt; Security, and enable
                                “Install from Unknown Sources.”</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">4) Open the downloaded APK file and follow the
                                on-screen instructions to install.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">5) Once installed, open the app and log in or
                                register to start playing.</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 rounded-xl border border-purple-400/30 bg-purple-400/10 p-4 text-sm text-purple-200">
                    <span class="font-semibold">Note:</span> Always download the Pussy888 APK from verified sources to
                    avoid fake or malicious apps.
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Quick Tips (Android)</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>If the APK won’t install, ensure “Unknown Sources” is enabled.</li>
                    <li>Clear browser cache if the file appears corrupted.</li>
                    <li>Keep at least 500MB free space for smooth updates.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- iOS Install -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">Install Pussy888 on iOS Devices</div>
            <div class="text-sm text-white/70">Works on iPhone and iPad with configuration profile.</div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="flex flex-wrap gap-3">
                    <x-partials.button href="#">Download for iOS</x-partials.button>
                    <x-partials.button type="outline" href="#">Alternate iOS Link</x-partials.button>
                </div>

                <div class="mt-6 rounded-xl border border-white/10 bg-white/[0.03]" x-data="{ open: true }">
                    <div class="flex items-center justify-between px-4 py-3">
                        <div class="font-semibold">Steps to Install</div>
                        <button class="inline-flex items-center gap-1 text-sm text-white/70 hover:text-white"
                            @click="open=!open"
                        >
                            <span x-text="open ? 'Hide' : 'Show'"></span>
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
                            <div class="rounded-lg bg-white/[0.02] p-3">1) Open Safari on your iPhone or iPad.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">2) Go to the official Pussy888 download page.
                            </div>
                            <div class="rounded-lg bg-white/[0.02] p-3">3) Tap “Download for iOS” and allow the
                                configuration profile.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">4) Go to Settings &gt; General &gt; Device
                                Management.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">5) Tap the Pussy888 profile and select “Trust”
                                to verify the app.</div>
                            <div class="rounded-lg bg-white/[0.02] p-3">6) Return to your home screen and launch the
                                app.</div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 rounded-xl border border-purple-400/30 bg-purple-400/10 p-4 text-sm text-purple-200">
                    <span class="font-semibold">Security Tip:</span> Keep iOS updated and trust only the official
                    configuration profile to avoid installation errors.
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Quick Tips (iOS)</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>If you don’t see the profile, re-download using Safari (not other browsers).</li>
                    <li>After “Trust,” force-quit and reopen the app if it doesn’t launch.</li>
                    <li>Ensure enough storage for smooth updates.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Mobile Web -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-4">
            <div class="text-2xl font-bold">Play Pussy888 on Mobile Web – No Download Needed</div>
            <div class="text-sm text-white/70">Instant access via your phone browser.</div>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div>
                <div class="flex flex-wrap gap-3">
                    <x-partials.button href="#">Open Mobile Web</x-partials.button>
                    <x-partials.button type="outline" href="#">Create Account</x-partials.button>
                </div>

                <div class="mt-6 rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <div class="font-semibold">How to Play on Mobile Web</div>
                    <div class="mt-3 space-y-3 text-sm">
                        <div class="rounded-lg bg-white/[0.02] p-3">1) Open your preferred browser (Safari, Chrome,
                            etc.).</div>
                        <div class="rounded-lg bg-white/[0.02] p-3">2) Visit the official Pussy888 site.</div>
                        <div class="rounded-lg bg-white/[0.02] p-3">3) Log in to your account or register a new one.
                        </div>
                        <div class="rounded-lg bg-white/[0.02] p-3">4) Play instantly — no installation required.</div>
                    </div>
                </div>

                <div class="mt-4 text-sm text-white/80">
                    The mobile web version is optimized for smooth navigation, fast gameplay, and full access to all
                    games and promotions, making it perfect for quick access or shared devices.
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Why Mobile Web?</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>No storage required.</li>
                    <li>Works on any modern mobile browser.</li>
                    <li>Instant access if app stores are restricted.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Security -->
    <div class="border-t border-white/10"></div>
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="text-2xl font-bold">Safe & Secure Mobile Gaming</div>
        <p class="mt-3 max-w-3xl text-white/80">
            All Pussy888 mobile versions — APK, iOS, and web — use advanced SSL encryption to protect your data and
            transactions.
            We ensure that every game runs smoothly, securely, and fairly across all devices.
        </p>
    </div>

    <!-- Troubleshooting -->
    <div class="mx-auto max-w-7xl px-4 pb-12">
        <div class="grid gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Troubleshooting Tips</div>
                <ul class="mt-3 list-disc space-y-2 pl-5 text-sm text-white/80">
                    <li>If the APK won’t install, ensure “Unknown Sources” is enabled.</li>
                    <li>For iOS installation issues, make sure the profile is trusted.</li>
                    <li>Always have a stable internet connection while downloading or playing.</li>
                </ul>
            </div>
            <div class="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <div class="font-semibold">Need Help?</div>
                <p class="mt-3 text-sm text-white/80">
                    Contact Pussy888 customer support if you need help with downloads, installation, or login.
                </p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <x-partials.button href="#">Live Chat</x-partials.button>
                    <x-partials.button type="outline" href="#">WhatsApp Support</x-partials.button>
                </div>
            </div>
        </div>
    </div>

    <x-partials.download
        title="Start Playing Now!"
        primaryCtaText="Android APK"
        primaryCtaLink="#"
        secondaryCtaText="iOS Install"
        secondaryCtaLink="#"
    >
        Choose the method that works best for you: Download the APK for Android, install the iOS app, or play
        instantly via mobile browser.
        Whichever way you play, Pussy888 guarantees a top-tier online casino experience.
        <br><br>
        <span>Download Pussy888 today and win real rewards on the go!</span>
    </x-partials.download>
</div>
