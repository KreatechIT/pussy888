@props([
    'title' => null,
    'subtitle' => null,
    // Expecting [ ['q' => 'Question', 'a' => 'Answer'], ... ]
    'items' => [],
    // Default: no item open; pass an integer to open a specific index
    'openIndex' => null,
])

<div class="mx-auto max-w-7xl px-4 py-10" x-data="{ open: {{ is_null($openIndex) ? 'null' : (int) $openIndex }} }">
    @if ($title || $subtitle)
        <div class="mb-5">
            @if ($title)
                <div class="text-2xl font-bold">{{ $title }}</div>
            @endif
            @if ($subtitle)
                <div class="text-sm text-white/70">{{ $subtitle }}</div>
            @endif
        </div>
    @endif

    <div class="divide-y divide-white/10 rounded-xl border border-white/10 bg-white/[0.03]">
        @foreach ($items as $i => $item)
            <div class="p-4" :class="open === {{ $i }} && 'bg-white/[0.02]'">
                <div class="flex items-start justify-between gap-3">
                    <div class="font-medium">{{ $item['q'] ?? '' }}</div>
                    <button
                        class="rounded-md border border-white/15 p-1 hover:bg-white/5"
                        type="button"
                        aria-controls="acc-panel-{{ $i }}"
                        @click="open === {{ $i }} ? open = null : open = {{ $i }}"
                        :aria-expanded="open === {{ $i }} ? 'true' : 'false'"
                    >
                        <svg
                            class="size-4 transition-transform duration-200"
                            aria-hidden="true"
                            :class="open === {{ $i }} && 'rotate-180'"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <path d="M7 10l5 5 5-5z" />
                        </svg>
                    </button>
                </div>

                <div
                    class="mt-2 text-sm text-white/80"
                    id="acc-panel-{{ $i }}"
                    x-show="open === {{ $i }}"
                    x-collapse
                >
                    {{ $item['a'] ?? '' }}
                </div>
            </div>
        @endforeach
    </div>
</div>
