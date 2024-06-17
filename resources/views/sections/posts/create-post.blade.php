@section('title', 'Criar Post')

<x-app-layout>
    <form
        action="{{ route('posts.store') }}"
        method="POST"
        class="content-container"
    >
        @csrf
        <x-forms.posts-form :categories="$categories">

        </x-forms.posts-form>
    </form>
</x-app-layout>
