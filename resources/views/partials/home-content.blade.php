<div class="flex items-center justify-center w-full lg:grow mt-10 lg:mt-0">
    <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
        <div class="text-[13px] leading-5 flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-es-lg rounded-ee-lg lg:rounded-ss-lg lg:rounded-ee-none">
            <h1 class="mb-5 font-black text-lg">سیستم رزرواسیون آنلاین برای رستوران ها</h1>
            <p class="mb-7 text-stone-400 p-3 border-2 border-stone-300 border-dashed rounded-lg leading-loose">پلتفرمی که به کاربران این امکان را می دهد که به صورت آنلاین برای میز در رستوران ها رزرو انجام دهند.</p>
            <ul class="flex flex-col mb-4 lg:mb-6">
                <x-home.item>جهت ثبت نام از این بخش <x-home.item-link route="{{ route('register') }}" text="اقدام" /> کنید.</x-home.item>
                <x-home.item>مناسب برای مدیران رستوران ها</x-home.item>
                <x-home.item>براحتی و بصورت آنلاین رزرو کنید</x-home.item>
                <x-home.item>جستجوی رستوران ها با فیلتر دلخواه</x-home.item>
                <x-home.item>به رستوران محبوب خود امتیاز دهید.</x-home.item>
            </ul>
            <ul class="flex gap-3 text-sm leading-normal">
                <li><x-home.button link="{{ route('login') }}" text="ورود کاربران" /></li>
                <li><x-home.button link="/manager" text="ورود مدیران رستوران‌" class="bg-black! hover:bg-stone-700!" /></li>
            </ul>
        </div>
        <div class="relative bg-[#fff2f2] dark:bg-[#1D0002] lg:-ms-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg! aspect-335/376 lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
            <a href="{{ route('restaurants.index') }}" class="absolute bg-linear-to-t from-red-700 to-white/0 text-white font-medium text-center flex items-end place-content-center pb-12 text-xl shadow h-1/2 hover:from-red-600 inset-x-0 bottom-0 z-10">
                <span class="bg-white/35 rounded-full px-6 py-2 shadow-lg">نمایش لیست رستوران ها</span>
            </a>
            <img src="{{ Vite::asset('resources/img/restaurant.jpg') }}" class="size-full object-cover" />
            <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
        </div>
    </main>
</div>
