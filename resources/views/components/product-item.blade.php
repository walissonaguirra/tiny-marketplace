@props(['product', 'cellphone', 'pay' => false])

<div>
    <img class="products-image" src="{{ $product->image }}"/>

    <div>{{ $product->title }}</div>

    <div><strong>R$ {{ number_format($product->price, 2, ',', '.') }}</strong></div>

    @if($pay)
    <a target="_blank" href="https://api.whatsapp.com/send?phone={{$cellphone}}&text=Oi!%2C%20tenho%20interesse%20neste%20item%20**{{$product->title}}%20•%20R$%20{{number_format($product->price, 2, ',', '.')}}**">
        Comprar
    </a>
    @else
    <div class="d-flex gap-10">
        <a href="{{ route('product.edit', ['product' => $product->id]) }}">Editar</a> •

        <x-form-inline
            :action="route('product.destroy', ['product' => $product->id])"
            method="DELETE"
            label="Apagar"/>
    </div>
    @endif
</div>
