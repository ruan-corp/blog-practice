@props(['title', 'description', 'category'])

<div class="flex flex-col gap-5">
    <div>
        <h3 class="font-medium text-xl text-gray-900">{{ $title }}</h3>
        <p class="text-sm text-gray-600 my-1">{{ $description }}</p>
    </div>

    <div class="form-text-container">
        <div>
            <label
                for="name"
                class="input-label"
            >Nome da Categoria</label>
        </div>
        <input
            type="text"
            name="name"
            id="name"
            class="form-input"
            value="{{ $category->name ?? '' }}"
        >
        <x-inputs.input-error fieldIdentifier="name" />
    </div>

    <div class="form-text-container">
        <div>
            <label
                for="description"
                class="input-label"
            >Descrição</label>
        </div>
        <textarea
            name="description"
            id="description"
            cols="30"
            rows="5"
            class="form-input"
        >{{ $category->description ?? '' }}</textarea>
    </div>

    <div class="flex">
        <button
            type="submit"
            class="green-button"
        >
            Confirmar
        </button>
    </div>
</div>
