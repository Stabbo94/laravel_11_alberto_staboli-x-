<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lo shop dei prodotti</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.index')}}">Prodotti disponibili</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.form')}}">Inserisci prodotto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Pubblica articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Articoli pubblicati</a>
        </li>
        <li class="nav-item dropdown">
          @auth
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}!
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="dropdown-item">Logout</a>
              <form action="{{route('logout')}}" method="POST" style="display: none" id="form-logout">
                @csrf
              </form>
            </li>
            </ul>
            @else
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao Nuovo Visitatore!
          </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              
            </ul>
            @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>