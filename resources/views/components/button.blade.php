@props([
'type'=>'button',
'variant'=>'primary'
])

<button

type="{{ $type }}"

{{ $attributes->merge([
'class'=>"lc-btn lc-btn-$variant"
]) }}

>

{{ $slot }}

</button>