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
                {{-- EDIT --}}
                @foreach ($teams as $team)
                    <a class="list-group-item list-group-item-action" id="{{ $team->img }}-list" data-toggle="list"
                        href="#{{ $team->last_name }}" role="tab" aria-controls="home">
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
                    <form action="/admin/carousel" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Label</label>
                            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="mon_image">
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
                {{-- EDIT --}}
                @foreach ($teams as $team)
                    <div class="tab-pane fade" id="{{ $team->last_name }}" role="tabpanel"
                        aria-labelledby="{{ $team->img }}-list">
                        <form action="/admin/team/{{ $team->id }}" method="post" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="name">Label</label>
                                <input type="text" class="form-control mb-3" id="name" name="name"
                                    placeholder="{{ $team->first_name }}">
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
