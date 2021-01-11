@extends('layouts.admin')

@section('title')
    Contact form
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
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home"
                    role="tab" aria-controls="home">
                    <div class="service mb-0">
                        <div class="service-text">
                            <h2>{{ $contact_form->title }}</h2>
                            <p>{{ $contact_form->text }}</p>
                            <p>{{ $contact_form->info_text }}</p>
                            <p>{!! $contact_form->adress !!}</p>
                            <p>{{ $contact_form->phone }}</p>
                            <p>{{ $contact_form->email }}</p>
                            <button class="site-btn">{{ $contact_form->btn }}</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <form action="/admin/contact-form/{{ $contact_form->id }}" method="post">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $contact_form->title }}">
                            <label for="text">Texte</label>
                            <input type="text" class="form-control" id="text" name="text" value="{{ $contact_form->text }}">
                            <label for="info_title">Tite Informations</label>
                            <input type="text" class="form-control" id="info_title" name="info_title"
                                value="{{ $contact_form->info_title }}">
                            <label for="adress">Address</label>
                            <input type="text" class="form-control" id="adress" name="adress"
                                value="{{ $contact_form->adress }}">
                            <label for="phone">Numéro de téléphone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{ $contact_form->phone }}">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ $contact_form->email }}">
                            <label for="btn">Bouton</label>
                            <input type="text" class="form-control" id="btn" name="btn" value="{{ $contact_form->btn }}">
                        </div>
                        <button class="btn btn-success" type="submit">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
