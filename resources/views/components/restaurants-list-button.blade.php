@props([
    'title' => 'لیست رستوران ها',
    'url' => route('restaurants.index'),
])

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'flex items-center gap-3 group border-2 border-red-700 rounded-full text-red-800 py-2 px-5 text-sm font-medium hover:border-green-700 hover:text-green-700']) }}>
    <h4>{{ $title }}</h4>
    <svg class="size-4 group-hover:-translate-x-1 transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>
</a>
