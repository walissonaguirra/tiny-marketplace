<x-app-layout>
    @auth
        <a href="{{ route('dashboard') }}">Início</a>
    @else
    <p>
        <a role="button" href="{{ route('login') }}">Entrar</a>
        <a role="button" class="outline" href="{{ route('register') }}">Cadastrar</a>
    </p>
    @endauth

    <p>
        Este é um sistema de marketplace simples, a ideia é que qualquer pessoa possa
        ter sua página de venda na internet com zero configuração, você pode anuncia
        desde livros usado á qualquer tipo de produto e recebe sua solicitação de
        compra no whatsapp.
    </p>
</x-app-layout>
