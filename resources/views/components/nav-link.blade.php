@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 dosis-extralight leading-5 border-b-2 border-b-transparent hover:border-b-gray-500 focus:border-b-gray-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-3 dosis-extralight leading-5 border-b-2 border-b-transparent hover:border-b-gray-500 focus:border-b-gray-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
