<x-layout-main>

    <x-slot:title>Home</x-slot>

        <h1 class="mt-5">{{$title}}</h1>
        <h2>{{config('app.name')}}</h2>

        @guest
        <div class="mt-5">
            <p>Registrati per scrivere i tuoi articoli</p>
        </div>
        @endguest

</x-layout-main>