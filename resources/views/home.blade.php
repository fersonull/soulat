<x-layout>
    @auth
        <x-add-button>
            {{-- <x-create-post /> --}}
            <livewire:create-post />
        </x-add-button>
    @endauth

    {{-- @dd($posts) --}}

    <section class="md:grid md:grid-cols-3 gap-10">
        <div class="col-span-2">
            <livewire:posts lazy/>
        </div>
        <div class="col-span-1 hidden">
            {{-- side --}}
        </div>
    </section>
</x-layout>