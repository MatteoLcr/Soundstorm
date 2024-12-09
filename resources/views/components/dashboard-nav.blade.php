<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('admin.dashboard')}}">Dashboard</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.dashboardUsers')}}">Utenti</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.dashboardTracks')}}">Brani</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.dashboardGenres')}}">Generi</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
