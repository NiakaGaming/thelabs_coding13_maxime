@extends('layouts.admin')

@section('title')
    Témoignages
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
                            <p>Cliquer ici pour ajouter un témoignage</p>
                        </div>
                    </div>
                </a>
                @foreach ($testimonials as $testimonial)
                    <a class="list-group-item list-group-item-action" id="{{ $testimonial->label }}-list" data-toggle="list"
                        href="#{{ $testimonial->label }}" role="tab" aria-controls="home">
                        {{ $testimonial->text }}
                        <div>
                            - {{ $testimonial->team->last_name }} {{ $testimonial->team->first_name }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                {{-- CREATE --}}
                <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="create-list">
                    <form action="/admin/testimonial" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="label">Label</label>
                            <input type="text" class="form-control mb-3" id="label" name="label"
                                placeholder="testimonial_1">
                            <div>
                                <div>
                                    <label for="icon_id">Profiles</label>
                                </div>
                                <a class="btn btn-primary mb-2" id="icons" href="#"
                                    onclick="$('.btns').slideToggle(function(){$('#icons').html($('.btns').is(':visible')?'Cacher':'Afficher');});">Afficher</a>
                                <div class="btns" style="display:none">
                                    <div class="row">
                                        @foreach ($teams as $team)
                                            <div class="col-3">
                                                <div class="card">
                                                    <label for="{{ $team->id }}">
                                                        <img class="img-fluid card-img-top"
                                                            src="{{ asset('/img/team/' . $team->img) }}" alt="">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $team->last_name }}
                                                                {{ $team->first_name }}
                                                            </h5>
                                                            <p class="card-text">{{ $team->function }}</p>
                                                            <input type="radio" name="team_id" id="{{ $team->id }}"
                                                                value="{{ $team->id }}">
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            @if ($loop->iteration == 4)
                                    </div>
                                    <div class="row">
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <label for="text">Témoignage</label>
                            <textarea id="text" name="text" cols="30" rows="10" class="form-control mb-3"
                                placeholder="Je témoigne du talent de ce développeur"></textarea>
                        </div>
                        <button class="btn btn-success" type="submit">Ajouter</button>
                    </form>
                </div>
                {{-- EDIT --}}
                @foreach ($testimonials as $testimonial)
                    <div class="tab-pane fade show" id="{{ $testimonial->label }}" role="tabpanel"
                        aria-labelledby="{{ $testimonial->label }}-list">
                        <form action="/admin/testimonial/{{ $testimonial->id }}" method="post"
                            enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" class="form-control mb-3" id="label" name="label"
                                    value="{{ $testimonial->label }}">
                                <div>
                                    <div>
                                        <label for="icon_id">Profiles</label>
                                    </div>
                                    <a class="btn btn-primary mb-2" id="icons{{ $testimonial->label }}" href="#"
                                        onclick="$('.btns{{ $testimonial->label }}').slideToggle(function(){$('#icons{{ $testimonial->label }}').html($('.btns{{ $testimonial->label }}').is(':visible')?'Cacher':'Afficher');});">Afficher</a>
                                    <div class="btns{{ $testimonial->label }}" style="display:none">
                                        <div class="row">
                                            @foreach ($teams as $team)
                                                <div class="col-3">
                                                    <div class="card">
                                                        <label for="{{ $testimonial->label }} {{ $team->id }}">
                                                            <img class="img-fluid card-img-top"
                                                                src="{{ asset('/img/team/' . $team->img) }}" alt="">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $team->last_name }}
                                                                    {{ $team->first_name }}
                                                                </h5>
                                                                <p class="card-text">{{ $team->function }}</p>
                                                                <input type="radio" name="team_id"
                                                                    id="{{ $testimonial->label }} {{ $team->id }}"
                                                                    value="{{ $team->id }}"
                                                                    {{ $team->id == $testimonial->team_id ? 'checked' : '' }}>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                @if ($loop->iteration == 4)
                                        </div>
                                        <div class="row">
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <label for="text">Témoignage</label>
    <textarea id="text" name="text" cols="30" rows="10" class="form-control mb-3">{{ $testimonial->text }}</textarea>
    </div>
    <button class="btn btn-success" type="submit">Modifier</button>
    </form>
    <form action="/admin/testimonial/{{ $testimonial->id }}" method="post">
        @method("DELETE")
        @csrf
        <button class="btn btn-danger mt-3" type="submit">Supprimer</button>
    </form>
    </div>
    @endforeach
    </div>
@endsection
