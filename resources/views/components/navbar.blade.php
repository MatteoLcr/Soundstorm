<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Soundstorm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('track.index')}}">Tutti i brani</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          @guest
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, accedi!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="#">Contattaci</a></li>
            <li><a class="dropdown-item" href="#">FAQ</a></li>
          </ul>
          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{ Auth::user()->name}}!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('profilo.page')}}">Il mio profilo</a></li>
            <li><a class="dropdown-item" href="#">Contattaci</a></li>
            <li><a class="dropdown-item" href="#">FAQ</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">Logout</a></li>
            <form action="{{route('logout')}}" method="POST" id="logout-form" class="d-none">@csrf</form>
          </ul>
          @endguest
        </li>
      </ul>
    </div>
  </div>
</nav>