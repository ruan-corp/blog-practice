@props(['message', 'messageType'])

@php
    $bgColor = '';
    if ($messageType == 'success') {
        $bgColor = 'bg-green-300';
    } elseif ($messageType == 'error') {
        $bgColor = 'bg-red-300';
    }
@endphp

<div
    class="absolute left-1/4 right-1/4 my-2 cursor-pointer"
    id="notification-message"
>
    <p class="{{ $bgColor }} text-gray-700 text-center text-xl font-bold p-5 rounded shadow-xl">
        {{ $message }}
    </p>
</div>
