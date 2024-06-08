@section('title', 'Criar Categoria')

<x-app-layout>
    <x-slot name="header">
        {{ 'Criar Categoria' }}
    </x-slot>

    <form 
        method="POST" 
        action="{{ route('categories.create') }}" 
        class="h-full"
    >
        @csrf
        <x-forms.form-container>
            <x-forms.form-description title="Criação de Categoria" description="Nome e Descrição da categoria" />

            <x-forms.input-container>
                <div>
                    <label for="name" class="input__label">Nome da Categoria</label>
                </div>
                <input type="text" name="name" id="name" class="form__input">

                <x-inputs.input-error fieldIdentifier="name" />
            </x-forms.input-container>

            <x-forms.input-container>
                <div>
                    <label for="description" class="input__label">Descrição</label>
                </div>
                <textarea name="description" id="description" rows="5" cols="30" class="rounded"></textarea>

                <x-inputs.input-error fieldIdentifier="description" />
            </x-forms.input-container>

            <div class="flex">
                <button type="submit"
                    class="text-white w-40 bg-green-600 py-2 rounded-md transition-all hover:bg-green-800">
                    Criar Categoria
                </button>
            </div>
        </x-forms.form-container>
    </form>
</x-app-layout>
