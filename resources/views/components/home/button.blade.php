@props([
    'link' => '#',
    'target' => '_blank',
    'text' => '',
])

<a  href="{{ $link }}" 
    target="{{ $target }}" 
    {{ $attributes->merge(['class' => 'inline-block hover:bg-amber-500 transition px-5 py-1.5 bg-sky-600 rounded-sm shadow text-white text-sm leading-normal']) }}>
    {{ $text }}
</a>