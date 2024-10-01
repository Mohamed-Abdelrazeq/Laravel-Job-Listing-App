<x-layout>

    <x-slot:header>Job Listings Page</x-slot:header>

    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg mb-20">
        @foreach ($jobs as $job)
            <div class="mb-6 p-6 border border-gray-200 rounded-lg hover:shadow-lg transition duration-300">
                <a href="/jobs/{{ $job->id }}" class="block text-lg font-semibold text-blue-600 hover:underline">
                    {{ $job->title }}
                </a>
                <div class="mt-2 text-gray-700">
                    <p>Employer: <span class="font-medium">{{ $job->employer->name }}</span></p>
                    <p>Salary: <span class="font-medium">${{ number_format($job->salary, 2) }}</span></p>
                </div>
                <div class="mt-3">
                    @foreach ($job->tags as $tag)
                        <span
                            class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="mt-6">
            <div class="pagination-links">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>

</x-layout>
