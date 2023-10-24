<x-layout-main>
    
    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Crea una nuova categoria</h1>
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
        
            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3"> 
                    <div class="col-12">
                        <label for="name">Nome categoria</label>
                        <input 
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            maxlength="40"
                            value="{{old('name')}}"
                        >    
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror    
                    </div>    
   
                    <div class="col-12">
                        <button type="submit" class="btn btn-black">Inserisci Categorie</button>
                    </div>    
                </div>    
            </form>    
        </div>    
    </div>        

</x-layout-main>