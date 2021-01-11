@extends('layouts.admin')

@section('title')
    Vidéo
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
                    <img src="{{ asset('img/video/' . $video->img) }}" alt="">
                    <h4>{{ $video->link }}</h4>
                </a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <form action="/admin/video/{{ $video->id }}" method="post" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div>
                            <label for="img">Image</label>
                        </div>
                        <div>
                            <input type="file" id="img" name="img">
                        </div>
                        <label for="link">Label</label>
                        <input type="text" class="form-control mb-3" id="link" name="link" value="{{ $video->link }}">
                        <button class="btn btn-success" type="submit">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
