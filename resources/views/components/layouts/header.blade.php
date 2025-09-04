     @php
         $segments = request()->segments();
         $segments[0] = 'en';
         $urlEn = '/' . implode('/', $segments);
         $segments[0] = 'bm';
         $urlBm = '/' . implode('/', $segments);
         $segments[0] = 'zh';
         $urlZh = '/' . implode('/', $segments);
     @endphp


     <!-- Top Bar -->
     <div class="bg-zinc-900 text-md">
         <div class="mx-auto max-w-7xl px-4 flex items-center justify-between py-2">
             <div class="opacity-80">Trusted Gaming • Fast Payouts • 24/7 Support</div>
             <div class="flex items-center gap-3">
                 <a href="{{ $urlEn }}" class="hover:underline opacity-80">EN</a>
                 <span class="opacity-50">|</span>
                 <a href="{{ $urlBm }}" class="hover:underline opacity-80">BM</a>
                 <span class="opacity-50">|</span>
                 <a href="{{ $urlZh }}" class="hover:underline opacity-80">中文</a>
             </div>
         </div>
     </div>

     <!-- Navbar -->
     <div
         class="sticky top-0 z-50 backdrop-blur supports-[backdrop-filter]:bg-black/60 bg-black/80 border-b border-white/10">
         <div class="mx-auto max-w-7xl px-4">
             <div class="flex h-20 items-center justify-between">
                 <!-- Logo -->
                 <div class="flex items-center gap-3">
                     <a href="{{ route('home') }}">
                         <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Kiss918" class="h-20 w-auto">
                     </a>
                 </div>

                 <!-- Desktop Nav -->
                 <div class="hidden md:flex items-center gap-6">
                     <a href="{{ route('home') }}" class="hover:text-purple-300 transition">Home</a>

                     <!-- Games Dropdown (desktop) -->
                     <div x-data="{ open: false }" class="relative">
                         <button @mouseenter="open=true" @mouseleave="open=false"
                             class="flex items-center gap-1 hover:text-purple-300 transition">
                             Games
                             <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="m19 9-7 7-7-7" />
                             </svg>
                         </button>
                         <div @mouseenter="open=true" @mouseleave="open=false" x-show="open" x-transition
                             class="absolute left-0 mt-2 w-56 rounded-lg border border-white/10 bg-zinc-900/95 shadow-lg p-2">
                             <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Slots</a>
                             <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Live Casino</a>
                             <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Sports</a>
                             <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Fishing</a>
                         </div>
                     </div>

                     <a href="#" class="hover:text-purple-300 transition">Promotions</a>
                     <a href="#" class="hover:text-purple-300 transition">Blog</a>
                     <a href="#" class="hover:text-purple-300 transition">FAQ</a>
                 </div>

                 <!-- CTA -->
                 <div class="hidden md:flex items-center gap-3">
                    <x-partials.button type="outline" href="#">Login</x-partials.button>
                    <x-partials.button href="#">Register</x-partials.button>
                 </div>

                 <!-- Mobile Menu Button -->
                 <button @click="mobileOpen = !mobileOpen"
                     class="md:hidden inline-flex items-center justify-center rounded-md border border-white/10 p-2">
                     <svg x-show="!mobileOpen" class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M4 6h16M4 12h16M4 18h16" />
                     </svg>
                     <svg x-show="mobileOpen" class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M6 18 18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>
         </div>

         <!-- Mobile Nav -->
         <div x-show="mobileOpen" x-transition class="md:hidden border-t border-white/10 bg-zinc-950">
             <div class="px-4 py-3 space-y-2">
                 <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Home</a>
                 <div x-data="{ open: false }" class="rounded-md">
                     <button @click="open=!open"
                         class="flex w-full items-center justify-between rounded-md px-3 py-2 hover:bg-white/5">
                         <span>Games</span>
                         <svg class="size-4" :class="open && 'rotate-180'" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                         </svg>
                     </button>
                     <div x-show="open" x-transition class="mt-1 space-y-1 pl-3">
                         <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Slots</a>
                         <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Live Casino</a>
                         <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Sports</a>
                         <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Fishing</a>
                     </div>
                 </div>
                 <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Promotions</a>
                 <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">Blog</a>
                 <a href="#" class="block rounded-md px-3 py-2 hover:bg-white/5">FAQ</a>

                 <div class="pt-2 flex items-center gap-2">
                     <a href="#"
                         class="flex-1 rounded-md border border-purple-400/60 px-4 py-2 text-center text-sm hover:bg-purple-400/10">Login</a>
                     <a href="#"
                         class="flex-1 rounded-md bg-purple-400 px-4 py-2 text-center text-sm font-semibold text-black hover:bg-purple-300">Register</a>
                 </div>
             </div>
         </div>
     </div>
