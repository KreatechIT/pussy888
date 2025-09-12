<div class="mt-10 flex items-center justify-center gap-2">
    <!-- Previous Page Link -->
    @if ($blogs->onFirstPage())
        <span class="cursor-not-allowed rounded-md border border-white/10 px-3 py-2">Previous</span>
    @else
        <a class="rounded-md border border-white/10 px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300"
            href="{{ $blogs->previousPageUrl() }}"
        >Previous</a>
    @endif

    <!-- Page Numbers -->
    <div class="inline-flex items-center gap-1">
        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
            <a class="{{ $page == $blogs->currentPage() ? 'bg-pink-400/10 text-purple-300' : '' }} rounded-md px-3 py-2 ring-1 ring-white/10 hover:bg-pink-400/10 hover:text-purple-300"
                href="{{ $url }}"
            >
                {{ $page }}
            </a>
        @endforeach
    </div>

    <!-- Next Page Link -->
    @if ($blogs->hasMorePages())
        <a class="rounded-md border border-white/10 px-3 py-2 hover:bg-pink-400/10 hover:text-purple-300"
            href="{{ $blogs->nextPageUrl() }}"
        >Next</a>
    @else
        <span class="cursor-not-allowed rounded-md border border-white/10 px-3 py-2">Next</span>
    @endif
</div>
