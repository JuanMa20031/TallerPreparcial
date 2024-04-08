@extends('layouts.base')

@section('content')
<div class="container">
    <h2>Listado de Ventas</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Fecha de Venta</th>
                <th>Cliente</th>
                <th>Pagado</th>
                <th>Observaciones</th>
                <th>Acciones</th>
                <th>Detalles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->producto }}</td>
                <td>{{ $venta->cantidad }}</td>
                <td>{{ $venta->precio_unitario }}</td>
                <td>{{ $venta->fecha_venta }}</td>
                <td>{{ $venta->cliente }}</td>
                <td>{{ $venta->pagado ? 'Sí' : 'No' }}</td>
                <td>{{ $venta->observaciones }}</td>
                <td>
                    <a href="{{ route('edit', $venta->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('destroy', $venta->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-info">Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
