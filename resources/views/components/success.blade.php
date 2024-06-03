@if (session()->has('success'))
    <div class=" flex justify-center items-center m-2">
        <p class="bg-green-300 text-gray-700 text-xl font-bold p-5 rounded shadow-xl">
            {{ session()->get('success') }}
        </p>
    </div>
@endif
