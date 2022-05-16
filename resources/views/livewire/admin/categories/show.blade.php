@extends('layouts.admin')

@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
        .is-info {
            margin: 0.3em;
        }
    </style>
@endsection

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Titre : {{ $category->nom }}</p>
    </header>
    <div class="card-content">
        <div class="content">
            <img src="{{ asset('uploads/categories/'.$category->image) }}" alt="" height="50px" width="100px">
            <div class="sous-categories">
                @foreach ($category->souscategories as $souscategory)
                    <div class="card" style="margin-top: 2rem">
                        <header class="card-header">
                            <p class="card-header-title">liste des sous categories</p>
                            <a class="button is-info" href="{{ route('souscategories.create') }}">Créer une sous catégorie</a>
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
                                            <tr>
                                                <td><strong>{{ $souscategory->nom }}</strong></td>
                                                <td>
                                                    <img src="{{ asset('uploads/souscategories/'.$souscategory->image) }}" alt="" height="15px" width="100px">
                                                </td>
                                                <td><a class="button is-success" href="{{ route('souscategories.show', $souscategory->id) }}">Voir</a></td>
                                                <td>
                                                <td><a class="button is-warning" href="{{ route('souscategories.edit', $souscategory->id) }}">Modifier</a></td>
                                                <td>
                                                    <form action="{{ route('souscategories.destroy', $souscategory->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="button is-danger" type="submit">Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
