@props(['active' => false])

<a {{ $attributes->merge([
    'class' => ($active 
        ? 'block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' 
        : 'block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-50 lg:hover:bg-transparent lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 lg:dark:hover:bg-transparent')
]) }}>
    {{ $slot }}
</a>

