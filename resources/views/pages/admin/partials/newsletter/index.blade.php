@extends('layouts.admin')

@section('title')
    Liste des inscriptions à la newsletter
@endsection

@section('main')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Date d'inscription</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newsletters as $newsletter)
                <tr>
                    <th scope="row">{{ $newsletter->id }}</th>
                    <td>{{ $newsletter->email }}</td>
                    <td>{{ $newsletter->created_at->format('d') }} / {{ $newsletter->created_at->format('m') }} /
                        {{ $newsletter->created_at->format('y') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
