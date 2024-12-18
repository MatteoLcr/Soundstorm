<nav class="bg-dark navbar-dark d-flex justify-content-center align-items-center">
    <div class="navLinkContainer d-flex align-items-center">

        <div class="logo d-flex justify-content-center align-items-center">
            <h5>SOUNDSTORM</h5>
        </div>
        <a href="{{route('welcome')}}" class="navBtn d-flex justify-content-center align-items-center">
            <h5>Home</h5>
        </a>
        <a href="{{route('track.index')}}" class="navBtn d-flex justify-content-center align-items-center">
            <h5>Track</h5>
        </a>
        <a href="{{route('user.index')}}" class="navBtn d-flex justify-content-center align-items-center">
            <h5>Artist</h5>
        </a>
        <form class="d-flex align-items-center navSearchBar" role="search" action="{{route('track.search')}}" method="get">
            <input class="form-control ms-3 me-1" type="search" placeholder="Search" aria-label="Search" name="query">
            <button class="btn btn-dark me-2" type="submit"> <i class="bi bi-search"></i> </button>
        </form>
        <a href="{{route('track.create')}}" class="navBtn d-flex justify-content-center align-items-center">
            <h5>Carica</h5>
        </a>

        @guest
        <a href="{{route('login')}}" class="navBtnLogin d-flex justify-content-center align-items-center ms-3">
            <h5>Accedi</h5>
        </a>
        <a href="{{route('register')}}" class="navBtnOrange d-flex justify-content-center align-items-center ms-3">
            <h5>Registrati</h5>
        </a>
        <a href="" class="navBtnSocial ms-5 d-flex justify-content-center align-items-center">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="" class="navBtnSocialTiktok d-flex justify-content-center align-items-center mx-2">
            <i class="bi3 bi-tiktok position-absolute"></i>
            <i class="bi2 bi-tiktok position-absolute"></i>
            <i class="bi bi-tiktok position-absolute"></i>
        </a>
        <a href="" class="navBtnSocial d-flex justify-content-center align-items-center me-3">
            <i class="bi bi-whatsapp"></i>
        </a>

        @else

        <a href="{{route('login')}}" class="navBtnGo d-flex justify-content-center align-items-center pe-2 ms-3">
            <h5>Soundstorm Go+</h5>
        </a>
        <a class="dropdown-toggle d-flex justify-content-center align-items-center navBtnDrop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <h5>{{Auth::user()->name}}</h5>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('profilo.page')}}">
                    <i class="bi bi-person-fill me-2"></i>Il mio profilo</a></li>

            @if(auth()->user()->isAdmin)
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">
                    <i class="bi bi-gear-fill me-2"></i>Dashboard</a></li>
            @endif

            <li><a class="dropdown-item" href="#">
                    <i class="bi bi-heart-fill me-2"></i>Preferiti</a></li>
            <li>

            <li><a class="dropdown-item" href="#">
                    <i class="bi bi-music-note-list me-2"></i>Tracce</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">
                    <i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
            <form action="{{route('logout')}}" method="POST" id="logout-form" class="d-none">@csrf</form>
        </ul>
        @endguest
        <a href="" class="navBtnBell ms-3 d-flex justify-content-center align-items-center">
        <i class="bi bi-bell-fill"></i>
        </a>
        <a href="" class="navBtnBell ms-3 d-flex justify-content-center align-items-center">
        <i class="bi bi-envelope-fill"></i>
        </a>
        <a href="" class="navBtnSocialPoint ms-3 d-flex justify-content-center align-items-center">
            <i class="bi bi-circle-fill"></i>
            <i class="bi bi-circle-fill mx-1"></i>
            <i class="bi bi-circle-fill"></i>
        </a>

    </div>
</nav>