@props(['href'])

<a href="{{ $href }}"
    class="flex items-center text-gray-200 h-9 font-medium cursor-pointer border-b border-transparent transition-all hover:border-gray-400 hover:text-gray-400">
    {{ $slot }}
</a>
