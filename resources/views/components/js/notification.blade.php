@if (session('message'))
    <script
        src="{{ asset('js/notification-message.js') }}"
        defer
    ></script>

    @if (isset(session('message')['success']))
        <x-js.message-container
            message="{{ session('message')['success'] }}"
            messageType="success"
        />
    @elseif (isset(session('message')['error']))
        <x-js.message-container
            message="{{ session('message')['error'] }}"
            messageType="error"
        />
    @endif
@endif
