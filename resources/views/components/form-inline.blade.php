@props([
    'method' => 'POST',
    'action',
    'label'
])

<form method="POST" action="{{ $action }}">
    @csrf
    @method($method)

    <a  href="{{ $action }}"
        onclick="event.preventDefault(); this.closest('form').submit();">
        {{ $label }}
    </a>
</form>
