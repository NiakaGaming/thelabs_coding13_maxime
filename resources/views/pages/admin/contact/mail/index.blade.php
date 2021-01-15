@extends('layouts.admin')

@section('title')
    Mailbox
@endsection

@section('main')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Sous-titre</th>
                <th scope="col">Texte</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mails as $mail)
                <tr>
                    <th scope="row">{{ $mail->id }}</th>
                    <td>{{ $mail->title }}</td>
                    <td>{{ $mail->subtitle }}</td>
                    <td>{{ $mail->text }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
