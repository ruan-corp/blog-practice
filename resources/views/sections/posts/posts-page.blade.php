@section('title', 'Posts')

<x-app-layout>
    <div class="content-container">
        <table class="w-full custom-tables">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Publicado</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $post->id }}
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->category->name }}
                        </td>
                        <td>
                            {{ $post->published_at ? $post->published_at : 'Não publicado' }}
                        </td>
                        <td>
                            <div class="flex justify-between mx-2">
                                <a
                                    href="{{ route('posts.show', $post->id) }}"
                                    class="edit-button"
                                >Editar</a>

                                @if (!$post->published_at)
                                    <form
                                        action="{{ route('posts.destroy', $post->id) }}"
                                        method="POST"
                                        class="confirm-delete-form"
                                    >
                                        @csrf
                                        <button class="delete-button">
                                            Remover
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

<script src="{{ asset('js/confirm-delete.js') }}"></script>
