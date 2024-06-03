@extends('components.home.mainLayout')
@section('content')
    @include('components.layout.Home.header')

    <div id="page_wrapper" class="wrapper">
        @include('components.layout.Home.about-personal')
        @include('components.layout.Home.services')
        @include('components.layout.Home.portfolio')
        @include('components.layout.Home.testimonials')
        @include('components.layout.Home.stories')
    </div>
    @include('components.layout.footer')
@endsection
