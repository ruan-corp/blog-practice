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
                            <div class="flex justify-center gap-2">
                                <a
                                    href="{{ route('posts.show', $post->id) }}"
                                    class="edit-button"
                                >Editar</a>

                                <button class="delete-button">
                                    Remover
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
