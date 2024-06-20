@section('title', 'Criar Post')

<x-app-layout>
    <div class="content-container">

        <x-content-container.title-content-container title="Criação de Post" />

        <form
            action="{{ route('posts.store') }}"
            method="POST"
        >
            @csrf
            <x-forms.posts-form :categories="$categories">

            </x-forms.posts-form>
        </form>
    </div>
</x-app-layout>
