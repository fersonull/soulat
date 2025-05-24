<x-layout>
    @auth
        <x-add-button>
            <x-create-post />
        </x-add-button>
    @endauth
    
    {{-- @dd($posts) --}}

    <section class="md:grid md:grid-cols-3 gap-10">
        <div class="col-span-2">
            @foreach ($posts as $post)
                <x-post-card 
                    href="" image="{{ asset('storage/' . $post->images) }}"
                    title="{!! $post->title !!}"
                    author="{{ $post->user->name }}"
                    userId="{{ $post->user_id }}"
                    date="{{ $post->created_at->diffForHumans() }}"
                    body='{{ $post->body }}'
                />
            @endforeach

        </div>
        <div class="col-span-1 hidden">

        </div>
    </section>
</x-layout>