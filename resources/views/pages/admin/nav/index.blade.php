@extends('layouts.admin')

@section('title')
    Navs
@endsection

@section('main')
    {{-- <p class="mb-0">{{ $nav->link }}</p> --}}
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                @foreach ($navs as $nav)
                    <a class="list-group-item list-group-item-action" id="{{ $nav->link }}-list" data-toggle="list"
                        href="#{{ $nav->link }}" role="tab" aria-controls="home">{{ $nav->link }}</a>
                @endforeach
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
            </div>
        </div>
    </div>
@endsection
