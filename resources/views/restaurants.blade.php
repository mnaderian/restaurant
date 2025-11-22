@extends('layouts.app')

@section('title', 'لیست رستوران ها')

@section('content')
    <main class="container mx-auto px-6 py-20">
        <!-- title -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-4xl font-extrabold mb-5">لیست رستوران ها</h2>
            <p class="text-lg text-gray-400">در این بخش می توانید لیست رستوران ها را مشاهده و جستجو نمایید</p>
        </div>

        <!-- restaurants -->
        <div class="grid grid-cols-4 gap-x-7 gap-y-10">
            {{-- لیست رستوران ها --}}
        </div>
    </main>
@endsection
