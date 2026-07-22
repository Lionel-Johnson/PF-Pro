@props([

'type'=>'text',

'name',

'value'=>''

])

<input

type="{{ $type }}"

name="{{ $name }}"

value="{{ old($name,$value) }}"

{{ $attributes->merge([

'class'=>'lc-input'

]) }}
>