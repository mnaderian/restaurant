@extends('layouts.app')

@section('title', 'جزئیات رزرو')

@section('content')
    <main>
        <div class="mt-24 w-full lg:w-2/5 bg-gray-100 rounded-xl shadow-sm mx-auto p-3 lg:p-7">
            <h3 class="text-center font-bold text-xl mb-5">جزئیات رزرو شما</h3>
            <div class="border-t border-stone-300 border-dashed p-5">
                <ul class="space-y-3">
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>نام رستوران:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">
                            {{ $restaurant?->name }}
                        </span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>میز:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">
                            {{ $reservation?->restaurantTable?->title }}
                        </span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>از:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">
                            {{ $reservation?->start_time }}
                        </span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>الی:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">
                            {{ $reservation?->end_time }}
                        </span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>تعداد نفرات:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">{{ $reservation->guests_count }}</span>
                    </li>
                    <li class="flex items-center justify-between bg-white py-1 px-1 pr-5 rounded-full">
                        <span>وضعیت:</span>
                        <span class="font-light bg-stone-200 rounded-full py-1 px-3 w-2/3 text-center">{{ $reservation->reservation_status->label() }}</span>
                    </li>
                </ul>
            </div>

            <div class="text-center text-sm bg-red-500 p-3 rounded-2xl text-white mx-5 mt-5 flex flex-col space-y-2">
                <b>توجه: </b>
                <p>پس از تأیید شدن رزرو می‌توانید پرداخت را از پنل کاربری خود انجام دهید.</p>
                <a href="{{ route('user-panel') }}" class="bg-amber-300 text-black p-2 rounded-full hover:bg-amber-200 w-24 mx-auto mt-2">پنل کاربری</a>
            </div>
        </div>
        <x-restaurants-list-button title="بازگشت به لیست رستوران‌ها" class="w-58 text-center mx-auto mt-7 mb-10" />
    </main>
@endsection
