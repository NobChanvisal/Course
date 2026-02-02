@props(['active' => false])

@php
    $classes = $active
            ? 'flex items-center px-2.5 py-2 text-white bg-blue-500 rounded-md group'
        : 'flex items-center px-2.5 py-2 text-black rounded-md hover:bg-blue-50 group';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
