{{-- navbar --}}

<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary shadow fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fs-4" href="{{ route('home') }}">
            <img src="/logoipsum-277.svg" alt="Logo" height="45"
                class="d-inline-block align-text-center">
            BEASTS BLOG
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle active-hover fs-5" href="{{ route('home') }}" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        HOME
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('home') }}">HOME</a></li>
                        <li><a class="dropdown-item" href="{{ route('anime.genres') }}">Catalogo Anime</a></li>
                        <li><a class="dropdown-item" href="{{ route('articles') }}">Articoli</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active-hover fs-5" aria-current="page" href="{{ route('aboutMe') }}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active-hover fs-5" href="{{ route('contacts') }}">Contatti</a>
                </li>
            </ul>

            @auth
                
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active-hover fs-5" href="{{route('account')}}" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ auth()->user()->email }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('account')}}">Profilo</a></li>
                        <li><a class="dropdown-item" href="{{route('account.settings')}}">Impostazioni Account</a></li>
                        <li class="text-center">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">LOGOUT</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

            @else

            <div class="nav-item p-2 text-center ms-auto">
                <form action="/login">
                    @csrf
                    <button type="submit" class="btn btn-black btnAccess">ACCEDI</button>
                </form>
            </div>

            @endauth
        </div>
    </div>
</nav>
