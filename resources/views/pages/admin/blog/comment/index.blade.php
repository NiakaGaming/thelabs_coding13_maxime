@extends('layouts.admin')

@section('title')
    Commentaires
@endsection

@section('main')
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                    href="#list-home" role="tab" aria-controls="home">
                    <div class="service mb-0">
                        <div class="icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="service-text">
                            <h2>Ajouter</h2>
                            <p>Cliquer ici pour ajouter un commentaire</p>
                        </div>
                    </div>
                </a>
                @foreach ($comments as $comment)
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                        href="#list-profile" role="tab" aria-controls="profile">

                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <form action="/admin/categorie" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="label">Label</label>
                            <input type="text" class="form-control mb-3" id="label" name="label"
                                placeholder="Label exemple">
                        </div>
                        <button class="btn btn-success" type="submit">Modifier</button>
                    </form>
                </div>
                @foreach ($comments as $comment)
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <form action="/admin/categorie" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" class="form-control mb-3" id="label" name="label"
                                    placeholder="Label exemple">
                            </div>
                            <button class="btn btn-success" type="submit">Modifier</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
