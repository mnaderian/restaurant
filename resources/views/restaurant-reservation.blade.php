@extends('layouts.app')

@section('content')
<h2 class="mt-24 text-center font-bold text-2xl">رزرو میز در {{ $restaurant->name }}</h2>

@if ($errors->any())
    <div class="alert alert-danger mt-8 mb-5">
        {{ $errors->first() }}
    </div>
@endif

<div class="grid place-content-center p-10">
    <form class="flex gap-y-7 flex-col" method="POST" action="{{ route('reservation.store', ['restaurant' => $restaurant]) }}">
        @csrf

        <div>
            <label>انتخاب میز:</label>
            <select name="restaurant_table_id" class="form-control bg-gray-100 p-2 rounded-xl">
                {{-- @foreach ($restaurant->tables as $table)
                    <option value="{{ $table->id }}">{{ $table->name }} (ظرفیت {{ $table->capacity }})</option>
                @endforeach --}}
                <option value="1">میز شماره ۱ (ظرفیت: ۳ نفر)</option>
                <option value="2">میز شماره ۲ (ظرفیت: ۵ نفر)</option>
                <option value="3">میز شماره ۳ (ظرفیت: ۳ نفر)</option>
                <option value="4">میز شماره ۴ (ظرفیت: ۴ نفر)</option>
                <option value="5">میز شماره ۵ (ظرفیت: ۲ نفر)</option>
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

        <button class="mt-5 bg-green-700 text-white py-2 px-5 rounded-full w-32 mx-auto hover:bg-blue-700">رزرو</button>
    </form>
</div>
@endsection

