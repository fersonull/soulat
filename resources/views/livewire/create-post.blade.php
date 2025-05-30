<div
x-cloak
>
    <form wire:submit.prevent="post" method="POST" enctype="multipart/form-data" class="z-40 playfair-regular" id="blogForm">
        @csrf

        @error('image')
            {{ $message }}
        @enderror
        <div class="flex items-center justify-end w-full sticky top-0 py-4 bg-[#F9F7F4]">
            <div class="flex items-center justfiy-end gap-3">
                <div>
                    <label wire:ignore for="images">
                        <i data-lucide="image-plus"></i>
                    </label>
                    <input wire:model="image" type="file" name="images" accept="image/.jpg,.jpeg,.png,.webp,.bmp,.tiff" id="images" hidden>
                </div>
                <button class="font-sans text-xs rounded-full bg-black text-stone-100 px-3 py-2 cursor-pointer">
                    Publish now
                </button>
            </div>
        </div>
        <div class="mt-5">
            @if ($image)
                <div wire:loading class="animate-pulse flex items-center justify-center w-full h-48 md:h-90 mb-7 p-2 border-dashed border-7 rounded-md border-stone-300 inter-regular relative" id="imagePartial">
                    <div class="bg-stone-300 rounded-md w-full h-full flex items-center justify-center">
                        <p class="poppins-bold text-5xl text-gray-600">
                            ...
                        </p>
                        {{-- <span class="poppins-bold text-gray-600 ">
                            <i data-lucide="image" class="w-11 h-11"></i>
                        </span> --}}
                    </div>
                </div>
                <div wire:loading.remove class="items-center justify-center w-full h-48 md:h-90 mb-7 rounded overflow-hidden z-20" id="imageContainer">
                    <img src="{{ $image->temporaryUrl() }}" alt="blog-image" class="w-full h-full object-cover z-20" id="preview">
                </div>
            @else
                <label for="images" class=" @error('image') animate-shake @enderror flex items-center justify-center w-full h-48 md:h-90 mb-7 p-2 border-dashed border-7 rounded-md border-stone-300 relative">
                    <div class="bg-stone-300 rounded-md w-full h-full flex items-center justify-center">
                        <span wire:ignore class="poppins-bold text-gray-600 ">
                            <i wire:ignore data-lucide="image" class="w-11 h-11"></i>
                        </span>
                    </div>
                </label>
            @endif
            <div class="w-full">
                <label for="title" class="text-md inter-regular flex gap-1">
                    Title
                    @error('title')
                        <span class="text-red-600 text-xs transition-all 75 animate-shake">
                            {{ $message }}
                        </span>
                    @enderror
                </label>
                <textarea wire:model="title" name="title" id="title" class="w-full outline-0 resize-none poppins-bold py-2" rows="3"
                placeholder="Title your idea.."></textarea>
            </div>
            <div class="w-full" id="editor">
                <label for="content" class="text-md inter-regular flex gap-1">
                    What's on your mind?
                    @error('content')
                        <span class="text-red-600 text-xs transition-all animate-shake">
                            {{ $message }}
                        </span>
                    @enderror
                </label>
                <textarea wire:model="content" name="content" id="content"
                class="w-full outline-0 resize-none inter-regular py-2 text-sm" rows="10"
                placeholder="Write down your thoughts..."></textarea>
            </div>
        </div>
    </form>
</div>
