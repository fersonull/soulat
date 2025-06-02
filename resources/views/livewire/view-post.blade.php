<div>
    <div class="flex flex-col gap-2">
        <h1 class="text-2xl poppins-bold">
            {{ $post->title }}
        </h1>
        <div class="flex items-center justify-start gap-2">
            <div class="rounded-full overflow-hidden w-9 h-9">
                <img src="/profile.jpg" alt="">
            </div>
            <div class="flex flex-col inter-regular text-sm items-start">
                <a href="/profile/{{ $post->user->id }}" class="font-bold">
                    {{ $post->user->name }}
                </a>
                <p class="text-sm text-stone-400">
                    {{ $post->created_at->diffInSeconds() < 60 ? 'Just now' : $post->created_at->diffForHumans()}}
                </p>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex items-center justify-center w-full h-48 md:h-90 mt-3">
                <img src="{{ asset('storage/' . $post->images) }}" alt="blog-image" class="w-full h-full object-cover"> 
            </div>
            <div class="flex">

            </div>
        </div>
        <div class="inter-regular text-sm mt-3">
            {!! nl2br(e($post->body)) !!}
        </div>
        <p class="text-end text-xs text-stone-500 mt-3">-- End --</p>
    </div>
    <div class="flex items-center justify-start border-b rounded mt-8 mb-4 p-2 ">
        <div class="flex items-center flex-1 gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-icon lucide-message-circle"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
            <span class="text-xs">
                {{ count($post->comments) }}
            </span>
        </div>
    </div>

{{-- Comments --}}
<div class="flex flex-col items-start inter-regular text-sm mb-8">
    @foreach ($post->comments as $comment)
        <div class="flex items-end justify-center gap-1 mb-3">
            <div class="w-6">
                <div class="rounded-full overflow-hidden w-6 h-6">
                    <img src="/profile.jpg" alt="">
                </div>
            </div>
            <div class="rounded-lg flex-1 flex flex-col rounded-bl-none px-3 py-1 bg-stone-200">
                <div class="text-xs font-bold flex gap-1 items-center {{ auth()->user()->id === $comment->user->id ?  'text-blue-600' : 'text-black'}}">
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
</div>



</div>