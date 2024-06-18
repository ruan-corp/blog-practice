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

<script
    src="{{ asset('js/confirm-delete.js') }}"
    defer
></script>
