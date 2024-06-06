@php
    function checkActiveUrl($url)
    {
        return request()->is($url) ? 'active__link' : '';
    }
@endphp

<nav class="bg-blue-950 h-full text-white">
    <div class="bg-blue-900 shadow">
        <a href="{{ route('home') }}"
            class="py-6 flex justify-center w-full h-full text-xl font-bold hover:text-gray-400 hover:bg-blue-800 transition-all duration-500">Home</a>
    </div>
    <ul class="p-2">
        <li>
            <x-side-menu.side-menu-link :href="route('categories.categories')" class=" {{ checkActiveUrl('admin/categories') }}">
                {{ 'Categorias' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link :href="route('categories.createCategory')" class="{{ checkActiveUrl('admin/categories/create') }}">
                {{ 'Criar Categoria' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link :href="route('profile.edit')" class="{{ checkActiveUrl('admin/profile') }}">
                {{ Auth::user()->name }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    class="flex items-center w-full text-gray-200 h-9 font-medium cursor-pointer border-b border-transparent transition-all hover:border-gray-400 hover:text-gray-400">
                    Logout
                </button>
            </form>
        </li>
    </ul>
</nav>
