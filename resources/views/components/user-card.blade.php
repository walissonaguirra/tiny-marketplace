<div class="d-flex align-items-center gap-15">
    <div>
        <x-gravatar :email="Auth::user()->email"/>
    </div>

    <div class="d-flex flex-column">
        <span>{{ Auth::user()->name }}</span>

        <div class="d-flex gap-10">
            <a href="{{ route('user.edit') }}">Perfil</a> •
            <a target="_blank" href="{{ route('shop.show', ['user' => Auth::user()->id]) }}">Loja</a> •
            <x-form-inline :action="route('logout')" label="Sair"/>
        </div>
    </div>
</div>
