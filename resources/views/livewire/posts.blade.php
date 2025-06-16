<div class="h-full">

    <div>
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
                                <a href="/profile/{{ $post->user->id }}"
                                    class="font-bold flex items-center justify-center gap-1">
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
                            <a href="/post/{{ $post->id }}"
                                class="md:hidden text-wrap">{!! nl2br(e(strlen($post->body) > 110 ? mb_strimwidth($post->body, 0, 110, '...') : $post->body)) !!}</a>
                            <a href="/post/{{ $post->id }}"
                                class="md:block hidden">{!! nl2br(e(strlen($post->body) > 200 ? mb_strimwidth($post->body, 0, 200, '...') : $post->body)) !!}</a>
                        </div>
                    </div>
                    <div class="flex flex-col w-full overflow-hidden">
                        @if ($post->images)
                            <div class="flex items-center justify-center w-full h-48 md:h-90 overflow-hidden">
                                <img src="{{ asset("storage/$post->images") }}" alt="blog-image" class="w-full h-full object-cover">
                            </div>
                        @endif
                        <div class="flex items-center justify-between py-3">
                            <p class="text-sm inter-regular flex items-center justify-center gap-1 font-thin">
                                <i class="bx bx-message-circle font-medium"></i>
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