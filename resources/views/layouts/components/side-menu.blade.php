@php
    function checkActiveUrl($url)
    {
        return request()->is($url) ? 'active-link' : '';
    }
@endphp

<nav class="side-menu">
    <div class="h-14 flex">
        <a
            href="{{ route('home') }}"
            class="{{ checkActiveUrl('admin') }} w-full flex items-center justify-center font-bold font-xl border-b border-black shadow"
        >Home</a>
    </div>

    <ul class="w-64">
        <li>
            <h4>
                Categorias
            </h4>

            <div class="dropdown-container">
                <x-side-menu.side-menu-link
                    :href="route('categories.categories')"
                    class=" {{ checkActiveUrl('admin/categories') }}"
                >
                    {{ 'Lista de Categorias' }}
                </x-side-menu.side-menu-link>

                <x-side-menu.side-menu-link
                    :href="route('categories.create')"
                    class="{{ checkActiveUrl('admin/categories/create') }}"
                >
                    {{ 'Criar Categoria' }}
                </x-side-menu.side-menu-link>
            </div>
        </li>

        <li>
            <h4>
                Posts
            </h4>

            <div class="dropdown-container">
                <x-side-menu.side-menu-link
                    :href="route('posts.posts')"
                    class="{{ checkActiveUrl('admin/posts') }}"
                >
                    {{ 'Lista de Posts' }}
                </x-side-menu.side-menu-link>

                <x-side-menu.side-menu-link
                    :href="route('posts.create')"
                    class="{{ checkActiveUrl('admin/posts/create') }}"
                >
                    {{ 'Criar Post' }}
                </x-side-menu.side-menu-link>
            </div>
        </li>

        <li>
            <h4>
                Perfil
            </h4>

            <div class="dropdown-container">
                <x-side-menu.side-menu-link
                    :href="route('profile.edit')"
                    class="{{ checkActiveUrl('admin/profile') }}"
                >
                    {{ Auth::user()->name }}
                </x-side-menu.side-menu-link>

            </div>
        </li>
    </ul>

    {{-- <ul>
        <li>
            <x-side-menu.side-menu-link
                :href="route('categories.categories')"
                class=" {{ checkActiveUrl('admin/categories') }}"
            >
                {{ 'Categorias' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link
                :href="route('categories.create')"
                class="{{ checkActiveUrl('admin/categories/create') }}"
            >
                {{ 'Criar Categoria' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link
                :href="route('posts.posts')"
                class="{{ checkActiveUrl('admin/posts/posts') }}"
            >
                {{ 'Posts' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link
                :href="route('posts.create')"
                class="{{ checkActiveUrl('admin/posts/create') }}"
            >
                {{ 'Criar Post' }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <x-side-menu.side-menu-link
                :href="route('profile.edit')"
                class="{{ checkActiveUrl('admin/profile') }}"
            >
                {{ Auth::user()->name }}
            </x-side-menu.side-menu-link>
        </li>

        <li>
            <form
                method="POST"
                action="{{ route('logout') }}"
            >
                @csrf
                <button
                    class="flex items-center w-full text-gray-200 h-9 font-medium cursor-pointer border-b border-transparent transition-all hover:border-gray-400 hover:text-gray-400"
                >
                    Logout
                </button>
            </form>
        </li>
    </ul> --}}
</nav>

<script src="{{ asset('js/side-menu.js') }}"></script>
