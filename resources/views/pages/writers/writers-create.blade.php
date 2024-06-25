@section('title', 'Registrar Escritor')

<x-app-layout>
    <div class="content-container">
        <x-content-container.title-content-container title="Registração de Escritor" />

        <form
            action="{{ route('writers.store') }}"
            method="POST"
        >
            @csrf
            <x-forms.writer-form>

            </x-forms.writer-form>
        </form>
    </div>
</x-app-layout>
