@props(['href', 'class' => ''])

<a
    href="{{ $href }}"
    class="flex items-center text-gray-200 h-9 font-medium cursor-pointer border-b-2 border-transparent transition-all hover:border-gray-400 hover:text-gray-400 {{ $class }}"
>
    {{ $slot }}
</a>
