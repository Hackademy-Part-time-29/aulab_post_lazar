<div>
<nav class="navbar navbar-expand-lg nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Inserisci articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="
          event.preventDefault();
          getElementById('form-logout').submit();
          ">Logout</a>
          <form id="form-logout" action="/logout" method="POST" class="d-none">@csrf</form>
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
  </div>
</nav>
</div>