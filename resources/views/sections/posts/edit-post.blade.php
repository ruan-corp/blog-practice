@section('title', 'Edição Post')

<x-app-layout>
    <x-slot name="header">
        Editar Post
    </x-slot>

    <form
        action="{{ route('posts.update', $post->id) }}"
        method="POST"
    >
        @csrf

        <x-forms.posts-form
            :categories="$categories"
            :post="$post"
        >
        </x-forms.posts-form>
    </form>
</x-app-layout>
