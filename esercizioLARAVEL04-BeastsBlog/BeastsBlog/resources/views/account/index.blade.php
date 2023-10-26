<x-layout-account>

    <x-slot:title>Account</x-slot>

    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Benvenuto {{ auth()->user()->name }}</h1>
        </div>
        <div class="card-body">
            <div class="mt-5 text-center">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-2">
                        <a href="{{route('articles.create')}}"><button class="btn btn-black w-100">Aggiungi articolo</button></a>
                    </div>
                    <div class="col-lg-6 col-12 mb-2">
                        <a href="{{route('articles.index')}}"><button class="btn btn-black w-100">I tuoi articoli</button></a>
                    </div>

                    @if (auth()->user()->role == 'admin')
                        
                    <div class="col-lg-6 col-12 mb-2">
                        <a href="{{route('categories.create')}}"><button class="btn btn-black w-100">Aggiungi categoria</button></a>
                    </div>
                    <div class="col-lg-6 col-12 mb-2">
                        <a href="{{route('categories.index')}}"><button class="btn btn-black w-100">Le tue categorie</button></a>
                    </div>

                    @endif
                    
                </div>
            </div>
        </div>
    </div>




</x-layout-account>
