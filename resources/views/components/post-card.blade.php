<div class="flex flex-col items-center justify-center mb-8 border-b">
    <div class="flex flex-col items-start w-full">
        <a href="{{ $attributes->get('href') }}" class="poppins-bold font-bold text-2xl mb-1">
            {{ $title }}
        </a>

        <div class="flex items-center justify-center gap-2 mb-4">
            <div class="rounded-full overflow-hidden w-10 h-10">
                <img src="https://placehold.co/100" alt="">
            </div>
            <div class="flex flex-col inter-regular text-sm items-start">
                <a href="" class="font-bold">
                    {{ $author }}
                </a>
                <p class="text-sm text-stone-400">
                    Apr 24, 2025
                </p>
            </div>
        </div>

        <div class="w-full overflow-hidden mb-5 inter-regular text-sm">
            <p class="md:hidden">{{ strlen($body) > 110 ?  mb_strimwidth($body, 0, 110, '...') : $body}}</p>
            <p class="md:block hidden">{{ strlen($body) > 200 ?  mb_strimwidth($body, 0, 200, '...') : $body}}</p>
        </div>
    </div>
    <div class="flex flex-col w-full overflow-hidden">
        <div class="flex items-center justify-center w-full h-48 md:h-90">
            <img src="{{ $image }}" alt="blog-image" class="w-full h-full object-cover"> 
        </div>
        <div class="flex items-center justify-between py-3">
            <p class="">
                <span class="font-semibold">20</span>
                comments
            </p>
            {{-- <button class="px-2 py-1 border border-amber-800 text-amber-800">
                Continue reading
            </button> --}}
        </div>
    </div>
</div>