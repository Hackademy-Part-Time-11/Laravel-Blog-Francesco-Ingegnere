<x-layout-account>

    <x-slot:title>Account</x-slot>

        <h1 class="mt-5">Benvenuto {{ auth()->user()->name }}</h1>

        <div class="mt-5">
            <a href="{{route('account.articles.create')}}"><button class="btn btn-black">Aggiungi articolo</button></a>
        </div>


</x-layout-account>
