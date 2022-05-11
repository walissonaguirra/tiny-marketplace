@props(['email'])

@php
$hash = md5(strtolower(trim($email)))
@endphp

<img style="border-radius: 100%;" src="https://www.gravatar.com/avatar/{{ $hash }}"/>
