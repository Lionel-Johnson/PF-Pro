@props([

'title',

'message'

])

<div class="lc-empty">

<img

src="{{ asset('images/empty.svg') }}"

alt="Aucune donnée"

>

<h2>

{{ $title }}

</h2>

<p>

{{ $message }}

</p>

</div>