<header class="w-full text-sm mb-6 not-has-[nav]:hidden shadow-lg fixed z-30 bg-red-500 text-white py-1 px-5 flex justify-between">
    <a href="{{ route('home') }}" class="flex items-center gap-x-2 font-semibold text-lg hover:text-amber-200">
        <img class="size-8" src="{{ Vite::asset('resources/svg/logo-white.svg') }}" />
        <h3>سیستم مدیریت رستوران</h3>
    </a>
    <nav class="flex items-center justify-end gap-4">
        <a href="{{ route('home') }}" class="hover:text-amber-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
        </a>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1 text-sm leading-normal bg-stone-50/35 rounded-full hover:bg-stone-100/50">
                    {{ __('dashboard') }}
                </a>
            @else
                <a href="{{ route('login') }}" class="inline-block px-5 py-1 text-sm leading-normal bg-stone-50/35 rounded-full hover:bg-stone-100/50">
                    {{ __('log in') }}
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="inline-block px-5 py-1 text-sm leading-normal bg-stone-50/35 rounded-full hover:bg-stone-100/50">{{ __('register') }}</a>
                @endif
            @endauth
        @endif
    </nav>
</header>