<x-app-layout>
    <x-slot name="header">
        <h2>Lista de Categorias</h2>
    </x-slot>
    <div class="px-4">
        <div class="grid justify-items-center grid-cols-4 gap-2 py-1 text-lg font-semibold border-y-2">
            <p>Categoria</p>
            <p>Descrição</p>
            <p>Slug</p>
            <p>Ações</p>
        </div>
        <ul class="mt-6">
            @foreach ($categories as $category)
                <li class="grid justify-items-center grid-cols-4 gap-2 border-b py-4">
                    <h4>{{ $category->name }}</h4>
                    <p class="text-ellipsis h-12 overflow-hidden">{{ $category->description }}</p>
                    <p>{{ $category->slug }}</p>
                    <div>
                        <button class="text-white w-20 bg-blue-600 py-2 rounded-md transition-all hover:bg-blue-800">
                            Editar
                        </button>
                        <button class="text-white w-20 bg-red-600 py-2 rounded-md transition-all hover:bg-red-800">
                            Excluir
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
