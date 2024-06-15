@section('title', 'Criar Post')

<x-app-layout>
    <x-slot name="header">
        Criar Post
    </x-slot>

    <form
        action="{{ route('posts.store') }}"
        method="POST"
    >
        @csrf
        <x-forms.posts-form :categories="$categories">

        </x-forms.posts-form>
    </form>
</x-app-layout>
