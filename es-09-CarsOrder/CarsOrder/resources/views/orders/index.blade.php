<x-layout>

    <x-slot:title>Visualizza ordini</x-slot>

    <h1>Elenco ordini</h1>

    <table class="table-bordered table-sm mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Marca e Modello auto</th>
                <th>Prezzo totale</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td><a href="{{ route('orders.show', $order) }}">{{ $order->car->brand }} {{ $order->car->model }}</a></td>
                <td class="text-end">{{ euro($order->car->price + $order->accessories->sum('price')) }} (compresi accessori)</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</x-layout>