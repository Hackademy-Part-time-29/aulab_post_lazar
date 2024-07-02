<div>
<nav class="navbar navbar-expand-lg fixed-top" id="navbarJS">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}"><img class="logo" src= "/img/logo/logo2.png" alt="{{env('APP_NAME')}}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Articoli</a>
        </li>
        @auth
        @if(Auth::user()->is_admin)++
        <li class="nav-item">
          <a class= "nav-link" href="{{route ('admin.dashboard')}}">Dashboard amministratori</a>
        </li>
        @endif
        @if(Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="nav-link" href="{{route ('revisor.dashboard')}}">Dashboard revisor</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Inserisci articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
          <li class="dropdown-item">
          <a class="nav-link textAuth" href="#" onclick="
          event.preventDefault();
          getElementById('form-logout').submit();
          ">Logout</a>
          <form id="form-logout" action="/logout" method="POST" class="d-none">@csrf</form>
        </li>
          </ul>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sei un articolista?
          </a>
          <ul class="dropdown-menu">
          <li class="dropdown-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="dropdown-item">
          <a class="nav-link" href="/register">Registrati</a>
        </li>
          </ul>
        </li>
        @endauth
      </ul>
    </div>
    <div class="searchBar">
    <form action="{{route('article.search')}}" method="GET" class="d-flex" role="search">
      <input class="form-control me-2" type="search" name="query" placeholder="Cerca tra gli articoli..." aria-label="Search">
      <button class="btn btn-outline-secondary" type="submit">Cerca</button>
    </form>
  </div>
  </div>
</nav>
</div>