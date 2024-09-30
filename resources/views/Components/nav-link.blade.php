@props(['active' => false])

<li>
    <a class="
        {{ $active ? 'text-white bg-green-700 md:bg-transparent md:text-green-700 md:dark:text-green-500' : 'text-gray-900  dark:text-white' }}
        block py-2 px-3 md:p-0 rounded
        hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent
        "
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
</li>
