@props([

'type'=>'success'

])

<div

class="lc-alert lc-alert-{{ $type }}"

>

{{ $slot }}

</div>