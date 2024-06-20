@props(['href', 'class' => ''])

<a
    href="{{ $href }}"
    class="side-menu-link {{ $class }}"
>
    {{ $slot }}
</a>
