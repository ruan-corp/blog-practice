@section('head-imports')
    <x-head.tinymce-config> </x-head.tinymce-config>
@endsection
@props(['categories', 'post' => null])

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
            class="form-input w-96"
            value="{{ $post->title ?? old('title') }}"
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
            class="form-input w-96"
        >
            @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    {{ old('category_id') == $category->id || $post?->category_id == $category->id ? 'selected' : '' }}
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <div>
            <x-inputs.input-error fieldIdentifier="category_id" />
        </div>
    </div>

    @if ($post?->published_at)
        <div>
            <p>Post já publicado</p>
        </div>
    @else
        <div>
            <label
                for="published"
                class="input-label"
            >Publicado:</label>
            <input
                type="checkbox"
                name="published"
                id="published"
                value="1"
                {{ old('published') ? 'checked' : '' }}
            />
        </div>
    @endif

    <div>
        <div class="flex justify-center">
            <x-inputs.input-error fieldIdentifier="content" />
        </div>
        <textarea
            name="content"
            id="editor-content"
            rows="40"
        >{{ $post->content ?? old('content') }}</textarea>
    </div>

    <div class="text-center">
        <button
            type="submit"
            class="green-button"
        >Confirmar</button>
    </div>
</div>
