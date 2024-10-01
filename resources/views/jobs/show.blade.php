<x-layout>

    <x-slot:header>Job Listings Page</x-slot:header>

    <div style="font-family: Arial, sans-serif; margin: 20px;">
        <h2 style="color: #ecf0f1;">Job title: {{ $job->title }}</h2>
        <p style="color: #16a085;">Salary: ${{ number_format($job->salary, 2) }}</p>
    </div>
</x-layout>
