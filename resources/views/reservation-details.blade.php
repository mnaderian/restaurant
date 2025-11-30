@extends('layouts.app')

@section('title', 'جزئیات رزرو')

@section('content')
    <main>
        <div class="mt-24 w-2/5 bg-gray-100 rounded-xl shadow-sm mx-auto p-7">
            <h3 class="text-center font-bold text-xl mb-5">جزئیات رزرو شما</h3>
            <div class="border-t border-stone-300 border-dashed p-5">
                <ul class="space-y-3">
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>نام رستوران:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">
                            {{ $restaurant->name }}
                        </span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>میز:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">
                            {{ $reservation->table->title }}
                        </span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>از:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">
                            {{ $reservation->start_time }}
                        </span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>الی:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">
                            {{ $reservation->end_time }}
                        </span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>تعداد نفرات:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">۳ نفر</span>
                    </li>
                </ul>
            </div>
        </div>
        <x-restaurants-list-button title="بازگشت به لیست رستوران‌ها" class="w-58 text-center mx-auto mt-7" />
    </main>
@endsection
