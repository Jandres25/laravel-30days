<x-layout>
    <div class="container">
        <x-slot:title>
            Jobs Page
        </x-slot:title>

        <h1 class="text-2xl font-bold mb-4">Available Jobs</h1>

        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($jobs as $job)
                <article class="bg-white rounded-lg shadow p-5 hover:shadow-md transition">
                    <h2 class="text-xl font-semibold text-gray-800">
                        {{ $job['title'] }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">{{ $job->employer->name }}</p>

                    <p class="text-gray-700 mt-3">
                        Salary: <span class="font-medium">{{ $job['salary'] }}</span> per year
                    </p>

                    <a href="/jobs/{{ $job['id'] }}"
                       class="inline-block mt-4 text-blue-600 font-medium hover:underline">
                        View details
                    </a>
                </article>
            @endforeach
        </section>
    </div>
</x-layout>
