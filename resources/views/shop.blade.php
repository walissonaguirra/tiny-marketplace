<x-app-layout>

    <x-slot name="header">
        <div class="container d-flex justify-content-center">
            <div class="d-flex align-items-center gap-15">
                <div>
                    <x-gravatar :email="$user->email"/>
                </div>

                <div class="d-flex flex-column">
                    <span>{{ $user->name }}</span>

                    <div class="d-flex gap-10">
                        <small>{{ $user->desc }}</small>
                    </div>
                </div>
            </div>

        </div>
    </x-slot>

    <x-product-list :products="$products ?? []" :cellphone="$user->cellphone" :pay="true">
        <x-slot name="header">
            <div class="d-flex justify-content-between">
                <p><strong>Produtos</strong></p>
            </div>
        </x-slot>
    </x-product-list>

</x-app-layout>
