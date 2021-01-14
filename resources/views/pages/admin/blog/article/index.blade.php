@extends('layouts.admin')

@section('title')
    Articles
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
                <a class="list-group-item list-group-item-action" id="create-home-list" data-toggle="list"
                    href="#create-home" role="tab" aria-controls="home">
                    <div class="service mb-0">
                        <div class="icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="service-text">
                            <h2>Créer</h2>
                            <p>Cliquer ici pour créer un article</p>
                        </div>
                    </div>
                </a>
                @foreach ($articles as $article)
                    <a class="list-group-item list-group-item-action" id="edit-{{ $article->id }}-home-list"
                        data-toggle="list" href="#edit-{{ $article->id }}-home" role="tab" aria-controls="home">
                        <img class="card-img-top" src="{{ asset('img/article/' . $article->img) }}" alt="Card image cap">
                        <h2>{{ $article->title }}</h2>
                        <p>{{ $article->text }}</p>
                        <h4>Catégories</h4>
                        <ul>
                            @forelse ($article->categorie as $item)
                                @if (!$loop->last)
                                    {{ $item->label }},
                                @else
                                    {{ $item->label }}
                                @endif
                            @empty Pas de catégorie
                @endforelse
                </ul>
                <h4>Tags</h4>
                <ul>
                    @forelse ($article->tag as $item)
                        @if (!$loop->last)
                            {{ $item->label }},
                        @else
                            {{ $item->label }}
                        @endif
                    @empty Pas de tag
                    @endforelse
                </ul>
                <p>Rédigé par : {{ $article->user->last_name }} {{ $article->user->first_name }}</p>
                </a>
                @endforeach
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="create-home" role="tabpanel" aria-labelledby="create-home-list">
                    <form action="/admin/article" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control mb-3" id="title" name="title" placeholder="titre">
                            <label for="text">Texte</label>
                            <textarea name="text" id="text" cols="30" class="form-control mb-3" rows="5"
                                placeholder="texte"></textarea>
                            <label for="img">Image</label>
                            <div class="mb-2">
                                <input type="file" name="img" id="img">
                            </div>
                            <label for="categorie">Catégories</label>
                            <select multiple="" class="form-control" name="categorie[]" id="categorie">
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">
                                        {{ $categorie->label }}
                                    </option>
                                @endforeach
                            </select>
                            <label class="mt-2" for="tag">Tags</label>
                            <select multiple="" class="form-control" name="tag[]" id="tag">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success" type="submit">Ajouter</button>
                    </form>
                </div>
                @foreach ($articles as $article)
                    <div class="tab-pane fade show" id="edit-{{ $article->id }}-home" role="tabpanel"
                        aria-labelledby="edit-{{ $article->id }}-home-list">
                        <form action="/admin/article/{{ $article->id }}" method="POST" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control mb-3" id="title" name="title"
                                    value="{{ $article->title }}">
                                <label for="text">Texte</label>
                                <textarea name="text" id="text" cols="30" class="form-control mb-3"
                                    rows="5">{{ $article->text }}</textarea>
                                <label for="img">Image</label>
                                <div class="mb-2">
                                    <input type="file" name="img" id="img">
                                </div>
                                <label for="categorie">Catégories</label>
                                <select multiple class="form-control" name="categorie[]" id="categorie">
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}" @foreach ($article->categorie as $categorie_article)
                                            {{ $categorie->label == $categorie_article->label ? 'selected' : '' }}
                                    @endforeach>
                                    {{ $categorie->label }}
                                    </option>
                @endforeach
                </select>
                <label class="mt-2" for="tag">Tags</label>
                <select multiple class="form-control" name="tag[]" id="tag">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" @foreach ($article->tag as $tag_article)
                            {{ $tag->label == $tag_article->label ? 'selected' : '' }}
                    @endforeach>
                    {{ $tag->label }}
                    </option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success" type="submit">Modifier</button>
            </form>
            <form action="/admin/article/{{ $article->id }}" method="post">
                <button class="btn btn-danger mt-3" type="submit">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
    </div>
    </div>
@endsection
