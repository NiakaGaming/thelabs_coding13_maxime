@extends('layouts.admin')

@section('title')
    Services
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
                <a class="list-group-item list-group-item-action" id="exemple-list" data-toggle="list" href="#exemple"
                    role="tab" aria-controls="home">
                    <div class="service mb-0">
                        <div class="icon">
                            <i class="flaticon-023-flask"></i>
                        </div>
                        <div class="service-text">
                            <h2>Créer</h2>
                            <p>Cliquer ici pour créer un service</p>
                        </div>
                    </div>
                </a>
                @foreach ($services as $service)
                    <a class="list-group-item list-group-item-action" id="{{ $service->name }}-list" data-toggle="list"
                        href="#{{ $service->name }}" role="tab" aria-controls="home">
                        {{--CONTENT --}}
                        <div class="service mb-0">
                            <div class="icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{ $service->title }}</h2>
                                <p>{{ $service->text }}</p>
                            </div>
                        </div>
                        {{-- END CONTENT --}}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($services as $service)
                    <div class="tab-pane fade" id="{{ $service->name }}" role="tabpanel"
                        aria-labelledby="{{ $service->name }}-list">
                        {{-- FORM --}}
                        <form action="/admin/carousel/{{ $service->id }}" method="post">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control mb-3" id="name" name="name"
                                    placeholder="{{ $service->name }}">
                                <label for="icon">Icône</label>
                                <input type="text" class="form-control mb-3" id="icon" name="icon"
                                    placeholder="{{ $service->icon }}">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control mb-3" id="title" name="title"
                                    placeholder="{{ $service->title }}">
                                <label for="text">Texte</label>
                                <input type="text" class="form-control mb-3" id="text" name="text"
                                    placeholder="{{ $service->text }}">
                            </div>
                            <button class="btn btn-success" type="submit">Modifie</button>
                        </form>
                        {{-- END FORM --}}
                    </div>
                @endforeach
                <div class="tab-pane fade" id="exemple" role="tabpanel" aria-labelledby="exemple-list">
                    {{-- FORM --}}
                    <form action="/admin/carousel" method="post">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nom">
                            <div>
                                <a class="btn btn-primary mb-2" id="icons" href="#"
                                    onclick="$('.btns').slideToggle(function(){$('#icons').html($('.btns').is(':visible')?'Cacher les icôns':'Afficher les icôns');});">Afficher
                                    les icôns</a>
                                <div class="btns" style="display:none">
                                    @foreach ($icons as $icon)
                                        <div class="service mb-0 mr-2">
                                            <div>
                                                <input class="ml-2" type="radio" name="icon" id="{{ $icon->name }}"
                                                    value="{{ $icon->class }}">
                                                <label for="{{ $icon->name }}" class="icon mr-0">
                                                    <i class="{{ $icon->class }}"></i>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <label for="title">Titre</label>
                            <input type="text" class="form-control mb-3" id="title" name="title" placeholder="Titre">
                            <label for="text">Texte</label>
                            <input type="text" class="form-control mb-3" id="text" name="text" placeholder="Texte">
                        </div>
                        <button class="btn btn-success" type="submit">Créer</button>
                    </form>
                    {{-- END FORM --}}
                </div>
            </div>
        </div>
    </div>
@endsection
