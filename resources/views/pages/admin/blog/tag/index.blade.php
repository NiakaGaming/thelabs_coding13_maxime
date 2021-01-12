@extends('layouts.admin')

@section('title')
    Tags
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
                <a class="list-group-item list-group-item-action" id="create-home-list" data-toggle="list"
                    href="#create-home" role="tab" aria-controls="home">
                    <div class="service mb-0">
                        <div class="icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="service-text">
                            <h2>Créer</h2>
                            <p>Cliquer ici pour créer un article</p>
                        </div>
                    </div>
                </a>
                @foreach ($tags as $tag)
                    <a class="list-group-item list-group-item-action" id="{{ $tag->label }}-home-list" data-toggle="list"
                        href="#{{ $tag->label }}-home" role="tab" aria-controls="home">{{ $tag->label }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="create-home" role="tabpanel" aria-labelledby="create-home-list">
                    <form action="/admin/tag" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="label">Label</label>
                            <input type="text" class="form-control mb-3" id="label" name="label"
                                placeholder="Label exemple">
                        </div>
                        <button class="btn btn-success" type="submit">Ajouter</button>
                    </form>
                </div>
                @foreach ($tags as $tag)
                    <div class="tab-pane fade show" id="{{ $tag->label }}-home" role="tabpanel"
                        aria-labelledby="{{ $tag->label }}-home-list">
                        <form action="/admin/tag/{{ $tag->id }}" method="post">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" class="form-control mb-3" id="label" name="label"
                                    value="{{ $tag->label }}">
                            </div>
                            <button class="btn btn-success" type="submit">Modifier</button>
                        </form>
                        <form action="/admin/tag/{{ $tag->id }}" method="post">
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
