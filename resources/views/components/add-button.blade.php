<div 
    x-data="{ openEditor: false }"
    x-effect="document.body.style.overflow = openEditor ? 'hidden' : 'auto'"
    x-on:postCreated.window="openEditor = false"
>

    <div x-data="{ message: '' }" @post-created.window="message = $event.detail.message">
        <p x-text="message"></p>
    </div>


    <div
        class="fixed bottom-4 right-4 z-30"
    >
        <button
            x-on:click="openEditor = !openEditor" 
            class="bg-black p-2 rounded-full text-white ring-gray-950 ring-1 shadow-lg cursor-pointer"
        >
            <i x-show="!openEditor" data-lucide="pencil-line" class="w-5 h-5 shadow"></i>
            <i x-show="openEditor" data-lucide="x" class="w-5 h-5 shadow"></i>
        </button>
    </div>
    <div
        x-show="openEditor"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="transform translate-y-full opacity-100"
        x-transition:enter-end="transform translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="transform translate-y-0 opacity-100"
        x-transition:leave-end="transform translate-y-full opacity-0"
        class="fixed top-0 left-0 w-screen h-screen bg-[#F9F7F4] px-4 z-20"
    >
        {{ $slot }}
    </div>

</div>