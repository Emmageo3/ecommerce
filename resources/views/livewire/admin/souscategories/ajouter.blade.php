
@extends('layouts.admin')

@section('content')

<div class="card">
    <header class="card-header">
        <p class="card-header-title">Création d'une sous-catégorie</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form action="{{ route('souscategories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="select">
                        <select name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Nom de la sous-categorie</label>
                    <div class="control">
                      <input class="input @error('nom') is-danger @enderror" type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom de la sous-catégorie">
                    </div>
                    @error('nom')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Photo</label>
                    <div class="control">
                      <input class="input" type="file" name="image" value="{{ old('image') }}">
                    </div>
                    @error('image')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <div class="control">
                      <button class="button is-link">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card" style="margin-top: 2rem">
    <header class="card-header">
        <p class="card-header-title">liste des categories</p>
    </header>
    <div class="card-content">
        <div class="content">
            <table class="table is-hoverable">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Image</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($souscategories as $souscategory)
                        <tr>
                            <td><strong>{{ $souscategory->nom }}</strong></td>
                            <td>
                                <img src="{{ asset('uploads/souscategories/'.$souscategory->image) }}" alt="" height="15px" width="100px">
                            </td>
                            <td><a class="button is-warning" href="{{ route('souscategories.edit', $souscategory->id) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('souscategories.destroy', $souscategory->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button is-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
