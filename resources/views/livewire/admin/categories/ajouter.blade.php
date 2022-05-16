@extends('layouts.admin')

@section('content')

<div class="card">
    <header class="card-header">
        <p class="card-header-title">Création d'une catégorie</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <label class="label">Nom de la catégorie</label>
                    <div class="control">
                      <input class="input @error('nom') is-danger @enderror" type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom de la catégorie">
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td><strong>{{ $category->nom }}</strong></td>
                                <td>
                                    <img src="{{ asset('uploads/categories/'.$category->image) }}" alt="" height="15px" width="100px">
                                </td>
                                <td><a class="button is-primary" href="{{ route('categories.show', $category->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('categories.edit', $category->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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
