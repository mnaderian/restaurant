@extends('layouts.app')

@section('content')
<h2 class="mt-24 text-center font-bold text-2xl">رزرو میز در {{ $restaurant->name }}</h2>

@if ($errors->any())
    <div class="alert alert-danger mt-8 mb-5 text-center text-red-600">
        {{ $errors->first() }}
    </div>
@endif

<div class="grid place-content-center p-10">
    <form class="flex gap-y-7 flex-col" method="POST" action="{{ route('reservation.store', ['restaurant' => $restaurant]) }}">
        @csrf

        <div>
            <label>انتخاب میز:</label>
            <select name="restaurant_table_id" class="form-control bg-gray-100 p-2 rounded-xl">
                @foreach ($restaurant->tables as $table)
                    <option value="{{ $table->id }}">{{ $table->title }} (ظرفیت: {{ $table->capacity }} نفر)</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>زمان شروع:</label>
            <input type="datetime-local" name="start_time" class="form-control" value="{{ old('start_time') }}">
        </div>

        <div>
            <label>زمان پایان:</label>
            <input type="datetime-local" name="end_time" class="form-control" value="{{ old('end_time') }}">
        </div>

        <div class="flex items-center mt-5">
            <button class="bg-green-700 text-white py-2 px-5 rounded-full w-32 mx-auto hover:bg-blue-700">رزرو</button>
            <a href="{{ route('restaurants.show', ['restaurant' => $restaurant]) }}" class=" bg-red-700 text-white py-2 px-5 rounded-full w-32 mx-auto hover:bg-white/0 hover:text-red-800 hover:border hover:border-red-700 text-center">لغو</a>
        </div>
    </form>
</div>
@endsection

