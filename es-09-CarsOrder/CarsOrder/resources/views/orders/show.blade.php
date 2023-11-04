<x-layout>

    <x-slot:title>Visualizza ordine</x-slot>

    <div class="mb-3">
        <a href="{{ route('orders.index') }}">indietro</a>
    </div>

    <section>
        <span>{{ $order->car->brand }}</span>
        <h1>{{ $order->car->model }}</h1>
    </section>

    <section class="mt-5">
        Prezzo: {{ euro($order->car->price) }}
    </section>

    <section class="mt-5">
        <h3>Accessori ({{ euro($order->accessories->sum('price')) }})</h3>
        
        <ul>
            @foreach($order->accessories as $accessory)
            <li>{{ $accessory->name }} {{ euro($accessory->price) }}</li>
            @endforeach
        </ul>
    </section>

    <section class="mt-5">
        Costo totale ordine: <span class="fw-bold">{{ euro($order->car->price + $order->accessories->sum('price')) }}</span>
    </section>


</x-layout>