<x-app-layout>
    <x-slot name="header">
        Editar Categoria
    </x-slot>

    <form method="POST" action="{{ route('categories.update', ['id' => $category->id]) }}" class="flex justify-center">
        @csrf
        @method('PATCH')

        <x-forms.form-container>
            <x-forms.input-container>
                <div>
                    <label for="name" class="text-lg font-medium">Nome da Categoria</label>
                </div>
                <input type="text" name="name" id="name" class="bg-gray-100 rounded"
                    value="{{ $category->name }}">

                <x-inputs.input-error fieldIdentifier="name" />
            </x-forms.input-container>

            <x-forms.input-container>
                <div>
                    <label for="description" class="text-lg font-medium">Descrição</label>
                </div>
                <textarea name="description" id="description" rows="5" cols="30" class="rounded bg-gray-100">{{ $category->description }}</textarea>

            </x-forms.input-container>

            <div class="flex">
                <button type="submit"
                    class="text-white w-40 bg-green-600 py-2 rounded-md transition-all hover:bg-green-800">
                    Editar Categoria
                </button>
            </div>
        </x-forms.form-container>
    </form>
</x-app-layout>
