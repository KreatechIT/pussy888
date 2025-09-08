@props([
    'type' => 'gradient', // default: gradient
    'size' => 'md', // sm, md, lg (optional)
])

@php
    // Size classes
    $sizes = [
        'sm' => 'px-2 py-1 text-xs',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];

    // Style classes
    $base = 'rounded-md transition font-semibold';
    $gradient = 'bg-gradient-to-r from-purple-500 to-pink-500 text-white hover:from-purple-600 hover:to-pink-400';
    $outline = 'border border-purple-400/60 text-purple-400 hover:bg-pink-400/10';

    $classes = $base . ' ' . ($sizes[$size] ?? $sizes['md']) . ' ' . ($type === 'outline' ? $outline : $gradient);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
