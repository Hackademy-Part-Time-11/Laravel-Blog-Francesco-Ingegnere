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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category) 
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td class="text-end d-flex justify-content-between">
                            <a href="{{route('categories.edit', $category)}}"><button class="btn btn-black">Modifica</button></a>
                            <a href="">
                                <form action="{{route('categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button class="btn btn-danger bg-danger" type="submit">Cancella</button>
                                </form>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                
            {{-- {{$articles->links}} --}}

        </div>    
    </div>        

</x-layout-main>