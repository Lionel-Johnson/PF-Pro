@props([

'src'=>asset('images/avatar-default.png'),

'size'=>60

])

<img

src="{{ $src }}"

width="{{ $size }}"

height="{{ $size }}"

class="lc-avatar"

alt="Avatar"

>