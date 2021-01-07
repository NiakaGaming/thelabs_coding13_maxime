@extends('layouts.admin')

@section('title')
    Carousel Images
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
                @if ($carousels->isEmpty())
                    <a class="list-group-item list-group-item-action" id="exemple_1-list" data-toggle="list"
                        href="#exemple_1" role="tab" aria-controls="home">
                        <img class="img-fluid" src="https://picsum.photos/1920/1274" alt="">
                    </a>
                    <a class="list-group-item list-group-item-action" id="exemple_2-list" data-toggle="list"
                        href="#exemple_2" role="tab" aria-controls="home">
                        <img class="img-fluid" src="https://picsum.photos/1920/1278" alt="">
                    </a>
                @else
                    @foreach ($carousels as $carousel)
                        <a class="list-group-item list-group-item-action" id="{{ $carousel->img }}-list" data-toggle="list"
                            href="#{{ $carousel->name }}" role="tab" aria-controls="home">
                            <img class="img-fluid" src="{{ asset('/img/carousel/' . $carousel->img) }}" alt="">
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                @if ($carousels->isEmpty())
                    <div class="tab-pane fade" id="exemple_1" role="tabpanel" aria-labelledby="exemple_1-list">
                        <form action="/admin/carousel/test" method="post" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="name">Choisir un nom</label>
                                <input type="text" class="form-control mb-3" id="name" name="name" placeholder="test">
                                <div>
                                    <label for="img">Choisir une image</label>
                                </div>
                                <div>
                                    <input type="file" id="img" name="img">
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Modifie</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="exemple_2" role="tabpanel" aria-labelledby="exemple_2-list">
                        <form action="/admin/carousel/test" method="post" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="name">Choisir un nom</label>
                                <input type="text" class="form-control mb-3" id="name" name="name" placeholder="test">
                                <div>
                                    <label for="img">Choisir une image</label>
                                </div>
                                <div>
                                    <input type="file" id="img" name="img">
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Modifie</button>
                        </form>
                    </div>
                @else
                    @foreach ($carousels as $carousel)
                        <div class="tab-pane fade" id="{{ $carousel->name }}" role="tabpanel"
                            aria-labelledby="{{ $carousel->img }}-list">
                            <form action="/admin/carousel/{{ $carousel->id }}" method="post" enctype="multipart/form-data">
                                @method("PUT")
                                @csrf
                                <div class="form-group">
                                    <label for="name">Choisir un nom</label>
                                    <input type="text" class="form-control mb-3" id="name" name="name"
                                        placeholder="{{ $carousel->name }}">
                                    <div>
                                        <label for="img">Choisir une image</label>
                                    </div>
                                    <div>
                                        <input type="file" id="img" name="img">
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Modifie</button>
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
