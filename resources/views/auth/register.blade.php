<x-app-layout>

    <x-slot name="header">
        <h5>Cadastrar</h5>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <label for="name">Nome</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus/>

        <!-- Email Address -->
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required />

        <!-- Cellphone -->
        <label for="cellphone">Celular (Whatsapp)</label>
        <input id="cellphone" type="text" name="cellphone" value="{{ old('cellphone') }}" required />

        <!-- Description -->
        <label for="desc">Descrição</label>
        <input id="desc" type="text" name="desc" value="{{ old('desc') }}" required />

        <!-- Password -->
        <label for="password">Senha</label>
        <input id="password"
            type="password"
            name="password"
            required autocomplete="new-password"/>

        <!-- Confirm Password -->
        <label for="password_confirmation">Confirma senha</label>
        <input id="password_confirmation"
            type="password"
            name="password_confirmation" required/>

        <button type="submit">Cadastrar</button>
    </form>
</x-app-layout>
