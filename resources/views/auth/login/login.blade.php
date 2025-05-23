<x-layout>
    <form method="POST" action="{{ route('auth.submit-login') }}">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button>
            Login
        </button>
    </form>
</x-layout>