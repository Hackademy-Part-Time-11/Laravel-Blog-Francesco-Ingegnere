<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orders.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.form', [
            'action' => route('orders.store'),
            'title' => 'Crea un nuovo ordine',
            'button' => 'Ordina',
            'order' => new Order(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create($request->all());
   
        return redirect()->route('orders.index')->with(['success' => 'Ordine creato correttamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.form', [
            'action' => route('orders.update', $order),
            'title' => 'Modifica ordine',
            'button' => 'Modifica',
            'order' => $order,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
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
