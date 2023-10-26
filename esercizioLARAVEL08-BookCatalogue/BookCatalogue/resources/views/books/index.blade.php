<x-layout>

    <x-slot:title>Index Books</x-slot>

    <div class="container mt-5">

        <div class="row">

            @foreach ($books as $book)

                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($book->image)}}" class="card-img-top my-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <p class="card-text">{{$book->description}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Author: {{$book->author}}</li>
                        <li class="list-group-item">Year: {{$book->year}}</li>
                        <li class="list-group-item">Genre: {{$book->genre}}</li>
                    </ul>
                    <div class="card-body d-flex justify-content-between">
                        <a href="{{route('books.edit', $book)}}" class="btn btn-dark">Edit Book</a>
                        <a href="#" class="card-link">
                            <form action="{{route('books.destroy', $book)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <button class="btn btn-danger" type="submit">Delete Book</button>
                            </form>
                        </a>
                    </div>
                </div>

            @endforeach


        </div>


    </div>

</x-layout>
