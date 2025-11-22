<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            {{ __('Dashboard') }}
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                            {{ __('Log in') }}
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full lg:grow">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-es-lg rounded-ee-lg lg:rounded-ss-lg lg:rounded-ee-none">
                    <h1 class="mb-1 font-black text-2xl">سیستم مدیریت رستوران</h1>
                    <p class="mb-7 text-[#706f6c] dark:text-[#A1A09A]">سیستمی برای مدیریت رستوران و رزرو آنلاین</p>
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <x-home.item>جهت ثبت نام از این بخش <x-home.item-link route="{{ route('register') }}" text="اقدام" /> کنید.</x-home.item>
                        <x-home.item>مناسب برای مدیران رستوران ها</x-home.item>
                        <x-home.item>براحتی و بصورت آنلاین رزرو کنید</x-home.item>
                        <x-home.item>جستجوی رستوران ها با فیلتر دلخواه</x-home.item>
                        <x-home.item>به رستوران محبوب خود امتیاز دهید.</x-home.item>
                    </ul>
                    <ul class="flex gap-3 text-sm leading-normal">
                        <li><x-home.button link="{{ route('login') }}" text="ورود کاربران" /></li>
                        <li><x-home.button text="ورود مدیران" class="!bg-black !hover:bg-stone-500" /></li>
                    </ul>
                </div>
                <div class="relative bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ms-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg! aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                    <a href="#" class="absolute bg-gradient-to-t from-red-700 to-white/0 text-white font-bold text-center flex items-end place-content-center pb-12 text-2xl shadow h-1/2 hover:from-red-600 hover:text-amber-100 inset-x-0 bottom-0 z-10">نمایش لیست رستوران ها</a>
                    <img src="{{ Vite::asset('resources/img/restaurant.jpg') }}" class="size-full object-cover" />
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>
    </body>
</html>
