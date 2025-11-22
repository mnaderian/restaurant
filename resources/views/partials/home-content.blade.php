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
            <a href="{{ route('restaurants') }}" class="absolute bg-gradient-to-t from-red-700 to-white/0 text-white font-bold text-center flex items-end place-content-center pb-12 text-2xl shadow h-1/2 hover:from-red-600 hover:text-amber-100 inset-x-0 bottom-0 z-10">نمایش لیست رستوران ها</a>
            <img src="{{ Vite::asset('resources/img/restaurant.jpg') }}" class="size-full object-cover" />
            <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
        </div>
    </main>
</div>