<x-layout-account>

    <x-slot:title>Account</x-slot>

    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Benvenuto {{ auth()->user()->name }}</h1>
        </div>
        <div class="card-body">
            <div class="mt-5">
                <a href="{{route('account.articles.create')}}"><button class="btn btn-black">Aggiungi articolo</button></a>
            </div>
        </div>
    </div>




</x-layout-account>
