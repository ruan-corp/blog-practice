@section('title', 'Posts')

<x-app-layout>
    <x-slot name="header">
        Lista de Posts
    </x-slot>

    <div>
        <table class="w-full table-fixed">
            <thead>
                <tr class="border-y-2 h-10 text-lg">
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Publicado</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr class="text-center border-b h-20">
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
                                    href="{{ route('posts.edit', $post->id) }}"
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
