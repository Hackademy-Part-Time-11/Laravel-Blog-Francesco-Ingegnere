<x-layout-main>
    
    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Modifica le Categorie</h1>
        </div>    
        <div class="card-body">

            
            <x-success />
        
            <form action="{{route('categories.update', $category)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name">Nome Categoria</label>
                        <input  
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            maxlength="150"
                            value="{{old('name', $category->name)}}"
                        >    
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror    
                    </div>    
                    
                    <div class="col-12 d-flex justify-content-between">
                        <a href="{{route('categories.index')}}" class="btn btn-black">Indietro</a>      
                        <button type="submit" class="btn btn-black bg-danger">Modifica Categoria</button>
                    </div>    
                </div>    
            </form>    
        </div>    
    </div>  

</x-layout-main>