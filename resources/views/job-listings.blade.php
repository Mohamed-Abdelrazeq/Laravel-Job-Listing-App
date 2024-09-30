<x-layout>

    <x-slot:header>Job Listings Page</x-slot:header>

    <ul>
        @foreach ($jobs as $job)
            <li> <a href="/jobs/{{ $job->id }}">{{ $job->title }}</a> </li>
        @endforeach
    </ul>

</x-layout>
