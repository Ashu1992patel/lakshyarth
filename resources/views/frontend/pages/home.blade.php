@extends('frontend.layout.master')
@section('title', 'Dashboard')

@section('frontend-content')
    <!-- banner -->
    @include('frontend.layout.banner')
    <!-- end banner -->

    <!-- three_box -->
    @include('frontend.layout.three_box')
    <!-- three_box -->

    <!-- hottest -->
    @include('frontend.layout.hottest')
    <!-- end hottest -->

    <!-- choose  section -->
    @include('frontend.layout.choose')
    <!-- end choose  section -->

    <!-- product  section -->
    @include('frontend.layout.products')
    <!-- end product  section -->

    <!-- about -->
    @include('frontend.layout.about')
    <!-- end about -->
@endsection
