@props([
'type'=>'primary'
])

<span

{{ $attributes->merge([

'class'=>"lc-badge lc-badge-$type"

]) }}

>

{{ $slot }}

</span>