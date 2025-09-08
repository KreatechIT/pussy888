<!-- Footer -->
<div class="border-t border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-10 grid md:grid-cols-4 gap-6">
        <div class="space-y-3">
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/frontend/images/logo.png') }}" class="h-20 w-auto" alt="">
                <div class="font-semibold">{{ config('app.name') }}</div>
            </div>
            <div class="text-sm text-white/70">Malaysia’s trusted gaming hub for slots, live casino & sports. Play
                responsibly.</div>
        </div>
        <div>
            <div class="font-semibold mb-3">Explore</div>
            <div class="space-y-2 text-sm">
                <a href="#" class="block hover:text-purple-300">About Us</a>
                <a href="#" class="block hover:text-purple-300">Promotions</a>
                <a href="#" class="block hover:text-purple-300">Blog</a>
            </div>
        </div>
        <div>
            <div class="font-semibold mb-3">Games</div>
            <div class="space-y-2 text-sm">
                <a href="#" class="block hover:text-purple-300">Slots</a>
                <a href="#" class="block hover:text-purple-300">Live Casino</a>
                <a href="#" class="block hover:text-purple-300">FAQ</a>
            </div>
        </div>
        <div>
            <div class="font-semibold mb-3">Legal</div>
            <div class="space-y-2 text-sm">
                <a href="#" class="block hover:text-purple-300">Terms & Conditions</a>
                <a href="#" class="block hover:text-purple-300">Privacy Policy</a>
                <a href="#" class="block hover:text-purple-300">Responsible Gaming</a>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div class="mx-auto max-w-7xl px-4 py-4 text-xs text-white/60 flex items-center justify-between">
            <div>© {{ now()->format('Y') }} Kiss918. All rights reserved.</div>
        </div>
    </div>
</div>
