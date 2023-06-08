@extends('themes.theme1.common.master')
@section('title', 'Home')
@section('content')
    <!-- Carousel Start -->
    @include('themes.theme1.common.carousel')
    <!-- Carousel End -->


    <!-- Banner Start -->
    @include('themes.theme1.common.banner')
    <!-- Banner Start -->


    <!-- About Start -->
    @include('themes.theme1.common.about')
    <!-- About End -->


    <!-- Facts Start -->
    @include('themes.theme1.common.facts')
    <!-- Facts End -->


    <!-- Services Start -->
    @include('themes.theme1.common.services')

    <!-- Services End -->


    <!-- Features Start -->
    @include('themes.theme1.common.features')
    <!-- Features Start -->


    <!-- Products Start -->
    @include('themes.theme1.common.products')
    <!-- Products End -->


    <!-- Testimonial Start -->
    @include('themes.theme1.common.testimonial')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @include('themes.theme1.common.team')
    <!-- Team End -->


    <!-- Blog Start -->
    @include('themes.theme1.common.blog')
    <!-- Blog End -->
@endsection
