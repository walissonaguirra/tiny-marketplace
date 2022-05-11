<x-app-layout>

    <x-slot name="header">
        <div class="container d-flex justify-content-center">
            <x-user-card/>
        </div>
    </x-slot>

    <x-product-list :products="$products ?? []" >
        <x-slot name="header">
            <div class="d-flex justify-content-between">
                <p><strong>Produtos</strong></p>
                <p><a href="{{ route('product.create') }}">Novo</a></p>
            </div>
        </x-slot>
    </x-product-list>

</x-app-layout>
