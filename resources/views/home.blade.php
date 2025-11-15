@extends('layouts.app')
@section('content')

    <main>
        @include('partials.hero')
        @include('partials.about')
        @include('partials.services')
        @include('partials.testimonials')
    </main>
    @include('partials.footer')
@endsection