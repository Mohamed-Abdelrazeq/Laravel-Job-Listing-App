@props(['active' => false])

<li>
    <a class="
        {{ $active ? 'text-blue-500 md:text-blue-700 md:dark:text-blue-500' : 'text-gray-800 dark:text-gray-300' }}
        block py-2 px-3 md:p-0 rounded
        hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white md:dark:hover:bg-transparent
        "
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
</li>
