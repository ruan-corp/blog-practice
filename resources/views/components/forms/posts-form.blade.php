@section('head-imports')
    <x-head.tinymce-config> </x-head.tinymce-config>
@endsection
@props(['categories', 'post'])

<div class="flex flex-col gap-8">
    <div class="w-full">
        <label
            for="title"
            class="input-label"
        >Titulo do Post</label>
        <input
            type="text"
            name="title"
            id="title"
            class="form-input"
            value="{{ $post->title ?? old('title') }}"
        />
        <div>
            <x-inputs.input-error fieldIdentifier="title" />
        </div>
    </div>

    <div class="w-full">
        <label
            for="category"
            class="input-label"
        >Categoria</label>
        <select
            name="category_id"
            id="category"
            class="form-input"
        >
            @if (isset($post))
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ $category->id == $post->category_id ? 'selected' : '' }}
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            @else
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            @endif
        </select>
        <div>
            <x-inputs.input-error fieldIdentifier="category_id" />
        </div>
    </div>


    @if (isset($post) && !$post->published_at)
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
    @elseif (!isset($post))
        <div class="flex items-center gap-1">
            <label
                for="published_at"
                class="input-label"
            >Publicado:</label>
            <input
                type="checkbox"
                name="published_at"
                id="published_at"
                {{ old('published_at') ? 'checked' : '' }}
            />
        </div>
    @else
        <div>
            <p>Post já publicado</p>
        </div>
    @endif

    <div>
        <div class="flex justify-center">
            <x-inputs.input-error fieldIdentifier="content" />
        </div>
        <textarea
            name="content"
            id="editor-content"
            rows="25"
        >{{ $post->content ?? old('content') }}</textarea>
    </div>

    <div>
        <button
            type="submit"
            class="green-button w-full"
        >Confirmar</button>
    </div>
</div>
