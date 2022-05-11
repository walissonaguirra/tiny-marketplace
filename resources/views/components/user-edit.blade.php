<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <a href="{{ route('dashboard') }}">Voltar</a>
            <span><strong>Perfil</strong></span>
        </div>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors :errors="$errors" />

    <form method="POST" action="{{ route('user.update') }}">
        @csrf
        @method('PUT')

        <!-- Name -->
        <label for="name">Nome</label>
        <input id="name" type="text" name="name" value="{{ $user->name }}" required autofocus/>

        <!-- Email Address -->
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ $user->email }}" required />

        <!-- Cellphone -->
        <label for="cellphone">Celular (Whatsapp)</label>
        <input id="cellphone" type="text" name="cellphone" value="{{ $user->cellphone }}" required />

        <!-- Description -->
        <label for="desc">Descrição</label>
        <input id="desc" type="text" name="desc" value="{{ $user->desc }}" required />


        <button type="submit">Salvar</button>
    </form>

    <x-form-inline :action="route('user.destroy')" method="DELETE" label="Apagar conta"/>
</x-app-layout>
