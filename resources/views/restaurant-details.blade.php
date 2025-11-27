@extends('layouts.app')

@section('title', $restaurant->name)

@section('content')
    <main class="container mx-auto px-6 py-20">
        <div class="flex gap-x-5 place-content-center mb-15">
            <img class="rounded-2xl shadow-xl w-1/3 max-h-84 object-cover" src="{{ $restaurant->image }}" alt="تصویر رستوران">
            <div class="w-1/3 p-5 flex flex-col gap-6">
                <h3 class="font-black text-3xl mb-5">{{ $restaurant->name }}</h3>
                <div class="bg-stone-100 p-5 rounded-xl flex flex-col gap-3">
                    <div class="flex gap-x-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
                        <h4 class="font-bold">آدرس:‌</h4>
                        <span class="text-gray-700">{{ $restaurant->address }}</span>
                    </div>
                    <div class="flex gap-x-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                        <h4 class="font-bold">تلفن: </h4>
                        <span class="text-gray-700">{{ $restaurant->phone }}</span>
                    </div>
                </div>
                <div class="flex gap-x-5 items-center">
                    <a href="#" class="bg-green-600 transition hover:bg-red-600 text-white rounded-full py-2 px-5 text-center w-34">رزرو میز</a>
                    <a href="{{ route('restaurants') }}" class="flex items-center gap-3 group border-2 border-red-700 rounded-full text-red-800 py-2 px-5 text-sm font-medium hover:border-green-700 hover:text-green-700">
                        <h4>لیست رستوران ها</h4>
                        <svg class="size-4 group-hover:-translate-x-1 transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>
                    </a>
                </div>
            </div>
        </div>

        <x-restaurant-section title="ساعات کاری رستوران">
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </x-slot:icon>
            ساعات کاری رستوران
        </x-restaurant-section>

        <x-restaurant-section title="روزهای تعطیل">
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9v6m-4.5 0V9M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </x-slot:icon>
            روزهای تعطیلی رستوران
        </x-restaurant-section>
        
        <!-- خدمات -->
        <x-restaurant-section title="خدمات رستوران">
            {!! $restaurant->services !!}
        </x-restaurant-section>
        
        <!-- منو -->
        <x-restaurant-section title="منوی رستوران">
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
            </x-slot:icon>
        </x-restaurant-section>
    </main>
@endsection