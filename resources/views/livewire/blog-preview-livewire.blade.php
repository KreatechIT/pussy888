@push('title')
    {{ $blog->heading }}
@endpush

@push('meta_title')
    {{ $blog->meta_title }}
@endpush

@push('meta_description')
    {{ $blog->meta_description }}
@endpush
<div
    class="min-h-screen bg-black text-white"
    x-data="{
        progress: 0,
        tocOpen: true,
        updateProgress() {
            const article = $refs.article;
            if (!article) return;
            const rect = article.getBoundingClientRect();
            const total = article.scrollHeight - window.innerHeight;
            const scrolled = window.scrollY - (article.offsetTop - 80);
            this.progress = Math.max(0, Math.min(100, (scrolled / total) * 100));
        }
    }"
    x-init="updateProgress();
    window.addEventListener('scroll', () => updateProgress());"
>

    <!-- Reading progress -->
    <div class="sticky top-0 z-50">
        <div class="h-1 w-full bg-white/10">
            <div class="h-1 bg-gradient-to-r from-fuchsia-500 to-pink-500 transition-all" :style="`width:${progress}%;`">
            </div>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <div class="mx-auto max-w-7xl px-4 pt-6">
        <div class="text-xs text-white/60">
            <a
                class="hover:text-white/90"
                href="{{ route('home') }}"
                wire:navigate.hover
            >Home</a>
            <span class="mx-2 opacity-50">/</span>
            <a
                class="hover:text-white/90"
                href="{{ route('blog') }}"
                wire:navigate.hover
            >Blog</a>
            <span class="mx-2 opacity-50">/</span>
            <span class="text-white/80">{{ $blog->heading }} </span>
        </div>
    </div>

    <!-- Title + Meta -->
    <div class="mx-auto max-w-7xl px-4 pt-4">
        <div class="max-w-3xl">

            <!-- Title -->
            <div class="text-3xl/tight font-bold sm:text-4xl/tight">
                {{ $blog->title }}
            </div>

            <!-- Meta row -->
            <div class="mt-3 flex flex-wrap items-center gap-3 text-xs text-white/70">
                <div class="inline-flex items-center gap-2">
                    <svg
                        class="border-rounded-full size-6 h-6 w-6 rounded-full border object-cover"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                        />
                    </svg>

                    <span>By <a class="text-white/90 hover:underline" href="#">{{ $blog->author }}</a></span>
                </div>
                <span class="opacity-50">•</span>
                <span>{{ now()->format('M d, Y') }}</span>
                <span class="opacity-50">•</span>
            </div>
        </div>
    </div>

    <!-- Featured image -->
    <div class="mx-auto max-w-7xl px-4 pt-6">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <div class="relative">
                <img
                    class="h-[300px] w-full object-cover sm:h-[420px]"
                    src="{{ $blog->image_url }}"
                    alt="{{ $blog->slug }}"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent"></div>
                <div
                    class="absolute bottom-3 right-3 rounded-full bg-black/60 px-3 py-1 text-xs text-white/80 ring-1 ring-white/10">
                    {{ $blog->category->name ?? 'Uncategorized' }}
                </div>
            </div>
        </div>
    </div>

    <!-- Content + TOC + Share -->
    <div class="mx-auto max-w-7xl px-4 py-8">
        <!-- Article -->
        <div>
            <!-- Intro callout -->
            <div class="mb-6 rounded-xl border border-white/10 bg-white/[0.03] p-4">
                <article
                    class="prose prose-invert prose-a:text-purple-300 prose-a:no-underline prose-a:hover:text-pink-400 prose-a:hover:underline prose-ul:list-disc prose-ul:!pl-6 prose-ol:list-decimal prose-ol:!pl-6 prose-ul:!whitespace-normal prose-li:!whitespace-normal max-w-none space-y-4 text-sm leading-relaxed marker:text-base marker:font-semibold marker:text-purple-400"
                >
                    {!! $blog->content !!}
                </article>
            </div>

            <!-- Share + Tags -->
            {{-- <div class="mt-8 flex flex-wrap items-center justify-between gap-3">
                <div class="flex flex-wrap items-center gap-2 text-xs">
                    <a class="rounded-full bg-white/10 px-2 py-1 text-white/70 ring-1 ring-white/10 hover:bg-white/15"
                        href="#"
                    >
                        #{{ $blog->category->name ?? 'Uncategorized' }}
                    </a>
                </div>
                <div class="flex items-center gap-2 text-xs">
                    <span class="text-white/60">Share:</span>
                    <a class="rounded-md border border-white/10 px-2 py-1 hover:bg-white/5" href="#">Facebook</a>
                    <a class="rounded-md border border-white/10 px-2 py-1 hover:bg-white/5" href="#">X</a>
                    <a class="rounded-md border border-white/10 px-2 py-1 hover:bg-white/5" href="#">Telegram</a>
                    <a class="rounded-md border border-white/10 px-2 py-1 hover:bg-white/5" href="#">Copy
                        Link</a>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- Comments -->
    <div class="mx-auto max-w-7xl px-4 pb-12 scroll-mt-24" id="comments">
        <livewire:blog-comment-livewire :key="'comments' . $blog->id" :$blog />
    </div>

    <!-- Related posts -->
    <div class="mx-auto max-w-7xl px-4 pb-12">
        <div class="mb-4 text-2xl font-bold">Related Articles</div>
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ($relatedBlogs as $relatedPost)
                <div class="overflow-hidden rounded-xl border border-white/10 bg-white/[0.03]">
                    <div class="relative aspect-[16/9]">
                        <img
                            class="h-full w-full object-cover"
                            src="{{ $relatedPost->image_url }}"
                            alt="{{ $relatedPost->slug }}"
                        >
                    </div>
                    <div class="p-4">
                        <div class="mb-2 flex flex-wrap gap-2 text-xs">
                            <a class="rounded-full bg-white/10 px-2 py-1 text-white/70 ring-1 ring-white/10 hover:bg-white/15"
                                href="#"
                            >{{ $relatedPost->category->name ?? 'Uncategorized' }}</a>
                        </div>
                        <div class="font-semibold">{{ Str::limit($blog->title, 50, '....') }}</div>
                        <div class="mt-1 text-sm text-white/70">{{ Str::limit($blog->heading, 50, '....') }}</div>
                        <a
                            class="mt-3 inline-flex items-center gap-1 text-sm text-purple-300 hover:text-pink-400"
                            href="{{ route('blog.show', $relatedPost->slug) }}"
                            wire:navigate.hover
                        >
                            Read more
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
        </div>
    </div>
</div>
