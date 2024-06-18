@props(['route', 'name' => null, 'method' => null])
<form
    action="{{ $route }}"
    method="POST"
    class="confirm-delete-form"
    name="{{ $name }}"
>
    @csrf
    @method($method)
    <button class="text-white bg-red-600 p-1 rounded transition-all hover:bg-red-800 border-gray-700 border">
        <span>
            <i class="fa-regular fa-trash-can"></i>
        </span>
        Excluir
    </button>
</form>
