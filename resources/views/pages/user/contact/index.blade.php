@extends('layouts.user')

@section('title')
    Contact
@endsection

@section('content')
    @include('partials.banner')
    @include('pages.user.contact.map.index')
    @include('partials.contact-form')
@endsection
