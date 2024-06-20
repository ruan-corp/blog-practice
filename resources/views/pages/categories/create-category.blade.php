@section('title', 'Criar Categoria')

<x-app-layout>
    <div class="content-container">
        <x-content-container.title-content-container title="Criação de Categoria" />

        <form
            action="{{ route('categories.create') }}"
            method="POST"
        >
            @csrf
            <x-forms.category-form />
        </form>
    </div>
</x-app-layout>
