<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                @auth

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.create') }}">Add Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.index') }}">Your Books</a>
                    </li>

                @endauth

                @guest

                    <a href="{{ route('login') }}" class="btn btn-dark">LOGIN</a>
                    <a href="{{ route('register') }}" class="btn btn-dark">REGISTER</a>
                @else

                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">LOGOUT</button>
                    </form>

                @endguest
            </ul>
        </div>
    </div>
</nav>
