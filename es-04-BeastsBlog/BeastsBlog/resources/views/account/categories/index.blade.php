<x-layout-main>

    
    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Le Categorie</h1>
        </div>    
        <div class="card-body">
            
            <x-success />
            

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NOME CATEGORIE</th>
                        <th>ARTICOLI COLLEGATI</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category) 
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            @foreach($category->articles as $article)
                            <a href="{{route('articles.edit', $article)}}">{{$article->title}}</a><br>
                            @endforeach
                        </td>
                        <td class="text-end d-flex justify-content-end">
                            <a href="{{route('categories.edit', $category)}}"><button class="btn btn-black">Modifica</button></a>
                            <a href="" class="">
                                <form action="{{route('categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button class="btn btn-danger bg-danger mx-2" type="submit">Cancella</button>
                                </form>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                
            {{-- {{$articles->links}} --}}

        </div>  
        
        <div class="card-footer text-center">
            <a href="{{route('categories.create')}}"><button class="btn btn-black">Aggiungi Categoria</button></a>
        </div>
    </div>        

</x-layout-main>