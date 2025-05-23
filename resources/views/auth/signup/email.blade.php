<x-layout>
    <form method="POST" action="{{ route('auth.signup-email') }}">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button>
            register
        </button>
    </form>
</x-layout>