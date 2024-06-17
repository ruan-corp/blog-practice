@section('title', 'Criar Categoria')

<x-app-layout>
    <form
        action="{{ route('categories.create') }}"
        method="POST"
        class="content-container"
    >
        @csrf
        <x-forms.category-form
            title="Criação de Categoria"
            description="Nome e descrição da categoria"
        />
    </form>
</x-app-layout>
