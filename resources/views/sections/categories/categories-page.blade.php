@section('title', 'Categorias')

<x-app-layout>
    <x-slot name="header">
        Lista de Categorias
    </x-slot>

    @if ($categories->isNotEmpty())
        <table class="table-fixed w-full break-words">
            <thead>
                <tr class="border-y-2 h-10 text-lg">
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Slug</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr class="text-center h-20 border-b">
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <div class="flex gap-2 justify-center">
                                <a
                                    class="edit-button"
                                    href="{{ route('categories.show', $category->id) }}"
                                >
                                    Editar
                                </a>
                                <form
                                    method="POST"
                                    action="{{ route('categories.destroy', $category->id) }}"
                                    class="confirm-delete-form"
                                    name="{{ $category->name }}"
                                >
                                    @csrf
                                    @method('delete')
                                    <button class="delete-button">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        {{-- Categoria Vazia  --}}
        <h3 class="text-center text-xl">Nenhuma categoria registrada!
            <span class="text-blue-800">
                <a href="{{ route('categories.create') }}">Registrar Categoria</a>
            </span>
        </h3>
    @endif
</x-app-layout>

<script
    src="{{ asset('js/confirm-delete.js') }}"
    defer
></script>
