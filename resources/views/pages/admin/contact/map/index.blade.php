@extends('layouts.admin')

@section('title')
    Maps
@endsection

@section('main')
    <div class="map" id="map-area"> <iframe
            src="https://maps.google.com/maps?q={{ $map->place }}map-%3Eadress%7D%7D&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>

    <form action="/admin/map/{{ $map->id }}" method="post">
        @method("PUT")
        @csrf
        <div class="form-group">
            <label for="place">Lieu</label>
            <input type="text" class="form-control mb-3" id="place" name="place" value="{{ $map->place }}">
        </div>
        <button class="btn btn-success" type="submit">Modifie</button>
    </form>
@endsection
