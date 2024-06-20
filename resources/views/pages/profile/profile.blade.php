@section('title', 'Perfil')

<x-app-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <div class="content-container">
        <div class=" space-y-8">
            <div>
                <div class="max-w-xl">
                    @include('pages.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div>
                <div class="max-w-xl">
                    @include('pages.profile.partials.update-password-form')
                </div>
            </div>

            <div>
                <div class="max-w-xl">
                    @include('pages.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
