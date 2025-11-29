@extends('layouts.app')

@section('title', 'لیست رستوران ها')

@section('content')
    <main class="container mx-auto px-6 py-20">
        <!-- عنوان صفحه -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <a href="{{ route('restaurants.index') }}"><h2 class="text-4xl font-extrabold mb-5">لیست رستوران ها</h2></a>
            <p class="text-lg text-gray-400">در این بخش می توانید لیست رستوران ها را مشاهده و جستجو نمایید</p>
        </div>

        <!-- جستجو و فیلتر -->
        <div class="mb-12 bg-stone-100 w-full rounded-xl grid place-content-center py-3">
            <x-search />
            <hr class="my-3 border-dashed border border-stone-300" />
            <x-filter />
        </div>

        <!-- تعداد نتایج جسجتو -->
        <div class="mt-5 mx-auto w-60 py-2 px-5 rounded-full bg-emerald-600 flex items-center gap-3 place-content-center shadow-lg">
            <span class="text-white">تعداد نتایج جستجو: </span>
            <span class="font-bold text-amber-200">{{ $resultsCount }}</span>
        </div>

        <!-- لیست رستوران ها -->
        <div class="mt-12 grid grid-cols-4 gap-x-7 gap-y-10">
            @foreach ($restaurants as $restaurant)
                <x-restaurant-item 
                    name="{{ $restaurant->name }}"
                    address="{{ $restaurant->address }}"
                    points="{{ $restaurant->points }}"
                    image="{{ $restaurant->image }}"
                />
            @endforeach
        </div>
    </main>
@endsection
