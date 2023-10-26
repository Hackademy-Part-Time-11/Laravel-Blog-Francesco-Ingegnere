<x-layout>

    <x-slot:title>Create Book</x-slot>

    <div class="container">

        <div class="card shadow mt-5">
            <div class="card-header text-white bg-dark">
                <h1 class="text-center">Add a new book</h1>
            </div>    
            <div class="card-body">
                
                {{--     @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{$error}} <br>
                        @endforeach
                    </div>  
                    @endif --}}
                
                <x-success />
            
                <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title">Title</label>
                            <input  
                                type="text"
                                name="title"
                                id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                maxlength="150"
                                value="{{old('title')}}"
                            >    
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror    
                        </div>    
                        <div class="col-12">
                            <label for="author">Author</label>
                            <input  
                                type="text"
                                name="author"
                                id="author"
                                class="form-control @error('author') is-invalid @enderror"
                                maxlength="150"
                                value="{{old('author')}}"
                            >    
                            @error('author')
                                <span class="text-danger">{{$message}}</span>
                            @enderror    
                        </div>    
                        <div class="col-12">
                            <label for="genre">Genre</label>
                            <input  
                            type="text"
                            name="genre"
                            id="genre"
                            class="form-control @error('genre') is-invalid @enderror"
                            maxlength="40"
                            value="{{old('genre')}}"
                            >
                            @error('genre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror    
                        </div>    
                        <div class="col-12">
                            <label for="year">Year</label>
                            <input  
                            type="text"
                            name="year"
                            id="year"
                            class="form-control @error('year') is-invalid @enderror"
                            maxlength="4"
                            value="{{old('year')}}"
                            >   
                            @error('year')
                                <span class="text-danger">{{$message}}</span>
                            @enderror    
                        </div>    
                        <div class="col-12">
                            <label for="image">Image</label>
                            <input 
                                type="file"
                                name="image"
                                id="image"
                                class="form-control"
                            >    
                        </div>    
                        <div class="col-12">
                            <label for="description">Description</label>
                            <textarea 
                                name="description"
                                id="description"
                                class="form-control @error('description') is-invalid @enderror"
                                rows="10"
                                maxlength="5000"
                            >{{old('description')}}</textarea>    
                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror    
                        </div>    
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark">Add Book</button>
                        </div>    
                    </div>    
                </form>    
            </div>    
        </div>        
    


    </div>

</x-layout>