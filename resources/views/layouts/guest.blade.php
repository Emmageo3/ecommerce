<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lafrancoise</title>
     <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-prefix.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cartstyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    @livewireStyles
</head>
<body>

    <div class="header-top">

        <div class="container">

          <ul class="header-social-container">

            <li>
              <a href="https://www.facebook.com/" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://mobile.twitter.com/lafrancoise221" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://instagram.com/la_francoise221?igshid=YmMyMTA2M2Y=" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>



        </div>

      </div>

    <div class="header-main">

        <div class="container">

            <a href="" class="header-logo">
                <img src="{{ asset('images/logo.png') }}" alt="la françoise" style="height: 60px; width: 100px">
            </a>

            <div class="header-search-container">

                <input type="search" name="search" class="search-field" placeholder="Que cherchez vous ?">

                <button class="search-btn">
                  <ion-icon name="search-outline"></ion-icon>
                </button>

            </div>

            <div class="header-user-actions">
                @guest
                    <a href="{{ route('login') }}">
                        <button class="action-btn">
                            <ion-icon name="person-outline"></ion-icon>
                            </button>
                    </a>

                @endguest

                <a href="/favoris" class="action-btn">
                  <ion-icon name="heart-outline"></ion-icon>
                  <span class="count">0</span>
                </a>

                <a href="/panier" class="action-btn">
                  <ion-icon name="bag-handle-outline"></ion-icon>
                  <span class="count">0</span>
                </a>

                @auth
                    @if (Auth::user()->role === 'admin')
                    <a href="admin/dashboard" class="action-btn">
                        <ion-icon name="clipboard-outline"></ion-icon>
                    </a>
                    @endif
                @endauth

              </div>
            @auth
            <div class="logout dropdown">
                <button onclick="myFunction()" class="dropbtn">
                    {{ Auth::user()->name }} <i class="fa fa-sort-desc" aria-hidden="true"></i>
                </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#home">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        Réglages</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            Déconnexion
                        </a>
                    </form>
                </div>
            </div>
            @endauth
        </div>


    <header>

        <div class="navbar">

            <ul id="item">
                <li>
                    <a href="">Accueil</a>
                </li>
                <li>
                    <a href="">A propos</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>

        <div class="mobile-bottom-navigation">

            <a href="#" class="action-btn" data-mobile-menu-open-btn>
              <ion-icon name="menu-outline"></ion-icon>
            </a>

            <a href="#" class="action-btn">
              <ion-icon name="bag-handle-outline"></ion-icon>

              <span class="count">0</span>
            </a>

            <a href="" class="action-btn">
              <ion-icon name="home-outline"></ion-icon>
            </a>

            <a href="#" class="action-btn">
              <ion-icon name="heart-outline"></ion-icon>

              <span class="count">0</span>
            </a>
            @guest
            <a href="" class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="person-outline"></ion-icon>
            </a>
            @endguest


          </div>

          <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

            <div class="menu-top">
              <h2 class="menu-title">Menu</h2>

              <button class="menu-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="mobile-menu-category-list">

              <li class="menu-category">
                <a href="" class="menu-title">Accueil  </a>
              </li>
              <li class="menu-category">
                <a href="#" class="menu-title">A propos</a>
              </li>

              <li class="menu-category">
                <a href="#" class="menu-title">Contact</a>
              </li>
              @auth
              <li class="menu-category">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="route('logout')" class="menu-title"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        Déconnexion
                    </a>
                </form>
              </li>
              @endauth

            </ul>

            <div class="menu-bottom">
                <ul class="menu-social-container">

                    <li>
                      <a href="https://www.facebook.com/" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                      </a>
                    </li>

                    <li>
                      <a href="https://mobile.twitter.com/lafrancoise221" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                      </a>
                    </li>

                    <li>
                      <a href="https://instagram.com/la_francoise221?igshid=YmMyMTA2M2Y=" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                      </a>
                    </li>

                  </ul>

            </div>

          </nav>
        </div>
    </header>

    {{ $slot }}

    <footer style="margin-top: 2rem">

        <div class="footer-category">

          <div class="container">

            <h2 class="footer-category-title">La françoise</h2>

          </div>

        </div>

        <div class="footer-nav">

          <div class="container">


            <ul class="footer-nav-list">

              <li class="footer-nav-item">
                <h2 class="nav-title">Produits</h2>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Nouveautés</a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Collections</a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Catégories</a>
              </li>

            </ul>

            <ul class="footer-nav-list">

              <li class="footer-nav-item">
                <h2 class="nav-title">La marque</h2>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Mon histoire</a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Termes et conditions</a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">A propos</a>
              </li>

            </ul>

            <ul class="footer-nav-list">

              <li class="footer-nav-item">
                <h2 class="nav-title">Services</h2>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Nouveautés</a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Contactez nous</a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Arborescence du site</a>
              </li>

            </ul>

            <ul class="footer-nav-list">

              <li class="footer-nav-item">
                <h2 class="nav-title">Contact</h2>
              </li>

              <li class="footer-nav-item flex">
                <div class="icon-box">
                  <ion-icon name="location-outline"></ion-icon>
                </div>

                <address class="content">
                  Dakar, Sénégal
                </address>
              </li>

              <li class="footer-nav-item flex">
                <div class="icon-box">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
              </li>

              <li class="footer-nav-item flex">
                <div class="icon-box">
                  <ion-icon name="mail-outline"></ion-icon>
                </div>

                <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
              </li>

            </ul>

            <ul class="footer-nav-list">

              <li class="footer-nav-item">
                <h2 class="nav-title">Suivez nous</h2>
              </li>

              <li>
                <ul class="social-link">

                  <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>

                  <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>

                  <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">
                      <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                  </li>

                  <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>

                </ul>
              </li>

            </ul>

          </div>

        </div>

        <ul class="header-social-container" style="justify-content: center; margin-bottom: 1rem">

            <li>
              <a href="https://www.facebook.com/" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://mobile.twitter.com/lafrancoise221" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://instagram.com/la_francoise221?igshid=YmMyMTA2M2Y=" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        <div class="footer-bottom">

          <div class="container">

            <img src="" alt="payment method" class="payment-img">

            <p class="copyright">
              Copyright &copy; <a href="#">La françoise</a> Tous droits réservés.
            </p>

          </div>

        </div>

    </footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
@livewireScripts




