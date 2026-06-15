<x-layout>
    <div class="container">
        <x-slot:title>
            Edit Job: {{ $job->title }}
        </x-slot:title>

        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('PATCH')

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">
                        Job Information
                    </h2>
                    <p class="mt-1 text-sm/6 text-gray-600">
                        This information will be displayed publicly so be careful what you share.
                    </p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <x-form-field>
                            <x-form-label for="title">Title</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="title" name="title" value="{{ $job->title }}" placeholder="Programmer" />
                                <x-form-error name="title"/>
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="salary">Salary</x-form-label>
                            <div class="mt-2">
                                <x-form-input id="salary" name="salary" value="{{ $job->salary }}" placeholder="$50,000 per year" />
                                <x-form-error name="salary"/>
                            </div>
                        </x-form-field>

                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-between">
                <button form="delete-form" class="text-sm font-semibold text-red-600 hover:text-red-500">Delete</button>
                <div class="flex items-center gap-x-6">
                    <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <x-form-button>Update</x-form-button>
                </div>
            </div>
        </form>

        <form id="delete-form" method="POST" action="/jobs/{{ $job->id }}" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
