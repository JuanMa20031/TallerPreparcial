<?php

namespace App\Http\Controllers;

use App\Http\Requests\VentaRequest;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::orderByDesc('id')->get();
        return view('index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    public function store(VentaRequest $request)
    {
        Venta::create($request->all());

        return redirect()->route('index')
            ->with('success', 'Venta creada correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        return view('edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(VentaRequest $request, Venta $venta)
    {
        $venta->update($request->all());

        return redirect()->route('index')
            ->with('success', 'Venta actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();

        return redirect()->route('index')
            ->with('success', 'Venta eliminada correctamente.');
    }

    public function show(Venta $venta)
    {
        return view('show', compact('venta'));
    }
}
