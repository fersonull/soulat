<x-auth-layout>
    <div x-data="{ attempted: false }" class="h-full inter-regular max-w-82 w-full">
        <div class="flex flex-col items-center justify-center">
            <h1 class="playfair-extrabold text-2xl">
                Soulat
            </h1>
            <div class="text-center">
                <p class="text-5xl playfair-extrabold">
                    Start creating new ideas.
                </p>
                <p class="text-sm">
                    Discover perspectives that deepens understanding.
                </p>
            </div>

            <form action="{{ route('auth.signup-email') }}" method="POST" class="mt-7 w-full">
                @csrf
                <div class="flex flex-col gap-1 mb-6">
                    <label for="name" class="text-sm">
                        Your full name
                    </label>
                    <input name="name" type="text" value="{{ old('name') }}" class="p-2 rounded-md bg-stone-200 text-sm outline-0 focus:ring-2 transition-all focus:bg-transparent" placeholder="Input your first name and last name">
                    @error('name')
                        <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 mb-6">
                    <label for="email" class="text-sm">
                        Your email
                    </label>
                    <input name="email" type="text" value="{{ old('email') }}" class="p-2 rounded-md bg-stone-200 text-sm outline-0 focus:ring-2 transition-all focus:bg-transparent" placeholder="kim@gmail.com">
                    @error('email')
                        <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1 mb-6">
                    <label for="password" class="text-sm">
                        Password
                    </label>
                    <input name="password" type="password" value="{{ old('password') }}" class="p-2 rounded-md bg-stone-200 text-sm outline-0 focus:ring-2 transition-all focus:bg-transparent" placeholder="password123">
                    @error('password')
                        <span class="text-xs text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <button x-show="!attempted" x-on:click="attempted = !attempted" class="p-2 rounded-full bg-black w-full text-white text-sm">
                    Create account
                </button>
                <button disabled x-cloak x-show="attempted" x-on:click="attempted = !attempted" class="p-2 rounded-full bg-black w-full text-white text-sm">
                    Create account...
                </button>
            </form>

            <a href="{{ route("auth.login.email") }}" class="mt-4 text-sm underline">
                Sign in with my account
            </a>
        </div>
    </div>
</x-auth-layout>