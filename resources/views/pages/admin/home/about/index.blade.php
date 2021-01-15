@extends('layouts.admin')

@section('title')
    Présentation
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
                    <div class="row">
                        <div class="col-md-6">
                            <p>{{ $about->text_1 }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $about->text_2 }}</p>
                        </div>
                    </div>
                    <div class="text-center mt60">
                        <button class="site-btn">{{ $about->btn }}</button>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action" id="toggle-home-list" data-toggle="list"
                    href="#toggle-home" role="tab" aria-controls="home">
                    <h2 class="text-center">Cacher/afficher le bouton</h2>
                    <div class="text-center">
                        <button class="site-btn">{{ $about->btn }}</button>
                    </div>
                    <div class=" badge badge-{{ $about->hide_show == 1 ? 'success' : 'warning' }}">
                        <h4 class="mb-0">{{ $about->hide_show == 1 ? 'Affiché' : 'Caché' }}</h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <form action="/admin/about/{{ $about->id }}" method="post">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <div class="d-flex flex-column">
                                <label for="text_1">Texte gauche</label>
                                <textarea name="text_1" id="text_1" cols="30" rows="5"
                                    class="form-control mb-3">{{ $about->text_1 }}</textarea>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="text_2">Texte droite</label>
                                <textarea name="text_2" id="text_2" cols="30" rows="5"
                                    class="form-control mb-3">{{ $about->text_2 }}</textarea>
                            </div>
                            <label for="btn">Bouton</label>
                            <input type="text" class="form-control mb-3" id="btn" name="btn" value="{{ $about->btn }}">
                        </div>
                        <button class="btn btn-success" type="submit">Modifie</button>
                    </form>
                </div>
                <div class="tab-pane fade show" id="toggle-home" role="tabpanel" aria-labelledby="toggle-home-list">
                    <form action="/admin/about/hid-show-{{ $about->id }}" method="post">
                        @csrf
                        <button class="btn btn-success"
                            type="submit">{{ $about->hide_show == 1 ? 'Cacher' : 'Afficher' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
