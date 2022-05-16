<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    @yield('css')
  </head>
  <body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="{{ asset('images/logo.png') }}" width="60" height="60">
          </a>

          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="{{ route('home') }}">
              Accueil
            </a>

            <a class="navbar-item">
              Statistiques
            </a>

            <a class="navbar-item" href="{{ route('categories.create') }}">
                Catégories
            </a>

            <a class="navbar-item" href="{{ route('souscategories.create') }}">
                Sous-catégories
            </a>
          </div>
      </nav>

    <main class="section">
        <div class="container">
            @yield('content')
        </div>
    </main>

