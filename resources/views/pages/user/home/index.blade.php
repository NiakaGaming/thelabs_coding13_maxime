@extends('layouts.user')

@section('title')
    Home
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger position-relative">
            {{ $errors->first('msg') }}
        </div>
    @endif
    @include('pages.user.home.banner.index')
    @include('pages.user.home.about.index')
    @include('pages.user.home.testimonial.index')
    @include('pages.user.home.service.index')
    @include('pages.user.home.team.index')
    @include('pages.user.home.promotion.index')
    @include('partials.contact-form')
@endsection
