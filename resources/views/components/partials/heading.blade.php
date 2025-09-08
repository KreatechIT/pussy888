@props(['title', 'subtitle' => null])

<div class="relative">
    <div class="h-44 w-full bg-gradient-to-r from-pink-900 via-black to-purple-900"></div>
    <div class="absolute inset-0 flex items-center">
        <div class="mx-auto w-full max-w-7xl px-4">
            <div class="text-3xl font-bold">{{ $title }}</div>
            @if ($subtitle)
                <div class="mt-1 text-sm text-white/70">{{ $subtitle }}</div>
            @endif
        </div>
    </div>
</div>
