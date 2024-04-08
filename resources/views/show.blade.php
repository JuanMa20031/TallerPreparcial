@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Venta Detalles</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $venta->id }}</td>
                </tr>
                <tr>
                    <th>Producto</th>
                    <td>{{ $venta->producto }}</td>
                </tr>
                <tr>
                    <th>Cantidad</th>
                    <td>{{ $venta->cantidad }}</td>
                </tr>
                <tr>
                    <th>Precio Unitario</th>
                    <td>{{ $venta->precio_unitario }}</td>
                </tr>
                <tr>
                    <th>Fecha de Venta</th>
                    <td>{{ $venta->fecha_venta }}</td>
                </tr>
                <tr>
                    <th>Cliente</th>
                    <td>{{ $venta->cliente }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
