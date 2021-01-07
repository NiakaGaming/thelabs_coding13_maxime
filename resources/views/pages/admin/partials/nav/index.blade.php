@extends('layouts.admin')

@section('title')
    NavBar
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
                @foreach ($navs as $nav)
                    <a class="list-group-item list-group-item-action" id="{{ $nav->link }}-list" data-toggle="list"
                        href="#{{ $nav->link }}" role="tab" aria-controls="home">{{ $nav->link }}</a>
                @endforeach
                <a class="list-group-item list-group-item-action" id="test-list" data-toggle="list" href="#test" role="tab"
                    aria-controls="home">
                    @if ($logos[0]->img == 'empty')
                        <img class="img-fluid" src="https://tecnovivasoft.com/Design%20Studio/img/big-logo.png" alt="">
                        <img class="img-fluid" style="width: 111px; height: 32px;"
                            src="https://tecnovivasoft.com/Design%20Studio/img/big-logo.png" alt="">
                    @else
                        <img class="img-fluid" src="{{ asset('img/logo/' . $logos[0]->img) }}" alt="">
                        <img src="{{ asset('img/logo/' . $logos[0]->img_resize) }}" alt="">
                    @endif
                </a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($navs as $nav)
                    <div class="tab-pane fade" id="{{ $nav->link }}" role="tabpanel"
                        aria-labelledby="{{ $nav->link }}-list">
                        <form action="/admin/nav/{{ $nav->id }}" method="post">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="link">Changer le titre</label>
                                <input type="text" class="form-control" id="link" name="link"
                                    placeholder="{{ $nav->link }}">
                            </div>
                            <button class="btn btn-success" type="submit">Modifie</button>
                        </form>
                    </div>
                @endforeach
                <div class="tab-pane fade" id="test" role="tabpanel" aria-labelledby="test-list">
                    <form action="/admin/logo/{{ $logos[0]->id }}" method="POST" enctype="multipart/form-data">
                        @method("put")
                        @csrf
                        <div class="form-group">
                            <label for="img">Changer le logo</label>
                        </div>
                        <div class="mb-4">
                            <input type="file" id="img" name="img">
                        </div>
                        <div>
                            <button class="btn btn-success" type="submit">Modfie</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
