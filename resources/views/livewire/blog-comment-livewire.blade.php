<div
    class="rounded-2xl border border-white/10 bg-white/[0.03] p-4 sm:p-6"
    x-data
    @scroll-to-comments.window="$el.scrollIntoView({ behavior: 'smooth', block: 'start' })"
>
    <!-- Heading -->
    <div class="mb-4 flex items-center justify-between">
        <h2 class="text-2xl font-bold text-white">Comments</h2>
        <span class="text-xs text-white/60">
            {{ number_format($this->comments->total()) }} total
        </span>
    </div>

    <!-- Flash -->
    @if (session()->has('success'))
        <div
            class="mb-4 rounded-lg border border-emerald-400/30 bg-emerald-500/10 px-3 py-2 text-sm text-emerald-300"
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 2500)"
            x-transition
        >
            {{ session('success') }}
        </div>
    @endif

    <!-- List -->
    <div class="space-y-4">
        @forelse ($this->comments as $comment)
            <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                <div class="mb-2 flex items-center gap-2 text-xs text-white/60">
                    <div class="inline-flex size-6 items-center justify-center rounded-full bg-white/10">
                        <svg
                            class="size-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.12a7.5 7.5 0 0 1 15 0A17.93 17.93 0 0 1 12 21.75c-2.68 0-5.22-.58-7.5-1.63"
                            />
                        </svg>
                    </div>
                    <span class="font-medium text-white/80">{{ $comment->name }}</span>
                    <span class="opacity-50">•</span>
                    <span>{{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <div class="prose prose-invert max-w-none text-sm leading-relaxed text-white/90">
                    {{ $comment->body }}
                </div>
            </div>
        @empty
            <div class="rounded-lg border border-white/10 bg-white/[0.02] px-3 py-2 text-sm text-white/70">
                No comments yet. Be the first to comment!
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if ($this->comments->hasPages())
        <div class="mt-4">
            {{-- Keep user inside the section when changing pages --}}
            {{ $this->comments->onEachSide(1)->fragment('comments')->links() }}
        </div>
    @endif

    <!-- Divider -->
    <div class="my-6 h-px w-full bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

    <!-- Form -->
    <form class="space-y-4" wire:submit.prevent="submitComment">
        <div class="grid gap-3 sm:grid-cols-2">
            <div class="space-y-1.5">
                <label class="text-xs text-white/70">Name <span class="text-pink-400">*</span></label>
                <input
                    class="w-full rounded-lg border border-white/10 bg-black/40 px-3 py-2 text-sm text-white placeholder-white/40 outline-none focus:border-fuchsia-400/50 focus:ring-0"
                    type="text"
                    wire:model.defer="name"
                    placeholder="Your name"
                />
                @error('name')
                    <div class="text-xs text-pink-400">{{ $message }}</div>
                @enderror
            </div>
            <div class="space-y-1.5">
                <label class="text-xs text-white/70">Email <span class="text-pink-400">*</span></label>
                <input
                    class="w-full rounded-lg border border-white/10 bg-black/40 px-3 py-2 text-sm text-white placeholder-white/40 outline-none focus:border-fuchsia-400/50 focus:ring-0"
                    type="email"
                    wire:model.defer="email"
                    placeholder="you@email.com"
                />
                @error('email')
                    <div class="text-xs text-pink-400">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="space-y-1.5">
            <label class="text-xs text-white/70">Comment <span class="text-pink-400">*</span></label>
            <textarea
                class="w-full rounded-lg border border-white/10 bg-black/40 px-3 py-2 text-sm text-white placeholder-white/40 outline-none focus:border-fuchsia-400/50 focus:ring-0"
                wire:model.defer="body"
                rows="4"
                placeholder="Write your thoughts…"
            ></textarea>
            @error('body')
                <div class="text-xs text-pink-400">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex items-center gap-3">
            <button
                class="inline-flex items-center gap-2 rounded-lg border border-fuchsia-400/30 bg-gradient-to-r from-fuchsia-600/80 to-pink-600/80 px-4 py-2 text-sm font-semibold text-white transition hover:from-fuchsia-500 hover:to-pink-500 disabled:opacity-50"
                type="submit"
                wire:loading.attr="disabled"
                wire:target="submitComment"
            >
                <svg
                    class="size-4 animate-spin"
                    wire:loading
                    wire:target="submitComment"
                    viewBox="0 0 24 24"
                    fill="none"
                >
                    <circle
                        class="opacity-25"
                        cx="12"
                        cy="12"
                        r="10"
                        stroke="currentColor"
                        stroke-width="4"
                    />
                    <path
                        class="opacity-75"
                        fill="currentColor"
                        d="M4 12a8 8 0 018-8v4A4 4 0 004 12z"
                    />
                </svg>
                <span>Post Comment</span>
            </button>

            <span
                class="text-xs text-white/60"
                wire:loading.delay.shorter
                wire:target="submitComment"
            >Submitting…</span>
        </div>
    </form>
</div>
