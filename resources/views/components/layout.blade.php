<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @livewireStyles
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soulat</title>

        {{-- Text editor API --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" /> --}}
        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="shortcut icon" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWFsYXJnZS1zbWFsbC1pY29uIGx1Y2lkZS1hLWxhcmdlLXNtYWxsIj48cGF0aCBkPSJNMjEgMTRoLTUiLz48cGF0aCBkPSJNMTYgMTZ2LTMuNWEyLjUgMi41IDAgMCAxIDUgMFYxNiIvPjxwYXRoIGQ9Ik00LjUgMTNoNiIvPjxwYXRoIGQ9Im0zIDE2IDQuNS05IDQuNSA5Ii8+PC9zdmc+">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body class="kanit-regular bg-[#F9F7F4] text-[#212529]">
        <div x-data="{ isToggled: false }"s class="min-h-screen flex flex-col relative">
            {{-- Nav --}}
            <div class="sticky top-0 z-10">

                <nav id="nav" class="py-3 md:py-4 md:px-8 px-4 flex items-center justify-center bg-[#F9F7F4] transition-all duration-200">
                    <div class="flex items-center justify-between w-full">
    
                        <ul class="hidden md:flex uppercase text-sm">
                            <li>
                                <a href="">Home</a>
                            </li>
                        </ul>
    
                        {{-- Mobile: sidebar button --}}
                        {{-- <button class="flex items-center justify-center cursor-pointer md:hidden">
                            <i data-lucide="align-left" class="w-5 h-5"></i>
                        </button> --}}
                        <div class="rounded-full h-6 ring w-6 overflow-hidden">
                            <img src="/profile.jpg" alt="" class="object-cover">
                        </div>
                        <a href="" class="text-3xl playfair-extrabold">
                            Soulat
                        </a>
                        <div class="flex items-center justify-center gap-4">
                            <i data-lucide="bell" class="w-5 h-5"></i>
                            <button class="flex items-center justify-center cursor-pointer" x-on:click="isToggled = !isToggled">
                                <i 
                                    x-show="!isToggled"
                                    data-lucide="search" class="w-5 h-5 pointer-events-none"
                                >
                                </i>
                                <i 
                                    x-show="isToggled" 
                                    data-lucide="x" 
                                    class="w-5 h-5 pointer-events-none"
                                >
                                </i>
                            </button>
                        </div>
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
            </div>

            
            {{-- Main content --}}
            <main
                class="min-h-full px-8 flex-1"
            >
                {{ $slot }}
            </main>


            {{-- Footer --}}
            <footer class="flex items-center justify-center">
                <div class="flex">
                    {{-- TODO: add footer content --}}
                </div>
            </footer>
        </div>

        {{-- <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script> --}}

        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @livewireScripts
    </body>
</html>
