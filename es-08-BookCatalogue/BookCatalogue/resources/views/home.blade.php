<x-layout>

    <x-slot:title>Home</x-slot>

    <div class="container">
        <h1 class="my-5">Library</h1>

        @guest

        <a href="{{route('login')}}" class="btn btn-dark">LOGIN</a>
        <a href="{{route('register')}}" class="btn btn-dark">REGISTER</a>

        @else

        <a href="{{route('books.create')}}" class="btn btn-dark">ADD BOOK</a>
        <a href="{{route('books.index')}}" class="btn btn-dark">YOUR BOOKS</a>

        <form action="/logout" method="POST" class="mt-5">
            @csrf
            <button type="submit" class="btn btn-danger">LOGOUT</button>
        </form>
            
        @endguest


    </div>




</x-layout>