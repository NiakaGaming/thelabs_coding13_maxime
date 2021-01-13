@extends('layouts.user')

@section('title')
    Blog
@endsection

@section('content')
    @include('partials.banner')
    @include('pages.user.blog.content.show')
    @include('partials.newsletter')
@endsection
