@extends('layouts.admin')

@section('title')
    Profile
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
                <a class="list-group-item list-group-item-action" id="edit-home-list" data-toggle="list" href="#edit-home"
                    role="tab" aria-controls="home">
                    <h1>Mon profil</h1>
                    <hr>
                    <h2>
                        {{ $user->last_name }} {{ $user->first_name }}
                    </h2>
                    <h4>
                        {{ $user->email }}
                    </h4>
                    <img src="{{ $user->profil->img != null ? asset('img/avatar/' . $user->profil->img) : asset('img/anonyme.png') }}"
                        alt="">
                    <p>
                        <b>{{ $user->profil->function != null ? $user->profil->function : 'Pas de fonction' }}</b>
                    </p>
                    <p>
                        {{ $user->profil->description != null ? $user->profil->description : 'Pas de description' }}
                    </p>
                </a>
                @foreach ($all_users as $one_user)
                    <a class="list-group-item list-group-item-action" id="edit-{{ $one_user->id }}-profile-list"
                        data-toggle="list" href="#edit-{{ $one_user->id }}-profile" role="tab" aria-controls="profile">
                        @if ($loop->first)
                            <h1>Touts les profils</h1>
                            <hr>
                        @endif
                        <h2>
                            {{ $one_user->last_name }} {{ $one_user->first_name }}
                        </h2>
                        <h4>
                            {{ $one_user->email }}
                        </h4>
                        <img src="{{ $one_user->profil->img != null ? asset('img/avatar/' . $one_user->profil->img) : asset('img/anonyme.png') }}"
                            alt="">
                        <p>
                            <b>{{ $one_user->profil->function != null ? $one_user->profil->function : 'Pas de fonction' }}</b>
                        </p>
                        <p>
                            {{ $one_user->profil->description != null ? $one_user->profil->description : 'Pas de description' }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="edit-home" role="tabpanel" aria-labelledby="edit-home-list">
                    <form action="/admin/profil/{{ $user->profil->id }}" method="post" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <div>
                                <label for="last_name">Nom</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    value="{{ $user->last_name }}">
                                <label for="first_name">Prénom</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    value="{{ $user->first_name }}">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="4"
                                    class="form-control">{{ $user->profil->description }}</textarea>
                            </div>
                            <div>
                                <label for="img">Image</label>
                            </div>
                            <div>
                                <input type="file" id="img" name="img">
                            </div>
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            <label for="function">Fonction</label>
                            <input type="text" class="form-control" id="function" name="function"
                                value="{{ $user->profil->function }}">
                        </div>
                        <button class="btn btn-success" type="submit">Modifier</button>
                    </form>
                </div>
                @foreach ($all_users as $one_user)
                    <div class="tab-pane fade" id="edit-{{ $one_user->id }}-profile" role="tabpanel"
                        aria-labelledby="edit-{{ $one_user->id }}-profile-list">
                        <form action="/admin/profil/{{ $one_user->profil->id }}" method="post"
                            enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <div>
                                    <label for="last_name">Nom</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ $one_user->last_name }}">
                                    <label for="first_name">Prénom</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value="{{ $one_user->first_name }}">
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="4"
                                        class="form-control">{{ $one_user->profil->description }}</textarea>
                                </div>
                                <div>
                                    <label for="img">Image</label>
                                </div>
                                <div>
                                    <input type="file" id="img" name="img">
                                </div>
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ $one_user->email }}">
                                <label for="function">Fonction</label>
                                <input type="text" class="form-control" id="function" name="function"
                                    value="{{ $one_user->profil->function }}">
                            </div>
                            <button class="btn btn-success" type="submit">Modifier</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
