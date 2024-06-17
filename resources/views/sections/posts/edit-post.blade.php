@section('title', 'Edição Post')

<x-app-layout>
    <form
        action="{{ route('posts.update', $post->id) }}"
        method="POST"
        class="content-container"
    >
        @csrf

        <x-forms.posts-form
            :categories="$categories"
            :post="$post"
        >
        </x-forms.posts-form>
    </form>
</x-app-layout>
