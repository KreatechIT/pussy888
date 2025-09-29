@push('title')
    Blogs
@endpush
<div class="min-h-screen bg-black text-white">
    <!-- Page Heading -->
    <x-partials.heading title="Blogs" subtitle="Pussy888 • Trusted Online Casino • Malaysia" />

    <!-- Featured Article -->
    <div class="mx-auto max-w-7xl px-4 pt-6">
        @if ($latestBlog && $latestBlog->count() > 0)
            <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
                <div class="relative">
                    <img
                        class="h-[360px] w-full object-cover sm:h-[460px]"
                        src="{{ $latestBlog->image_url }}"
                        alt="Featured"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-5 sm:p-8">
                    <div class="flex flex-wrap items-center gap-2 text-xs">
                        <span
                            class="inline-flex items-center gap-1 rounded-full bg-gradient-to-r from-fuchsia-500 to-pink-500 px-3 py-1 font-semibold text-black"
                        >
                            Featured
                        </span>
                        <span
                            class="rounded-full bg-white/10 px-2 py-1 text-white/80 ring-1 ring-white/10">{{ $latestBlog->category->name ?? 'Uncategorized' }}</span>
                    </div>
                    <div class="mt-3 text-2xl/tight font-bold sm:text-4xl/tight">
                        {{ $latestBlog->title }}
                    </div>
                    <div class="mt-2 max-w-3xl text-white/80">
                        {{ $latestBlog->heading }}
                    </div>
                    <div class="mt-5 flex flex-wrap gap-3">
                        <x-partials.button href="{{ route('blog.show', $latestBlog->slug) }}" wire:navigate.hover>Read
                            Featured Guide</x-partials.button>
                    </div>
                </div>
            </div>
        @else
            <div class="mb-6 rounded-xl border border-white/10 bg-white/[0.03] p-4 text-center text-white">
                No blogs found.
            </div>
        @endif

    </div>

    <!-- Articles -->
    <div class="mx-auto max-w-7xl px-4 py-12">
        <div class="mb-6 flex items-center justify-between">
            <div>
                <div class="text-2xl font-bold">From the Blog & FAQ</div>
                <div class="text-sm text-white/70">Latest tips, how-tos, and platform updates.</div>
            </div>
            <a class="rounded-md border border-white/15 px-4 py-2 text-sm hover:bg-white/5 sm:inline-flex"
                href="#"
            >
                View All
            </a>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
            @if ($blogs->count() > 0)
                @foreach ($blogs as $blog)
                    <div class="overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                        <div class="relative aspect-[16/9]">
                            <img
                                class="h-full w-full object-cover"
                                src="{{ $blog->image_url }}"
                                alt="{{ $blog->slug }}"
                            >
                        </div>
                        <div class="p-4">
                            <!-- Category Tags -->
                            <div class="mb-2 flex flex-wrap gap-2 text-xs">
                                <span class="rounded-full bg-white/10 px-2 py-1 text-white/70 ring-1 ring-white/10">
                                    {{ $blog->category->name ?? 'Uncategorized' }}
                                </span>
                            </div>
                            <div class="font-semibold">{{ Str::limit($blog->title, 50, '....') }}</div>
                            <div class="mt-1 text-sm text-white/70">{{ Str::limit($blog->heading, 50, '....') }}</div>
                            <a
                                class="mt-3 inline-flex items-center gap-1 text-sm text-purple-300 hover:text-pink-400"
                                href="{{ route('blog.show', $blog->slug) }}"
                                wire:navigate.hover
                            >Read more
                                <svg
                                    class="size-4"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m9 5 7 7-7 7"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="mb-6 rounded-xl border border-white/10 bg-white/[0.03] p-4 text-center text-white">
                    No blogs found.
                </div>
            @endif
        </div>

        <!-- Pagination (placeholder) -->
        @include('livewire.pagination', ['blogs' => $blogs])
    </div>
</div>
