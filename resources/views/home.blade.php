<x-layout>
    @auth
        <x-add-button />
    @endauth

    <section class="md:grid md:grid-cols-3 gap-10">
        <div class="col-span-2">
            @foreach ($posts as $post)
                <x-post-card
                    href=""
                    image="{{ asset('storage/' . $post->images) }}"
                    title="{!! $post->title !!}"
                    author="{{ $post->user->name }}"
                    body='{{ $post->body }}'
                />
            @endforeach ()
            
        </div>
        <div class="col-span-1 hidden">
            <x-post-card
                href=""
                title="Learning to Breathe in a World That Moves Too Fast: Finding Meaning in the Messy Middle of Life"
                author="Jasfer Monton"
                body='Life doesn’t come with a manual.
                It comes with moments. Some loud, some quiet. Some full of joy, others heavy with pain. And somewhere in between, there’s a whole lot of confusion.'
            />
        </div>
    </section>
</x-layout>