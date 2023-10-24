<x-layout-account>

    <x-slot:title>Account</x-slot>

    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Benvenuto {{ auth()->user()->name }}</h1>
        </div>
        <div class="card-body">
            <div class="mt-5 text-center">
                <a href="{{route('articles.create')}}"><button class="btn btn-black">Aggiungi articolo</button></a>
                <a href="{{route('categories.create')}}"><button class="btn btn-black">Aggiungi categoria</button></a>
                <a href="{{route('articles.index')}}"><button class="btn btn-black">I tuoi articoli</button></a>
                <a href="{{route('categories.index')}}"><button class="btn btn-black">Le tue categorie</button></a>
            </div>
        </div>
    </div>




</x-layout-account>
