@props([

'title',

'value',

'icon'=>null

])

<div class="lc-stat-card">

<div class="stat-icon">

{!! $icon !!}

</div>

<div>

<h3>

{{ $value }}

</h3>

<p>

{{ $title }}

</p>

</div>

</div>