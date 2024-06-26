@section('title', 'Posts')

<x-app-layout>
    <div class="content-container flex flex-col justify-between">
        <div>
            <x-content-container.title-content-container title="Lista de Posts" />

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

                                    <x-forms.form-edit-button route="{{ route('posts.edit', $post->id) }}" />

                                    @if (!$post->published_at)
                                        <x-forms.form-delete-button route="{{ route('posts.destroy', $post->id) }}" />
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $posts->links() }}
    </div>
</x-app-layout>
