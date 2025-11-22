@extends('layouts.app')

@section('title', 'لیست رستوران ها')

@section('content')
    <main class="container mx-auto px-6 py-20">
        <!-- title -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-4xl font-extrabold mb-5">لیست رستوران ها</h2>
            <p class="text-lg text-gray-400">در این بخش از لیست رستوران ها می توانید انتخاب و عملیات رزرو را انجام دهید</p>
        </div>

        <!-- restaurants -->
        <div class="grid grid-cols-4 gap-x-7 gap-y-10">
            @for ($i = 0; $i < 6; $i++)
                <x-restaurant-item 
                    featured
                    image="https://denuk.nl/wp-content/uploads/2024/01/unnamed-13.jpg"
                    stars=3
                    comments=245
                    name="رستوران نمونه"
                    description="توضیحات کوتاه برای رستوران"
                    tables=25
                    url="/"
                />
            @endfor
        </div>
    </main>
@endsection
