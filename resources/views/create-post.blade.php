<x-layout>
    <section class="flex flex-col w-full py-4 playfair-regular text-lg">
        <div class="flex items-center justify-between w-full">
            <a class="" href="/">
                <i data-lucide="x"></i>
            </a>
        </div>
        <div class="mt-5">
            <div class="w-full">
                <label for="title" class="text-3xl ">Title</label>
                {{-- <input type="text" name="title" id="title" placeholder="Enter title.." class="w-full poppins-bold outline-0 py-2"> --}}
                <textarea name="title" id="title" class="w-full outline-0 resize-none poppins-bold py-2" rows="3" placeholder="Enter title ..."></textarea>
            </div>
            <div class="w-full">
                <label for="title" class="text-3xl ">What's on your mind?</label>
                {{-- <input type="text" name="title" id="title" placeholder="Enter title.." class="w-full poppins-bold outline-0 py-2"> --}}
                <textarea name="title" id="title" class="w-full outline-0 resize-none inter-regular py-2" rows="3" placeholder="Write down your thoughts..."></textarea>
            </div>
        </div>
    </section>
</x-layout>