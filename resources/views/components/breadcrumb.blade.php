@props([

'items'=>[]

])

<nav class="lc-breadcrumb">

@foreach($items as $item)

<a href="{{ $item['url'] }}">

{{ $item['label'] }}

</a>

@if(!$loop->last)

<span>/</span>

@endif

@endforeach

</nav>