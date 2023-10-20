<x-layout-account>

    <x-slot:title>Account</x-slot>

        <h1 class="mt-5">Benvenuto {{ auth()->user()->name }}</h1>

        <div class="mt-5">
            <a href="{{route('account.articles.create')}}">Aggiungi articolo</a>
        </div>

</x-layout-account>
