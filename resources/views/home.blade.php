@extends('layouts.app')

@section('content')
    <main class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        @include('partials.home-header')
        @include('partials.home-content')
    </main>
@endsection