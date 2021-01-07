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
    {{-- List menu --}}
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                {{-- CREATE --}}
                <a class="list-group-item list-group-item-action" id="exemple-list" data-toggle="list" href="#exemple"
                    role="tab" aria-controls="home">
                    <div class="service mb-0">
                        <div class="icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="service-text">
                            <h2>Créer</h2>
                            <p>Cliquer ici pour créer un service</p>
                        </div>
                    </div>
                </a>
                {{-- END CREATE --}}
                {{-- EDIT --}}
                @foreach ($services as $service)
                    <a class="list-group-item list-group-item-action" id="{{ $service->name }}-list" data-toggle="list"
                        href="#{{ $service->name }}" role="tab" aria-controls="home">
                        <div class="service mb-0">
                            <div class="icon">
                                <i class="{{ $service->icon->class }}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{ $service->title }}</h2>
                                <p>{{ $service->text }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{-- END EDIT --}}
            </div>
        </div>
        {{-- Items menu --}}
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                {{-- CREATE --}}
                <div class="tab-pane fade" id="exemple" role="tabpanel" aria-labelledby="exemple-list">
                    <form action="/admin/service" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Label</label>
                            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nom">
                            <div>
                                <div>
                                    <label for="icon_id">Icônes</label>
                                </div>
                                <a class="btn btn-primary mb-2" id="icons" href="#"
                                    onclick="$('.btns').slideToggle(function(){$('#icons').html($('.btns').is(':visible')?'Cacher':'Afficher');});">Afficher</a>
                                <div class="btns" style="display:none">
                                    @foreach ($icons as $icon)
                                        <div class="service mb-0 mr-2">
                                            <div>
                                                <input class="ml-2" type="radio" name="icon_id" value="{{ $icon->id }}"
                                                    id="{{ $icon->name }}" value="{{ $icon->class }}">
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
                </div>
                {{-- END CREATE --}}
                {{-- EDIT --}}
                @foreach ($services as $service)
                    <div class="tab-pane fade" id="{{ $service->name }}" role="tabpanel"
                        aria-labelledby="{{ $service->name }}-list">
                        <form action="/admin/service/{{ $service->id }}" method="post">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="name">Label</label>
                                <input type="text" class="form-control mb-3" id="name" name="name"
                                    placeholder="{{ $service->name }}">
                                <div>
                                    <div>
                                        <label for="icon_id">Icônes</label>
                                    </div>
                                    <a class="btn btn-primary mb-2" id="icons{{ $service->id }}" href="#"
                                        onclick="$('.btns{{ $service->id }}').slideToggle(function(){$('#icons{{ $service->id }}').html($('.btns{{ $service->id }}').is(':visible')?'Cacher':'Afficher');});">Afficher</a>
                                    <div class="btns{{ $service->id }}" style="display:none">
                                        @foreach ($icons as $icon)
                                            <div class="service mb-0 mr-2">
                                                <div>
                                                    <input class="ml-2" type="radio" name="icon_id" value="{{ $icon->id }}"
                                                        id="{{ $icon->name . $icon->id . $service->id }}"
                                                        value="{{ $icon->class }}">
                                                    <label for="{{ $icon->name . $icon->id . $service->id }}"
                                                        class="icon mr-0">
                                                        <i class="{{ $icon->class }}"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <label for="title">Titre</label>
                                <input type="text" class="form-control mb-3" id="title" name="title"
                                    placeholder="{{ $service->title }}">
                                <label for="text">Texte</label>
                                <input type="text" class="form-control mb-3" id="text" name="text"
                                    placeholder="{{ $service->text }}">
                            </div>
                            <button class="btn btn-success" type="submit">Modifie</button>
                        </form>
                        <form action="/admin/service/{{ $service->id }}" method="post" class="mt-2">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </div>
                @endforeach
                {{-- END EDIT --}}
            </div>
        </div>
    </div>
@endsection
