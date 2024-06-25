<div class="flex flex-col gap-8">
    <div>
        <label
            for="name"
            class="input-label"
        >Nome</label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-input"
            value="{{ old('name') }}"
        >

        <x-inputs.input-error fieldIdentifier="name" />
    </div>

    <div>
        <label
            for="email"
            class="input-label"
        >Email</label>
        <input
            type="email"
            name="email"
            id="email"
            class="form-input"
            value="{{ old('email') }}"
        >

        <x-inputs.input-error fieldIdentifier="email" />
    </div>

    <div>
        <label
            for="password"
            class="input-label"
        >Senha</label>
        <input
            type="password"
            name="password"
            id="password"
            class="form-input"
        >

        <x-inputs.input-error fieldIdentifier="password" />
    </div>

    <div>
        <label
            for="password_confirmation"
            class="input-label"
        >Confirmar Senha</label>
        <input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            class="form-input"
        >

        <x-inputs.input-error fieldIdentifier="password_confirmation" />
    </div>

    <div>
        <label
            for="admin"
            class="font-medium text-gray-700 pr-1"
        >Registrar Como Administrador?</label>
        <input
            type="hidden"
            name="is_admin"
            value="0"
        >
        <input
            type="checkbox"
            name="is_admin"
            value="1"
            id="admin"
            {{ old('is_admin') == 1 ? 'checked' : '' }}
        >
    </div>

    <div>
        <button
            type="submit"
            class="green-button w-full"
        >Confirmar</button>
    </div>
</div>
