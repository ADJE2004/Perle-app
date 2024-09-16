<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{route('pearl')}}">Pearls</a></li>
                        <li class="scroll-to-section"><a href="{{route('fil')}}">Fils</a></li>
                        <li class="scroll-to-section"><a href="{{route('panier')}}">Panier</a></li>

                        <li class="submenu">
                            <a href="javascript:void(0);">Pages</a>
                            <ul>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="/products">Products</a></li>
                                <li><a href="">Single Product</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </li>

                        {{-- <div class="user-info">
                            <span>{{ Auth::user()->name }}</span>
                            @if(Auth::user()->role === 'admin')
                                <span class="badge bg-danger">Admin</span>
                            @endif
                            <a href="{{ route('logout') }}" class="btn btn-outline-secondary">Déconnexion</a>
                        </div> --}}

                        @if (Auth::check())
                            <li class="submenu">
                                <a href="javascript:void(0);">Connecté en tant que {{ Auth::user()->name }}</a>
                                <ul>
                                    <!-- Formulaire de déconnexion caché -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="submenu">
                                <a href="javascript:void(0);">Mon compte</a>
                                <ul>
                                    <li><a href="{{ route('connexion') }}">Connexion</a></li>
                                    <li><a href="{{ route('login') }}">Inscription</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                    <!-- ***** Trigger pour le menu mobile ***** -->
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
