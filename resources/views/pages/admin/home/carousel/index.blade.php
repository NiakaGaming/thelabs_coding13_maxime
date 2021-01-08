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
                @if ($carousels[0]->name == 'empty')
                    <a class="list-group-item list-group-item-action" id="exemple_1-list" data-toggle="list"
                        href="#exemple_1" role="tab" aria-controls="home">
                        <img class="img-fluid" src="https://picsum.photos/1920/1274" alt="">
                    </a>
                @elseif($carousels[1]->name == 'empty')
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
                @if ($carousels[0]->name == 'empty')
                    <div class="tab-pane fade" id="exemple_1" role="tabpanel" aria-labelledby="exemple_1-list">
                        <form action="/admin/carousel/1" method="post" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="name">Label</label>
                                <input type="text" class="form-control mb-3" id="name" name="name" placeholder="test">
                                <div>
                                    <label for="img">Image</label>
                                </div>
                                <div>
                                    <input type="file" id="img" name="img">
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Modifie</button>
                        </form>
                    </div>
                @elseif($carousels[1]->name == 'empty')
                    <div class="tab-pane fade" id="exemple_2" role="tabpanel" aria-labelledby="exemple_2-list">
                        <form action="/admin/carousel/2" method="post" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="name">Label</label>
                                <input type="text" class="form-control mb-3" id="name" name="name" placeholder="test">
                                <div>
                                    <label for="img">Image</label>
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
                                    <label for="name">Label</label>
                                    <input type="text" class="form-control mb-3" id="name" name="name"
                                        placeholder="{{ $carousel->name }}">
                                    <div>
                                        <label for="img">Image</label>
                                    </div>
                                    <div>
                                        <input type="file" id="img" name="img">
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Modifie</button>
                            </form>
                            <form action="/admin/carousel/{{ $carousel->id }}" method="post">
                                @method("DELETE")
                                @csrf
                                <button class="btn btn-danger mt-3" type="submit">Supprimer</button>
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
