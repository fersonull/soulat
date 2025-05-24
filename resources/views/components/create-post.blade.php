<form method="POST" enctype="multipart/form-data" class="z-40 playfair-regular" id="blogForm">
    @csrf
    <div class="flex items-center justify-end w-full sticky top-0 py-4 bg-[#F9F7F4]">
        <div class="flex items-center justfiy-end gap-3">
            <div>
                <label for="image">
                    <i data-lucide="image-plus"></i>
                </label>
                <input type="file" name="images" accept="image/*" id="image" hidden>
            </div>
            <button type="submit" class="font-sans text-xs rounded-full bg-black text-stone-100 px-3 py-2 cursor-pointer">
                Publish now
            </button>

        </div>
    </div>
    <div class="mt-5">
        <div class="hidden items-center justify-center w-full h-40 md:h-90 mb-7" id="imageContainer">
            <img src="" alt="blog-image" class="w-full h-full object-cover" id="preview">
        </div>
        <div class="w-full">
            <label for="title" class="text-3xl ">Title</label>
            {{-- <input type="text" name="title" id="title" placeholder="Enter title.."
                class="w-full poppins-bold outline-0 py-2"> --}}
            <textarea name="title" id="title" class="w-full outline-0 resize-none poppins-bold py-2" rows="3"
            placeholder="Title your idea.."></textarea>
        </div>
        <div class="w-full" id="editor">
            <label for="content" class="text-3xl ">What's on your mind?</label>
            <textarea name="content" id="content"
            class="w-full outline-0 resize-none inter-regular py-2 text-sm" rows="10"
            placeholder="Write down your thoughts..."></textarea>
        </div>
    </div>
</form>