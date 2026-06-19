<x-layout>
    <div class="container">
        <x-slot:title>
            Job
        </x-slot:title>

        <h1 class="text-4xl font-bold mb-4">{{ $job->title }}</h1>
        <p class="text-lg text-gray-700 mb-4">Salary: {{ $job->salary }} per year</p>

        @can('edit', $job)
            <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
        @endcan
    </div>
</x-layout>
