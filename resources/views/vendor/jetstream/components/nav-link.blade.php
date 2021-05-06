@props(['active'])

@php
$classes = ($active ?? false)
            ? 'items-center mx-3 py-3 mb-2 rounded-md font-semibold px-6 text-gray-600 cursor-pointer bg-gray-100 text-gray-700 focus:outline-none'
            : 'items-center mx-3 py-3 mb-2 rounded-md font-semibold px-6 text-gray-600 cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
