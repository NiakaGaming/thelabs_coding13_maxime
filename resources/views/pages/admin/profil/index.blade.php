@extends('layouts.admin')

@section('title')
    Profile
@endsection

@section('main')
    <h2>
        {{ $user->last_name }} {{ $user->first_name }}
    </h2>
    <h4>
        {{ $user->email }}
    </h4>
    <img src="{{ asset('img/avatar/' . $profil->img) }}" alt="">
    <p>
        <b>{{ $profil->function }}</b>
    </p>
    <p>
        {{ $profil->description }}
    </p>
@endsection
