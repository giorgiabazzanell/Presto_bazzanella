<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('articles.index') }}">Articoli</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="btn btn-dark" href="{{ route('create.article') }}">Crea Annuncio</a>
        </li>
        @endauth
      </ul>
      <div class="d-flex align-items-center gap-2">
        @auth
            <div class="nav-item dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao, {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('articles.my') }}">I Miei Articoli</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                    </li>
                </ul>
            </div>
            <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
            <a class="btn btn-outline-dark" href="{{ route('login') }}">Login</a>
            <a class="btn btn-dark" href="{{ route('register') }}">Registrati</a>
        @endauth
      </div>
    </div>
  </div>
</nav>