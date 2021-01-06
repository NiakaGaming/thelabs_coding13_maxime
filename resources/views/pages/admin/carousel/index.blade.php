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
                @foreach ($carousels as $carousel)
                    <a class="list-group-item list-group-item-action" id="{{ $carousel->img }}-list" data-toggle="list"
                        href="#{{ $carousel->name }}" role="tab" aria-controls="home">
                        <img class="img-fluid" src="{{ asset('/img/carousel/' . $carousel->img) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($carousels as $carousel)
                    <div class="tab-pane fade" id="{{ $carousel->name }}" role="tabpanel"
                        aria-labelledby="{{ $carousel->img }}-list">
                        {{-- FORM --}}
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
                        {{-- END FORM --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
