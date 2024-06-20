@props(['category'])

<div class="flex flex-col gap-8">
    <div>
        <label
            for="name"
            class="input-label"
        >Nome da Categoria</label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-input"
            value="{{ $category->name ?? '' }}"
        >
        <x-inputs.input-error fieldIdentifier="name" />
    </div>

    <div>
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
            class="green-button w-full"
        >
            Confirmar
        </button>
    </div>
</div>
