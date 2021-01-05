@extends('layout')

@section('title')
    Contact
@endsection

@section('content')
    @include('partials.banner')
    @include('pages.user.contact.map.index')
    @include('partials.newsletter')
@endsection
