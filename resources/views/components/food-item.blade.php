<li class="space-x-3">
    <span class="font-bold">{{ $food->name }}:</span>
    <span>{{ $food->price }} تومان</span>
    @isset($food->description)
        <span class="text-xs bg-blue-100 px-3 py-2 rounded-full">{{ $food->description }}</span>
    @endisset
</li>