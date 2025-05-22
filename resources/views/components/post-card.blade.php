<div class="flex flex-col items-center justify-center mb-8">
    <div class="flex flex-col items-start w-full">
        <a href="{{ $attributes->get('href') }}" class="text-2xl poppins-bold mb-1">
            {{ $title }}
        </a>

        <div class="flex items-center justify-center gap-2 mb-4">
            <div class="rounded-full overflow-hidden w-10 h-10">
                <img src="https://placehold.co/100" alt="">
            </div>
            <div class="flex flex-col items-start">
                <h1 class="font-sans font-bold">
                    {{ $author }}
                </h1>
                <p class="text-sm text-stone-400">
                    Apr 24, 2025
                </p>
            </div>
        </div>

        <div class="w-full overflow-hidden mb-5">
            <p>{{ $body }}</p>
        </div>
    </div>
    <div class="flex flex-col w-full overflow-hidden">
        <div class="flex items-center justify-center w-full h-48">
            <img src="https://placehold.co/100" alt="blog-image" class="w-full h-full object-cover"> 
        </div>
        <div class="flex items-center justify-between py-3">
            <p class="">20 Comments</p>
            {{-- <button class="px-2 py-1 border border-amber-800 text-amber-800">
                Continue reading
            </button> --}}
        </div>
    </div>
</div>