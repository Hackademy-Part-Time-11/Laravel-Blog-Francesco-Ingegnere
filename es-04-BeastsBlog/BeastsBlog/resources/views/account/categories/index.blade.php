<x-layout-main>


    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Le Categorie</h1>
        </div>
        <div class="card-body">

            <x-success />

            @if (session()->has('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            @endif


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
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                @foreach ($category->articles as $article)
                                    <a href="{{ route('articles.edit', $article) }}">{{ $article->title }}</a><br>
                                @endforeach
                            </td>
                            <td class="text-end d-flex justify-content-end">
                                <a href="{{ route('categories.edit', $category) }}">
                                    <button class="btn btn-black">Modifica</button>
                                </a>
                                <button class="btn btn-danger bg-danger mx-2" type="button" data-action="{{ route('categories.destroy', $category) }}" data-bs-toggle="modal" data-bs-target="#deleteModal" >Cancella</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- {{$articles->links}} --}}


            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteModalLabel">ATTENZIONE</h1>
                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler eliminare la categoria?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-black" data-bs-dismiss="modal">No</button>
                            <form action="" method="POST" id="delete">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger bg-danger mx-2" type="submit">Si</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-footer text-center">
            <a href="{{ route('categories.create') }}"><button class="btn btn-black">Aggiungi Categoria</button></a>
        </div>
    </div>

</x-layout-main>
