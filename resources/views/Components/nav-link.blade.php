@props(['active' => false, 'type' => 'a'])

@php
    if (!in_array($type, ['a', 'button'])) {
        throw new \InvalidArgumentException("Invalid type '{$type}'. Allowed values are 'a' or 'button'.");
    }

    $baseClasses = 'rounded-md px-3 py-2 text-sm font-medium';
    $activeClasses = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
    $classes = "$baseClasses $activeClasses";
@endphp

@if ($type === 'a')
    <a {{ $attributes->merge(['class' => $classes]) }}
        aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}
        aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</button>
@endif
