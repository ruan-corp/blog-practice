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
                <li class="grid justify-items-center items-center grid-cols-4 gap-2 border-b py-4">
                    <h4>{{ $category->name }}</h4>
                    <p class="text-ellipsis h-12 overflow-hidden">{{ $category->description }}</p>
                    <p>{{ $category->slug }}</p>
                    <div class="flex gap-2">
                        <a class="edit-button" href="{{ route('categories.show', $category->id) }}">
                            Editar
                        </a>
                        <a href="" class="delete-button">
                            Excluir
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
