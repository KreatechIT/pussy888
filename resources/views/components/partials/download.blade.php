<div class="mx-auto max-w-7xl px-4 pb-16">
    <div class="rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 p-6 text-black lg:p-10">
        <div class="flex flex-col items-center gap-8 lg:flex-row">
            <!-- Text Content -->
            <div class="w-full lg:w-7/12">
                <!-- Title -->
                <div class="text-2xl font-semibold">
                    {{ $title ?? 'Join the Pussy888 Community' }}
                </div>

                <!-- Content -->
                <div class="mt-2">
                    {{ $slot }}
                </div>

                <!-- CTA Buttons -->
                <div class="mt-5 flex gap-3">
                    @if (isset($primaryCtaText))
                        <a class="rounded-md bg-black px-5 py-3 font-semibold text-white hover:bg-black/80"
                            href="{{ $primaryCtaLink ?? '#' }}"
                        >
                            {{ $primaryCtaText }}
                        </a>
                    @endif

                    @if (isset($secondaryCtaText))
                        <a class="rounded-md bg-white px-5 py-3 font-semibold hover:bg-white/90"
                            href="{{ $secondaryCtaLink ?? '#' }}"
                        >
                            {{ $secondaryCtaText }}
                        </a>
                    @endif
                </div>
            </div>

            <!-- Image (fixed) -->
            <div class="flex w-full justify-center md:justify-end lg:w-5/12">
                <img
                    class="h-full w-full rounded-lg object-cover shadow-lg lg:h-80 lg:w-80"
                    src="{{ asset('assets/frontend/images/qr-code.jpeg') }}"
                    alt="Join Pussy888 Community"
                >
            </div>
        </div>
    </div>
</div>
