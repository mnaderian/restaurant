@props([
    'link' => '#',
    'text' => '',
])

<a href="{{ $link }}" {{ $attributes->merge(['class' => 'inline-block hover:bg-amber-500 transition px-5 py-1.5 bg-sky-600 rounded-full shadow text-white text-sm leading-normal']) }}>
    {{ $text }}
</a>