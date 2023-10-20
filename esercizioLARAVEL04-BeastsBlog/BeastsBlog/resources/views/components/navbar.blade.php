{{-- navbar --}}
<nav class="navbar navbar-expand-xl bg-body-tertiary py-1 shadow fixed-top">
    <div class="container">
        <a class="navbar-brand font-weight-bold fs-3 fw-bold" href="{{route('home')}}">
            <img src="/logoipsum-277.svg" alt="logo">
            BEASTS BLOG
        </a>
    
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end text-end" id="navbarNavDropdown">
            <ul class="navbar-nav hovereggianti2">
                <li class="nav-item p-2">
                    <a class="nav-link active fs-5" aria-current="page" href="{{route('anime.genres')}}">Catalogo ANIME</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link active fs-5" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link fs-5" href="{{route('articles')}}">Articoli</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link fs-5" href="{{route('aboutMe')}}">Chi Siamo</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link fs-5" href="{{route('contacts')}}">Contatti</a>
                </li>

                @auth

                {{-- <li class="nav-item dropdown p-2">
                    <a class="nav-link dropdown-toggle fs-5" href="{{route('home')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{route('account')}}">{{ auth()->user()->email }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit">LOGOUT</button>
                            </form>
                        </li>
                    </ul>
                </li> --}}

                <li class="nav-item p-2 text-center">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-black">LOGOUT</button>
                    </form>
                </li>

                @else

                <li class="nav-item p-2 text-center">
                    <form action="/login">
                        @csrf
                        <button type="submit" class="btn btn-black">LOGIN</button>
                    </form>
                </li>

                @endauth

            </ul>
        </div>
    </div>
  </nav>
