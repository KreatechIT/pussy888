<!-- Footer -->
<div class="border-t border-white/10">
    <div class="mx-auto grid max-w-7xl gap-6 px-4 py-10 md:grid-cols-4">
        <div class="space-y-3">
            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}"><img
                        class="h-20 w-auto"
                        src="{{ asset('assets/frontend/images/logo.png') }}"
                        alt=""
                    ></a>
                <div class="font-semibold">{{ config('app.name') }}</div>
            </div>
            <div class="text-sm text-white/70">Malaysia’s trusted gaming hub for slots, live casino & sports. Play
                responsibly.</div>
        </div>
        <div>
            <div class="mb-3 font-semibold">Explore</div>
            <div class="space-y-2 text-sm">
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('about-us') }}"
                   
                >About Us</a>
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('promotions') }}"
                   
                >Promotions</a>
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('blog') }}"
                   
                >Blog</a>
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('faq') }}"
                   
                >FAQ</a>
            </div>
        </div>
        <div>
            <div class="mb-3 font-semibold">Games</div>
            <div class="space-y-2 text-sm">
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('slot') }}"
                   
                >Slots</a>
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('live-casino') }}"
                   
                >Live Casino</a>
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('live-casino') }}"
                   
                >Table Games</a>
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('live-casino') }}"
                   
                >Jackpots</a>
            </div>
        </div>
        <div>
            <div class="mb-3 font-semibold">Legal</div>
            <div class="space-y-2 text-sm">
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('terms-and-conditions') }}"
                   
                >Terms & Conditions</a>
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('privacy-policy') }}"
                   
                >Privacy Policy</a>
                <a
                    class="block hover:text-purple-300"
                    href="{{ route('responsible-gaming') }}"
                   
                >Responsible Gaming</a>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 text-xs text-white/60">
            <div>© {{ now()->format('Y') }} Kiss918. All rights reserved.</div>
        </div>
    </div>
</div>
