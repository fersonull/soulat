<div class="h-full">
    <div wire:loading class="w-full"> 
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

    <div wire:loading.remove>
        @if (count($posts) < 1)
            <div class="flex items-center justify-center mt-10">
                No Post.
            </div>
        @else
            @foreach($posts as $post)
                <div class="flex flex-col items-center justify-center mb-8 p-2 rounded-xl">
                    <div class="flex flex-col items-start w-full">
                        <a href="/post/{{ $post->id }}" class="poppins-bold font-bold text-2xl mb-1">
                            {{ $post->title }}
                        </a>

                        {{-- @foreach ( $post->comments as $comment)
                            {{ count($comment->body) }}
                        @endforeach --}}

                        <div class="flex items-center justify-center gap-2 mb-4">
                            <div class="rounded-full overflow-hidden w-9 h-9">
                                <img src="/profile.jpg" alt="">
                            </div>
                            <div class="flex flex-col inter-regular text-sm items-start">
                                <a href="/profile/{{ $post->user->id }}" class="font-bold flex items-center justify-center gap-1">
                                    {{ $post->user->name }}

                                    @if (config('cons.whoswhoj') == $post->user->id)
                                        <span class="h-4 w-4">
                                            <i data-lucide="sparkles" class="w-4 h-4 text-red-900"></i>
                                        </span>
                                    @endif
                                </a>
                                <p class="text-sm text-stone-400">
                                    {{ $post->created_at->diffInSeconds() < 60 ? 'Just now' : $post->created_at->diffForHumans()}}
                                </p>
                            </div>
                        </div>

                        <div class="w-full overflow-hidden mb-3 inter-regular text-sm {{ !$post->images ? '' : '' }}">
                            <a href="/post/{{ $post->id }}" class="md:hidden text-wrap">{{ strlen($post->body) > 110 ?  mb_strimwidth($post->body, 0, 110, '...') : $post->body}}</a>
                            <a href="/post/{{ $post->id }}" class="md:block hidden">{{ strlen($post->body) > 200 ?  mb_strimwidth($post->body, 0, 200, '...') : $post->body }}</a>
                        </div>
                    </div>
                    <div class="flex flex-col w-full overflow-hidden">
                        @if ($post->images)
                            <div class="flex items-center justify-center w-full h-48 md:h-90 rounded-lg overflow-hidden">
                                <img src="{{ asset("storage/$post->images") }}" alt="blog-image" class="w-full h-full object-cover"> 
                            </div>
                        @endif
                        <div class="flex items-center justify-between py-3">
                            <p class="text-sm inter-regular flex items-center justify-center gap-1 font-thin">
                                <span wire:ignore>
                                    <i wire:ignore data-lucide="message-circle" class="w-4 h-4"></i>
                                </span>
                                <span>
                                    {{ count($post->comments) }}
                                </span>
                            </p>
                            {{-- <button class="px-2 py-1 border border-amber-800 text-amber-800">
                                Continue reading
                            </button> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        
    </div>
    {{-- <div class="mt-4">
        {{ $posts->links() }}
    </div> --}}
</div>