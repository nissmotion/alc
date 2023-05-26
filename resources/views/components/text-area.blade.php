@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'px-2 py-1 border-2 border-gray-300 focus:ring-2 focus:border-gray-400 focus:outline-none focus:ring-gray-400 focus:ring-1 rounded-md shadow-sm']) !!}>{{ $slot }}</textarea>
