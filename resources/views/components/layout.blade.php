<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AlWrite</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/alpinejs" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body class="kanit-regular bg-[#F9F7F4] text-[#212529]">
        <div x-data="{ isToggled: false }"s class="min-h-screen flex flex-col relative">

            {{-- Nav --}}
            <nav id="nav" class="py-3 md:py-4 md:px-8 px-4 flex items-center justify-center bg-[#F9F7F4] sticky top-0 transition-all duration-200 z-20">
                <div class="flex items-center justify-between w-full">
                    <button class="flex items-center justify-center cursor-pointer">
                        <i data-lucide="align-left" class="w-5 h-5"></i>
                    </button>
                    <a href="" class="text-3xl playfair-bold">
                        Soulat
                    </a>
                    <button class="flex items-center justify-center cursor-pointer" @click="isToggled = !isToggled">
                        <i data-lucide="search" class="w-5 h-5 pointer-events-none"></i>
                    </button>
                </div>
                <div
                    x-show="isToggled"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    class="absolute bg-[#F9F7F4] shadow p-3 top-14 w-full flex z-10"
                >
                    <input class="w-full p-2 outline-none font-sans" placeholder="Search Topics" type="text" name="" id="">
                    <button class="p-2 cursor-pointer">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </button>
                </div>
            </nav>

           

            
            {{-- Main content --}}
            <main class="min-h-full px-8 flex-1">
                {{ $slot }}
            </main>


            {{-- Footer --}}
            <footer class="flex items-center justify-center">
                <div class="flex">
                    {{-- TODO: add footer content --}}
                </div>
            </footer>
        </div>
    </body>
</html>
