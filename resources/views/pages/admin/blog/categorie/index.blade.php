@extends('layouts.admin')

@section('title')
    Catégories
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
                            <h2>Ajouter</h2>
                            <p>Cliquer ici pour ajouter une catégorie</p>
                        </div>
                    </div>
                </a>
                @foreach ($categories as $categorie)
                    <a class="list-group-item list-group-item-action" id="edit-{{ $categorie->id }}-profile-list"
                        data-toggle="list" href="#edit-{{ $categorie->id }}-profile" role="tab"
                        aria-controls="profile">{{ $categorie->label }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="create-home" role="tabpanel" aria-labelledby="create-home-list">
                    <form action="/admin/categorie" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="label">Label</label>
                            <input type="text" class="form-control mb-3" id="label" name="label"
                                placeholder="Label exemple">
                        </div>
                        <button class="btn btn-success" type="submit">Ajouter</button>
                    </form>
                </div>
                @foreach ($categories as $categorie)
                    <div class="tab-pane fade" id="edit-{{ $categorie->id }}-profile" role="tabpanel"
                        aria-labelledby="edit-{{ $categorie->id }}-profile-list">
                        <form action="/admin/categorie/{{ $categorie->id }}" method="POST">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" class="form-control mb-3" id="label" name="label"
                                    value="{{ $categorie->label }}">
                            </div>
                            <button class="btn btn-success" type="submit">Modifier</button>
                        </form>
                        <form action="/admin/categorie/{{ $categorie->id }}" method="post">
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
