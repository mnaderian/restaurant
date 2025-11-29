@php
    use App\Enums\FoodType;
@endphp

@props([
    'name' => 'رستوران',
    'address' => '',
    'points' => 1,
    'image' => Vite::asset('resources/img/sample.jpg'),
    'foodType' => FoodType::IRANIAN,
    'tables' => 0,
    'url' => '#',
])

<div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all group">
    <div class="relative overflow-hidden">
        <img src="{{ $image }}" alt="Gourmet Burger" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500" />
        @isset($foodType)
            <div class="absolute top-4 left-4">
                <span class="
                    @if ($foodType == FoodType::FASTFOOD)
                        bg-red-600 text-white
                    @else
                        bg-amber-400 text-amber-900
                    @endif
                    px-3 py-1 rounded-full text-sm font-medium">@if($foodType == FoodType::IRANIAN) غذای @endif {{ $foodType }}</span>
            </div>
        @endisset
    </div>
    <div class="p-6">
        <div class="flex items-center mb-2">
            <div class="flex text-yellow-400">
                @for ($i = 0; $i < $points; $i++)
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                @endfor
            </div>
        </div>
        <h3 class="text-xl font-bold mb-2">{{ $name }}</h3>
        @isset($address)
            <p class="text-gray-600 mb-4 text-sm">{{ $address }}</p>
        @endisset
        <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-green-500">{{ $tables }} میز</span>
            <a href="{{ $url }}"
                class="bg-linear-to-r from-green-500 to-emerald-500 text-white px-4 py-2 rounded-full hover:shadow-lg transition-all">
                رزرو میز
            </a>
        </div>
    </div>
</div>