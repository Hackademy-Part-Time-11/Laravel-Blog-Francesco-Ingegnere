<x-layout-main>
    
    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Crea un nuovo articolo</h1>
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
        
            <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title">Titolo</label>
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
                        <label for="category_id">Categoria</label>

                        @foreach ($categories as $category)

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$category->id}}" name="categories[]" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$category->name}}
                            </label>
                        </div>
                            
                        {{-- <select id="category_id" name="category_id" class="form-select">

                            <option disabled value="">--- seleziona la categoria ---</option>

                            @foreach ($categories as $category)

                            <option value="{{$category->id}}" @selected($category->id == old('category_id'))>{{$category->name}}</option> --}}
                                
                            @endforeach


                        {{-- </select> --}}

                        @error('categories')
                            <span class="text-danger">{{$message}}</span>
                        @enderror    
                    </div>    
                    <div class="col-12">
                        <label for="description">Descrizione breve</label>
                        <textarea 
                            name="description"
                            id="description"
                            class="form-control @error('description') is-invalid @enderror"
                            maxlength="250"
                        >{{old('description')}}</textarea>    
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror    
                    </div>    
                    <div class="col-12">
                        <label for="image">Immagine</label>
                        <input 
                            type="file"
                            name="image"
                            id="image"
                            class="form-control"
                        >    
                    </div>    
                    <div class="col-12">
                        <label for="body">Corpo dell'articolo</label>
                        <textarea 
                            name="body"
                            id="body"
                            class="form-control @error('body') is-invalid @enderror"
                            rows="10"
                            maxlength="5000"
                        >{{old('body')}}</textarea>    
                        @error('body')
                            <span class="text-danger">{{$message}}</span>
                        @enderror    
                    </div>    
                    <div class="col-12">
                        <button type="submit" class="btn btn-black">Inserisci Articolo</button>
                    </div>    
                </div>    
            </form>    
        </div>    
    </div>        

</x-layout-main>