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
        <div class="min-h-screen flex flex-col relative">
            {{-- Main content --}}
            <main
                class="min-h-full px-8 py-4 flex-1 flex items-center justify-center"
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
        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registerd!',
                    text: "{{ session('success') }}",
                    confirmButtonColor: 'black',
                })
                .then(() => {
                    window.location.href = '/';
                })
            </script>
        @endif
        @livewireScripts
    </body>
</html>
