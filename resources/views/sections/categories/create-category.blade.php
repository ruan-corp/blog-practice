@section('title', 'Criar Categoria')

<x-app-layout>
    <x-slot name="header">
        {{ 'Criar Categoria' }}
    </x-slot>

    <form
        action="{{ route('categories.create') }}"
        method="POST"
        class="h-full"
    >
        @csrf
        <x-forms.category-form
            title="Criação de Categoria"
            description="Nome e descrição da categoria"
        />
    </form>
</x-app-layout>
