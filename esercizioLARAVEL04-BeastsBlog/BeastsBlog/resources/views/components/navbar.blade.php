{{-- navbar --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary py-4">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="{{route('home')}}">
            <img src="/logoipsum-277.svg" alt="logo">
            BEASTS BLOG
        </a>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end text-end" id="navbarNavDropdown">
            <ul class="navbar-nav hovereggianti2">
                <li class="nav-item p-2">
                    <a class="nav-link active" aria-current="page" href="{{route('anime.genres')}}">Catalogo ANIME</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="{{route('articles')}}">Articoli</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="{{route('aboutMe')}}">Chi Siamo</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="{{route('account')}}">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
