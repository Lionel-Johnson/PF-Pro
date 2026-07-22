@props([

'name'

])

<select

name="{{ $name }}"

{{ $attributes->merge([

'class'=>'lc-select'

]) }}

>

{{ $slot }}

</select>