@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-3 py-2 border-l-4 border-gray-400 text-start text-base dosis-extralight focus:outline-none focus:border-gray-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-3 py-2 border-l-4 border-transparent text-start text-base dosis-extralight hover:border-gray-300 focus:outline-none focus:text-black focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
