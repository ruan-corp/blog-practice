@section('title', 'Editar Categoria')

<x-app-layout>
    <form
        action="{{ route('categories.update', ['id' => $category->id]) }}"
        method="POST"
        class="content-container w-full"
    >
        @csrf
        @method('PATCH')

        <x-forms.category-form
            title="Editar Categoria"
            :category="$category"
            description="Trocar nome ou descrição da categoria"
        />
    </form>
</x-app-layout>
