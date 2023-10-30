<x-layout-main>

    
    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">I tuoi articoli</h1>
        </div>    
        <div class="card-body">
            
            <x-success />
            

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>TITLE</th>
                        <th>CATEGORIA</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->articles as $article) 
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>
                            @foreach($article->categories as $category)

                            {{$category->name}} <br>

                            @endforeach
                        </td>
                        <td class="text-end d-flex justify-content-end">
                            <a href="{{route('articles.edit', $article)}}"><button class="btn btn-black">Modifica</button></a>
                            <a href="">
                                <form action="{{route('articles.destroy', $article)}}" method="POST">
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
            <a href="{{route('articles.create')}}"><button class="btn btn-black">Aggiungi Articolo</button></a>
        </div>
    </div>        

</x-layout-main>