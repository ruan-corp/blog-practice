<nav class="bg-blue-950 h-full text-white p-2">
    <ul>
        {{-- Test Link --}}
        <li>
            <x-dashboard.dashboard-link :href="route('home')">
                {{ 'Home' }}
            </x-dashboard.dashboard-link>
        </li>
        <li>
            <x-dashboard.dashboard-link :href="route('home')">
                {{ 'Home 2' }}
            </x-dashboard.dashboard-link>
        </li>
    </ul>
</nav>
