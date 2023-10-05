{{-- navbar --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Beasts Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('articles')}}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aboutMe')}}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li>
                    <a class="btn btn-dark" href="{{route('account')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>