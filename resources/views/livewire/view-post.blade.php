<x-layout>

    <div wire:loading>
        <div role="status" class="space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center mb-8 opacity-25">
            <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded-sm sm:w-96 dark:bg-gray-700">
                <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                </svg>
            </div>
            <div class="w-full">
                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[480px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[440px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div>
                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]"></div>
            </div>
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <section wire:loading.remove>
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
                <i data-lucide="message-circle" class="h-4 w-4"></i>
                <span class="text-xs">
                    {{ count($post->comments) }}
                </span>
            </div>
        </div>

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
                            @if ($comment->user_id === $post->user->id)
                                <span class="font-normal text-xs text-black">
                                    <i data-lucide="feather" class="w-3 h-3"></i>
                                </span>
                            @endif
                            {{ $comment->user->name }}
                        </div>
                        {{ $comment->body }}
                    </div>
                </div>
            @endforeach
        </div>


    </section>

</x-layout>