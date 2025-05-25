<x-auth-layout>
    <div x-data="{ attempted: false }" class="h-full inter-regular max-w-82 w-full">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-3xl playfair-extrabold mb-2">
                Soulat
            </h1>

            <p class="playfair-regular text-3xl">
                Sign in with email
            </p>

            <form x-on:submit="attempted = !attempted" action="{{ route('auth.login-email') }}" method="POST" class="mt-7 w-full">
                @csrf
                <div class="flex flex-col gap-1 mb-6">  
                    <label for="email" class="text-sm">
                        Your email
                    </label>
                    <input type="text" name="email" value="{{ old('email') }}" class="p-2 rounded-md bg-stone-200 text-sm outline-0 focus:ring-2 transition-all focus:bg-transparent" placeholder="kim@gmail.com">
                    @error('email')
                        <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 mb-6">
                    <label for="password" class="text-sm">
                        Your password
                    </label>
                    <input type="password" name="password" class="p-2 rounded-md bg-stone-200 text-sm outline-0 focus:ring-2 transition-all focus:bg-transparent" placeholder="password123">
                    @error('password')
                        <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <button x-show="!attempted" class="p-2 rounded-full bg-black w-full text-white text-sm">
                    Login
                </button>
                <button x-cloak x-show="attempted" disabled class="p-2 rounded-full bg-black w-full text-white text-sm">
                    Login...
                </button>
            </form>

            <a href="/login" class="mt-4 text-sm underline">
                More sign in options
            </a>
        </div>
    </div>
</x-auth-layout>