<nav class="bg-blue-950 h-full text-white p-2">
    <ul>
        {{-- Test Link --}}
        <li>
            <x-side-menu.side-menu-link :href="route('home')">
                {{ 'Home' }}
            </x-side-menu.side-menu-link>
        </li>
        <li>
            <x-side-menu.side-menu-link :href="route('categories.categories')">
                {{ 'Categorias' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link :href="route('categories.create')">
                {{ 'Criar Categoria' }}
            </x-side-menu.side-menu-link>
        </li>
    </ul>
</nav>
