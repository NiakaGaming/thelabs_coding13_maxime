@extends('layouts.admin')

@section('title')
    Titres
@endsection

@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Titre</th>
                <th scope="col" style="width: 33%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($titles as $title)
                <tr>
                    <th scope="row">{{ $title->id }}</th>
                    <td>{{ $title->name }}</td>
                    <td>{{ $tab[$title->id - 1] }}</td>
                    <td>
                        <div class="d-flex mb-2">
                            <a class="btn btn-primary mr-2" id="icons{{ $title->id }}" href="#"
                                onclick="$('.btns{{ $title->id }}').slideToggle(function(){$('#icons{{ $title->id }}').html($('.btns{{ $title->id }}').is(':visible')?'Annuler':'Modifier');});">Modifier</a>
                        </div>
                        <div class="btns{{ $title->id }}" style="display:none">
                            <div class="service mb-0 mr-2">
                                <div>
                                    <form action="/admin/title/{{ $title->id }}" method="post">
                                        @method("PUT")
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Label</label>
                                            <input type="text" class="form-control mb-3" id="name" name="name"
                                                value="{{ $title->name }}">
                                            <label for="title">Titre</label>
                                            <input type="text" class="form-control mb-3" id="title" name="title"
                                                value="{{ $title->title }}">
                                        </div>
                                        <button class="btn btn-success" type="submit">Modifie</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
