@section('title', 'Editar Categoria')

<x-app-layout>
    <div class="content-container">
        <x-content-container.title-content-container title="Edição de Categoria" />

        <form
            action="{{ route('categories.update', ['id' => $category->id]) }}"
            method="POST"
        >
            @csrf
            @method('PATCH')

            <x-forms.category-form
                title="Editar Categoria"
                :category="$category"
                description="Trocar nome ou descrição da categoria"
            />
        </form>
    </div>
</x-app-layout>
