<x-layout>
    <section class="flex flex-col w-full pb-4 playfair-regular text-lg">
        <div class="flex items-center justify-between w-full sticky top-0 py-4 bg-[#F9F7F4]">
            <a class="" href="/">
                <i data-lucide="x"></i>
            </a>
            <div class="flex items-center justfiy-center gap-2">
                <div>
                    <label for="image">
                        <i data-lucide="image-plus"></i>
                    </label>
                    <input type="file" name="image" accept="image/*" hidden id="image">
                </div>
                <button class="font-sans text-xs rounded-full bg-black text-stone-100 px-3 py-2">
                    Publish now
                </button>
            </div>
        </div>
        <div class="mt-5">
            <div class="hidden items-center justify-center w-full h-40 md:h-90 mb-7" id="imageContainer">
                <img src="https://images.unsplash.com/photo-1746137334131-7f5d9ff816c3?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="blog-image" class="w-full h-full object-cover" id="preview">
            </div>
            <div class="w-full">
                <label for="title" class="text-3xl ">Title</label>
                {{-- <input type="text" name="title" id="title" placeholder="Enter title.." class="w-full poppins-bold outline-0 py-2"> --}}
                <textarea name="title" id="title" class="w-full outline-0 resize-none poppins-bold py-2" rows="3" placeholder="Title your idea.."></textarea>
            </div>
            <div class="w-full">
                <label for="body" class="text-3xl ">What's on your mind?</label>
                <textarea name="body" id="body" class="w-full outline-0 resize-none inter-regular py-2" rows="10" placeholder="Write down your thoughts..."></textarea>
            </div>
        </div>
    </section>
</x-layout>