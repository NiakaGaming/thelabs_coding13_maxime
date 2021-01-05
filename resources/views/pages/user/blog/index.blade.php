@extends('layout')

@section('title')
    Blog
@endsection

@section('content')
    @include('partials.banner')
    @include('pages.user.blog.content.index')
    @include('partials.newsletter')
@endsection
