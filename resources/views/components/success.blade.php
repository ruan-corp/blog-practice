@if (session('success'))
    <script
        src="{{ asset('js/notification-message.js') }}"
        defer
    ></script>

    <div
        class="absolute left-1/4 right-1/4 my-2 cursor-pointer"
        id="notification-message"
    >
        <p class="bg-green-300 text-gray-700 text-center text-xl font-bold p-5 rounded shadow-xl">
            {{ session('success') }}
        </p>
    </div>
@endif
