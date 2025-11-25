@extends('layouts.app')
@section('content')

    <main>
        @include('partials.hero')
        @include('partials.about')
        @include('partials.services')
        @include('partials.testimonials')
        @include('partials.whatsapp')
    </main>
    @include('partials.footer')
@endsection