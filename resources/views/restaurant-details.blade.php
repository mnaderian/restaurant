@extends('layouts.app')

@section('title', $restaurant->name)

@section('content')
    <main class="container mx-auto px-2 sm:px-6 py-20">
        <div class="flex flex-col lg:flex-row gap-x-5 place-content-center mb-15">
            <div>
                <img class="rounded-2xl shadow-xl w-full max-h-84 object-cover" src="{{ $restaurant->image }}" alt="تصویر رستوران">
            </div>
            <div class="xl:w-1/3 p-5 flex flex-col gap-6">
                <h3 class="font-black text-3xl mb-5 mx-auto">{{ $restaurant->name }}</h3>
                <div class="bg-stone-100 p-5 rounded-xl flex flex-col gap-3">
                    <div class="flex gap-x-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" /></svg>
                        <h4 class="font-bold text-sm sm:text-base">نوع غذا: </h4>
                        <span class="text-gray-700 text-sm sm:text-base">{{ $restaurant->food_type }}</span>
                    </div>
                    <div class="flex gap-x-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
                        <h4 class="font-bold text-sm sm:text-base">آدرس:‌</h4>
                        <span class="text-gray-700 text-sm sm:text-base">{{ $restaurant->address }}</span>
                    </div>
                    <div class="flex gap-x-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                        <h4 class="font-bold text-sm sm:text-base">تلفن: </h4>
                        <span class="text-gray-700 text-sm sm:text-base">{{ $restaurant->phone }}</span>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-5 items-center">
                    <a href="{{ route('reservation.create', ['restaurant' => $restaurant]) }}" class="bg-green-600 transition hover:bg-red-600 text-white rounded-full py-2 px-5 text-center w-34">رزرو میز</a>
                    <x-restaurants-list-button />
                </div>
            </div>
        </div>

        <x-restaurant-section title="ساعات کاری رستوران و تعطیلی‌ها">
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </x-slot:icon>
            @if ($restaurant->workingHours->count() > 0)
                <ul class="flex flex-col gap-y-3">
                    @foreach ($restaurant->workingHours()->get() as $workingHour)
                        <li class="flex items-center gap-x-5">
                            <span class="font-bold w-12 ml-2">{{ $workingHour->day }}:</span>
                            <span class="w-24 
                            @if ($workingHour->is_closed)
                                bg-red-500
                            @else
                                bg-emerald-600
                            @endif
                            text-center rounded-full text-white text-sm font-semibold py-1.5 px-3">
                                @if ($workingHour->is_closed)
                                    تعطیل
                                @else
                                    غیرتعطیل
                                @endif
                            </span>
                            @isset($workingHour->open_time)
                                <span class="border bg-stone-50 rounded-full py-1.5 px-3 text-center text-sm font-medium">
                                    {{ $workingHour->open_time }}
                                </span>
                            @endisset

                            @if (!$workingHour->is_closed) <span class="text-gray-500">الی</span> @endif

                            @isset($workingHour->close_time)
                                <span class="border bg-stone-50 rounded-full py-1.5 px-3 text-center text-sm font-medium">
                                    {{ $workingHour->close_time }}
                                </span>
                            @endisset
                        </li>
                    @endforeach
                </ul>
            @else
                <p>هیچ ساعت کاری و یا تعطیلی برای رستوران ثبت نگردیده است!</p>    
            @endif
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
            @if ($restaurant->menuItems->count() > 0)
                
            @else
                <p>هنوز هیچ منویی برای این رستوران ثبت نشده است.</p>
            @endif
        </x-restaurant-section>
    </main>
@endsection
