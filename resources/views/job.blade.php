<x-layout>
    <div class="container">
        <x-slot:title>
            Job
        </x-slot:title>

        <h1 class="text-4xl font-bold mb-4">{{ $job['title'] }}</h1>
        <p class="text-lg text-gray-700 mb-4">Salary: {{ $job['salary'] }} per year</p>
        <p class="text-lg text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</x-layout>
