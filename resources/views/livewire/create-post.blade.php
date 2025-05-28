<div x-cloak>
    <form wire:submit.prevent="post" method="POST" enctype="multipart/form-data" class="z-40 playfair-regular" id="blogForm">
        @csrf
        <div class="flex items-center justify-end w-full sticky top-0 py-4 bg-[#F9F7F4]">
            <div class="flex items-center justfiy-end gap-3">
                <div>
                    <label wire:ignore for="images">
                        <i data-lucide="image-plus"></i>
                    </label>
                    <input wire:model="image" type="file" name="images" accept="image/*" id="images" hidden>
                </div>
                <button class="font-sans text-xs rounded-full bg-black text-stone-100 px-3 py-2 cursor-pointer">
                    Publish now
                </button>
            </div>
        </div>
        <div class="mt-5">
            <div wire:ignore class="hidden items-center justify-center w-full h-48 md:h-90 mb-7" id="imageContainer">
                <img src="" alt="blog-image" class="w-full h-full object-cover" id="preview">
            </div>
            <div class="w-full">
                <label for="title" class="text-3xl ">Title</label>
                <textarea wire:model="title" name="title" id="title" class="w-full outline-0 resize-none poppins-bold py-2" rows="3"
                placeholder="Title your idea.."></textarea>
            </div>
            <div class="w-full" id="editor">
                <label for="content" class="text-3xl ">What's on your mind?</label>
                <textarea wire:model="content" name="content" id="content"
                class="w-full outline-0 resize-none inter-regular py-2 text-sm" rows="10"
                placeholder="Write down your thoughts..."></textarea>
            </div>
        </div>
    </form>
</div>
