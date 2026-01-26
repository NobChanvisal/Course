@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-indigo-600 transition-colors'
            : 'inline-flex items-center px-1 pt-1 text-gray-600 hover:text-indigo-600 transition-colors';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
