<nav class="bg-blue-950 h-full text-white">
    <div class="bg-blue-900 shadow">
        <a href="{{ route('home') }}" class="py-6 flex justify-center w-full h-full text-xl font-bold">Home</a>
    </div>
    <ul class="p-2">
        <li>
            <x-side-menu.side-menu-link :href="route('categories.categories')">
                {{ 'Categorias' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link :href="route('categories.createCategory')">
                {{ 'Criar Categoria' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link :href="route('profile.edit')">
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
