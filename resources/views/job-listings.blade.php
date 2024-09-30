<x-layout>

    <x-slot:header>Job Listings Page</x-slot:header>

    <ul class="container mx-auto">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}" class="block">
                <li class="mb-5 p-5 border border-gray-300 rounded hover:bg-gray-100 transition duration-300">
                    <span class="font-bold text-green-600">{{ $job->title }}</span>
                    <p class="my-2 text-green-700">Salary: ${{ number_format($job->salary, 2) }}</p>
                </li>
            </a>
        @endforeach
    </ul>

</x-layout>
