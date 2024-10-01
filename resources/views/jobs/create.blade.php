<x-layout>

    <x-slot:header>Create Job</x-slot:header>

    <form action="{{ route('jobs.store') }}" method="POST" class="font-sans m-5">
        @csrf
        <div class="mb-4">
            <label for="title" class="text-blue-950">Job Title:</label>
            <input type="text" id="title" name="title" required
                class="w-full p-2 mt-1 bg-blue-100 text-blue-950 border border-gray-200 rounded">
        </div>
        <div class="mb-4">
            <label for="salary" class="text-blue-950">Salary:</label>
            <input type="number" id="salary" name="salary" required
                class="w-full p-2 mt-1 bg-blue-100 text-blue-950 border border-gray-200 rounded">
        </div>
        <div class="mb-4">
            <label for="tags" class="text-blue-950">Tags:</label>
            <div class="flex">
                <input type="text" id="tags" name="tags" required
                    class="w-full p-2 mt-1 bg-blue-100 text-blue-950 border border-gray-200 rounded"
                    placeholder="Enter tags separated by commas">
                <button type="button" id="add-tag"
                    class="bg-blue-600 text-gray-200 py-2 px-4 border-none cursor-pointer rounded ml-2">Add</button>
            </div>
            <div id="tag-list" class="mt-2 flex flex-wrap"></div>
        </div>

        <script>
            document.getElementById('add-tag').addEventListener('click', function() {
                const tagInput = document.getElementById('tags');
                const tagList = document.getElementById('tag-list');
                const tagValue = tagInput.value.trim();

                if (tagValue) {
                    const tagChip = document.createElement('span');
                    tagChip.className = 'bg-blue-200 text-blue-950 py-1 px-3 rounded-full mr-2 mb-2';
                    tagChip.textContent = tagValue;

                    tagList.appendChild(tagChip);
                    tagInput.value = '';
                }
            });
        </script>
        <div class="mb-4">
            <label for="employer" class="text-blue-950">Employer Name:</label>
            <input type="text" id="employer" name="employer" required
                class="w-full p-2 mt-1 bg-blue-100 text-blue-950 border border-gray-200 rounded">
        </div>
        <button type="submit" class="bg-blue-600 text-gray-200 py-2 px-4 border-none cursor-pointer rounded">Add
            Job</button>
    </form>
</x-layout>
