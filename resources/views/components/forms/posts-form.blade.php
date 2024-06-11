@section('head-imports')
    <x-head.tinymce-config> </x-head.tinymce-config>
@endsection @props(['categories'])

<div class="flex flex-col gap-8">
    <div>
        <label
            for="title"
            class="block input-label"
        >Titulo do Post</label>
        <input
            type="text"
            name="title"
            id="title"
            class="form-input"
        />
        <div>
            <x-inputs.input-error fieldIdentifier="title" />
        </div>
    </div>

    <div>
        <label
            for="category"
            class="block input-label"
        >Categoria</label>
        <select
            name="category_id"
            id="category"
        >
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <div>
            <x-inputs.input-error fieldIdentifier="category_id" />
        </div>
    </div>

    <div>
        <label
            for="published_at"
            class="input-label"
        >Publicado:</label>
        <input
            type="checkbox"
            name="published_at"
            id="published_at"
        />
    </div>

    <div>
        <div class="flex justify-center">
            <x-inputs.input-error fieldIdentifier="content" />
        </div>
        <textarea
            name="content"
            id="editor-content"
            rows="40"
        ></textarea>
    </div>

    <div class="text-center">
        <button
            type="submit"
            class="green-button"
        >Confirmar</button>
    </div>
</div>
