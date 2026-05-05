<x-layout>
    <div class="container">
        <x-slot:title>
            Jobs Page
        </x-slot:title>

        <h3 class="text-2xl font-bold mb-4">Available Jobs</h3>
        <ul class="list-disc pl-5 space-y-2">
            @foreach($jobs as $job)
                <li>
                    <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">{{ $job['title'] }}</a> - {{ $job['salary'] }} per year
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
