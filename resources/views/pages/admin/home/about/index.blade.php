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
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <form action="/admin/about/{{ $about->id }}" method="post">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="text_1">Texte gauche</label>
                            <input type="text" class="form-control mb-3" id="text_1" name="text_1"
                                value="{{ $about->text_1 }}">
                            <label for="text_2">Texte droite</label>
                            <input type="text" class="form-control mb-3" id="text_2" name="text_2"
                                value="{{ $about->text_2 }}">
                            <label for="btn">Bouton</label>
                            <input type="text" class="form-control mb-3" id="btn" name="btn" value="{{ $about->btn }}">
                        </div>
                        <button class="btn btn-success" type="submit">Modifie</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
