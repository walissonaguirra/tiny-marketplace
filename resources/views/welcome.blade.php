<x-app-layout>
    @auth
        <a href="{{ route('dashboard') }}">Início</a>
    @else
        <a role="button" href="{{ route('login') }}">Entrar</a>
        <a role="button" class="outline" href="{{ route('register') }}">Cadastrar</a>
    @endauth
</x-app-layout>
