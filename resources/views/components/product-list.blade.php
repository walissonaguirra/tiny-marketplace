@props(['products', 'cellphone', 'pay' => false])

{{ $header }}

<div class="products">
    @forelse($products as $product)
        <x-product-item :product="$product" :cellphone="$cellphone ?? ''" :pay="$pay"/>
    @empty
        <span>Nenhum produto cadastrado</span>
    @endforelse
</div>
