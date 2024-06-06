@section('title', 'Categorias')

<x-app-layout>
    <x-slot name="header">
        Lista de Categorias
    </x-slot>

    @if ($categories->isEmpty())
        <h3 class="text-center text-xl">Nenhuma categoria registrada!
            <span class="text-blue-800">
                <a href="{{ route('categories.create') }}">Registrar Categoria</a>
            </span>
        </h3>
    @endif

    @if ($categories->isNotEmpty())
        <div>
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
                            <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                                @csrf
                                @method('delete')
                                <button class="delete-button">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
</x-app-layout>
