<x-auth-layout>
    <div x-data="{ attempted: false }" class="h-full inter-regular max-w-82 w-full">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-3xl playfair-extrabold mb-2">
                Soulat
            </h1>

            <p class="playfair-regular text-3xl">
                Create your account
            </p>

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

            <a href="/signup" class="mt-4 text-sm underline">
                More sign up options
            </a>
        </div>

        {{-- <form method="POST" action="{{ route('auth.signup-email') }}">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button>
                register
            </button>
        </form> --}}

        
        
    </div>
</x-auth-layout>