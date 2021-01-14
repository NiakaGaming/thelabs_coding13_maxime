@extends('layouts.admin')

@section('title')
    Bienvenue dans le backoffice
@endsection

@section('main')
    <h5 class="mb-0">Bonjour {{ Auth::user()->last_name }} {{ Auth::user()->first_name }},</h5>
    <p class="mb-0">Vous êtes connecté en tant que "{{ Auth::user()->role->label }}"</p>
@endsection
