@props([

'name'

])

<textarea

name="{{ $name }}"

{{ $attributes->merge([

'class'=>'lc-textarea'

]) }}

>{{ old($name) }}</textarea>