<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Car;
use App\Models\Accessory;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.form', [
            'titleHeader' => 'Aggiungi ordine',
            'action' => route('orders.store'),
            'title' => 'Crea un nuovo ordine',
            'button' => 'Ordina',
            'order' => new Order(),
            'cars' => Car::all(),
            'accessories' => Accessory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create($request->all());

        $order->accessories()->attach($request->accessories);
   
        return redirect()->route('orders.index')->with(['success' => 'Ordine creato correttamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.form', [
            'titleHeader' => 'Modifica ordine',
            'action' => route('orders.update', $order),
            'title' => 'Modifica ordine',
            'button' => 'Modifica ordine',
            'order' => $order,
            'cars' => Car::all(),
            'accessories' => Accessory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());

        $order->accessories()->detach();
        $order->accessories()->attach($request->accessories);

        return redirect()->route('orders.index')->with(['success' => 'Ordine modificato con successo!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        if($order->accessories->count()) {
            return redirect()->back()->with(['warning' => 'Impossibile cancellare l\'ordine perchè ci sono accessori collegati']);
        }

        /* $order->accessories()->detach(); */

        $order->delete();
        return redirect()->back()->with(['success' => 'Ordine cancellato con successo!']);
    }
}
