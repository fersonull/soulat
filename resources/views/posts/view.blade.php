<x-layout>

    <section>
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl poppins-bold">
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
            <div class="flex items-center justify-center w-full h-48 md:h-90 mt-3">
                <img src="{{ asset('storage/' . $post->images) }}" alt="blog-image" class="w-full h-full object-cover"> 
            </div>
            <div class="inter-regular text-sm mt-3">
                {!! nl2br(e($post->body)) !!}
            </div>
        </div>
    </section>

</x-layout>