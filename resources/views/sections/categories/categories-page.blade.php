@section('title', 'Categorias')

<x-app-layout>
    <div class="content-container">
        <x-content-container.title-content-container title="Lista de Categorias" />

    @if ($categories->isNotEmpty())
        <table class="w-full break-words custom-tables">
            <thead>
                <tr>
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
                                    href="{{ route('categories.edit', $category->id) }}"
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
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <div class="flex justify-between mx-4">
                                    <x-forms.form-edit-button route="{{ route('categories.show', $category->id) }}" />

                                    <x-forms.form-delete-button
                                        route="{{ route('categories.destroy', $category->id) }}"
                                        name="{{ $category->name }}"
                                        method="{{ 'delete' }}"
                                    />
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
    </div>

</x-app-layout>
