@props([

'title',

'subtitle'=>''

])

<header class="page-header">

<div>

<h1>

{{ $title }}

</h1>

<p>

{{ $subtitle }}

</p>

</div>

<div>

{{ $actions ?? '' }}

</div>

</header>