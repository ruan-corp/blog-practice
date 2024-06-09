@section('title', 'Editar Categoria')

<x-app-layout>
    <x-slot name="header">
        Editar Categoria
    </x-slot>

    <form
        action="{{ route('categories.update', ['id' => $category->id]) }}"
        method="POST"
        class="h-full">
        @csrf
        @method('PATCH')

        <x-forms.category-form
            title="Editar Categoria"
            :category="$category"
            description="Trocar nome ou descrição da categoria" />
    </form>
</x-app-layout>
