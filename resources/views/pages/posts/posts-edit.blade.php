@section('title', 'Edição Post')

<x-app-layout>
    <div class="content-container">
        <x-content-container.title-content-container title="Edição de Post" />
        <form
            action="{{ route('posts.update', $post->id) }}"
            method="POST"
        >
            @csrf
            @method('PUT')

            <x-forms.posts-form
                :categories="$categories"
                :post="$post"
            >
            </x-forms.posts-form>
        </form>
    </div>
</x-app-layout>
