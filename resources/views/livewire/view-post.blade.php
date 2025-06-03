<div>
    <div class="flex flex-col gap-2">
       
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
            <div class="flex items-center justify-center w-full h-48 md:h-90 my-3">
                <img src="{{ asset('storage/' . $post->images) }}" alt="blog-image" class="w-full h-full object-cover"> 
            </div>
            <div class="flex">
                
            </div>
             <h1 class="text-2xl poppins-bold">
                {{ $post->title }}
            </h1>
        </div>
        <div class="inter-regular text-sm mt-2">
            {!! nl2br(e($post->body)) !!}
        </div>
        <p class="text-end text-xs text-stone-500 mt-3">-- End --</p>
    </div>
    <div class="flex items-center justify-start border-b  mt-8 mb-4 p-2 ">
        <div class="flex items-center flex-1 gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-icon lucide-message-circle"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
            <span class="text-sm">
                {{ count($post->comments) }}
            </span>
        </div>
    </div>

{{-- Comments --}}
<livewire:comments 
    lazy
    :postId="$post->id"
/>



</div>