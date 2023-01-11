<nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #007FFF;">

    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{url('/')}}">Agence Kingui</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <span class="text-white">{{Auth::user()->name}}</span>
            <!-- <input class="form-control" type="text" placeholder="Rechercher..." aria-label="Rechercher..." aria-describedby="btnNavbarSearch" /> -->
            <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
        </div>
    </form>

    <!-- Navbar-->

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
                <!-- <img src="" alt=""> image de l'utilisateur connecté -->
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Paramètre</a></li>
                <li><a class="dropdown-item" href="#!">Activités de connexion</a></li>
                <li><hr class="dropdown-divider" /></li>

                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>