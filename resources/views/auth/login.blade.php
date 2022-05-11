<x-app-layout>

    <x-slot name="header">
        <h5>Entrar</h5>
    </x-slot>

    <!-- Session Status -->
    <div>{{ session('status') }}</div>

    <!-- Validation Errors -->
    <x-auth-validation-errors :errors="$errors" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

        <!-- Password -->
        <label for="password">Senha</label>
        <input  id="password"
                type="password"
                name="password"
                required autocomplete="current-password">

        <button type="submit">Entrar</button>
    </form>
</x-app-layout>
