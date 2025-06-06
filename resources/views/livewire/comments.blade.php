<div class="flex flex-col items-start inter-regular text-sm mb-8" wire:transition>
    @if (count($post->comments) > 0)
        @foreach ($post->comments as $comment)
            <div class="flex items-end justify-center gap-1 mb-3">
                <div class="w-6">
                    <div class="rounded-full overflow-hidden w-6 h-6">
                        <img src="/profile.jpg" alt="">
                    </div>
                </div>
                <div class="rounded-lg flex-1 flex flex-col rounded-bl-none px-3 py-1 bg-stone-200">
                    <div
                        class="text-xs font-bold flex gap-1 items-center {{ auth()->user()->id === $comment->user->id ? 'text-blue-600' : 'text-black'}}">
                        {{ $comment->user->name }}
                        @if ($comment->user_id === $post->user->id)
                            <span class="font-normal text-xs text-black">
                                <i data-lucide="user-pen" class="w-4 h-4"></i>
                            </span>
                        @endif
                    </div>
                    {{ $comment->body }}
                </div>
            </div>
        @endforeach
    @else
        No comments.
    @endif
</div>