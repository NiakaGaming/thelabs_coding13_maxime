@extends('layouts.user')

@section('title')
    Services
@endsection

@section('content')
    @include('partials.banner')
    @include('pages.user.services.service.index')
    @include('pages.user.services.service-prime.index')
    @include('pages.user.services.blog.index')
    @include('partials.newsletter')
    @include('partials.contact-form')
@endsection
