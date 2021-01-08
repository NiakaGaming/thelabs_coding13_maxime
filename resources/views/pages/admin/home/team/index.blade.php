@extends('layouts.admin')

@section('title')
    Équipe
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
        {{-- LEFT SIDE --}}
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                {{-- CREATE --}}
                <a class="list-group-item list-group-item-action" id="create-list" data-toggle="list" href="#create"
                    role="tab" aria-controls="home">
                    <div class="service mb-0">
                        <div class="icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="service-text">
                            <h2>Ajouter</h2>
                            <p>Cliquer ici pour ajouter une image</p>
                        </div>
                    </div>
                </a>
                {{-- SELECT THE ONE --}}
                <a class="list-group-item list-group-item-action" id="select-list" data-toggle="list" href="#select"
                    role="tab" aria-controls="home">
                    <div class="service mb-0">
                        <div class="icon">
                            <i class="fas fa-mouse-pointer"></i>
                        </div>
                        <div class="service-text">
                            <h2>Selectionner</h2>
                            <p>Choisir celui qui sera au centre</p>
                        </div>
                    </div>
                </a>
                {{-- EDIT --}}
                @foreach ($teams as $team)
                    <a class="list-group-item list-group-item-action" id="{{ $team->img }}-list" data-toggle="list"
                        href="#{{ $team->last_name }}-{{ $team->id }}" role="tab" aria-controls="home">
                        <img class="img-fluid" src="{{ asset('/img/team/' . $team->img) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
        {{-- RIGHT SIDE --}}
        <div class="col-8">
            {{-- CREATE --}}
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="create-list">
                    <form action="/admin/team" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="first_name">Nom</label>
                            <input type="text" class="form-control mb-3" id="first_name" name="first_name"
                                placeholder="Lecocq">
                            <label for="last_name">Prénom</label>
                            <input type="text" class="form-control mb-3" id="last_name" name="last_name" placeholder="Jean">
                            <label for="function">Fonction</label>
                            <input type="text" class="form-control mb-3" id="function" name="function"
                                placeholder="Web Developer">
                            <div>
                                <label for="img">Image</label>
                            </div>
                            <div>
                                <input type="file" id="img" name="img">
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Créer</button>
                    </form>
                </div>
                {{-- SELECT --}}
                <div class="tab-pane fade" id="select" role="tabpanel" aria-labelledby="select-list">
                    <form action="/admin/choice/1" method="post">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for=""></label>
                            <div class="row">
                                @foreach ($teams as $team)
                                    <div class="col-3">
                                        <div class="card">
                                            <label for="{{ $team->id }}">
                                                <img class="img-fluid card-img-top"
                                                    src="{{ asset('/img/team/' . $team->img) }}" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $team->last_name }} {{ $team->first_name }}
                                                    </h5>
                                                    <p class="card-text">{{ $team->function }}</p>
                                                    <input type="radio" name="team_id" id="{{ $team->id }}"
                                                        value="{{ $team->id }}"
                                                        {{ $team->id == $choice->team_id ? 'checked' : '' }}>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    @if ($loop->iteration == 4)
                            </div>
                            <div class="row">
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Selectionner</button>
                    </form>
                </div>
                {{-- EDIT --}}
                @foreach ($teams as $team)
                    <div class="tab-pane fade" id="{{ $team->last_name }}-{{ $team->id }}" role="tabpanel"
                        aria-labelledby="{{ $team->img }}-list">
                        <form action="/admin/team/{{ $team->id }}" method="post" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="first_name">Nom</label>
                                <input type="text" class="form-control mb-3" id="first_name" name="first_name"
                                    value="{{ $team->first_name }}">
                                <label for="last_name">Prénom</label>
                                <input type="text" class="form-control mb-3" id="last_name" name="last_name"
                                    value="{{ $team->last_name }}">
                                <label for="function">Fonction</label>
                                <input type="text" class="form-control mb-3" id="function" name="function"
                                    value="{{ $team->function }}">
                                <div>
                                    <label for="img">Image</label>
                                </div>
                                <div>
                                    <input type="file" id="img" name="img">
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Modifie</button>
                        </form>
                        <form action="/admin/team/{{ $team->id }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-danger mt-3" type="submit">Supprimer</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
