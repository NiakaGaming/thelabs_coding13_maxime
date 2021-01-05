@extends('layout')

@section('content')
    @include('pages.user.home.banner.index')
    @include('pages.user.home.about.index')
    @include('pages.user.home.testimonial.index')
    @include('pages.user.home.service.index')
    @include('pages.user.home.team.index')
    @include('pages.user.home.promotion.index')
    @include('partials.contact-form')
@endsection
