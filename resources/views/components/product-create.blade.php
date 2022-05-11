<x-app-layout>

    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <a href="{{ route('dashboard') }}">Voltar</a>
            <span><strong>Cadastrar produto</strong></span>
        </div>
    </x-slot>

    <form method="POST" action="{{ route('product.store') }}">
        @csrf

        <!-- Title -->
        <label for="title">Titulo</label>
        <input id="title" type="text" name="title" required autofocus/>

        <!-- Price -->
        <label for="price">Preço</label>
        <input id="price" type="number" name="price" required autofocus/>

        <!-- Payment -->
        <label for="image">Imagem</label>
        <input id="image" type="text" name="image" required autofocus/>

        <!-- Submit -->
        <button type="submit">Salvar</button>
    </form>

</x-app-layout>
