@extends('layouts.base')

@section('content')
<div class="container">
    <h2>Editar Venta</h2>
    <form action="{{ route('ventas.update', $venta->id) }}" method="POST">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="producto">Producto:</label>
            <input type="text" class="form-control" id="producto" name="producto" value="{{ $venta->producto }}" >
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $venta->cantidad }}" >
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario:</label>
            <input type="number" class="form-control" id="precio_unitario" name="precio_unitario" value="{{ $venta->precio_unitario }}" step="0.01" >
        </div>
        <div class="form-group">
            <label for="fecha_venta">Fecha de Venta:</label>
            <input type="date" class="form-control" id="fecha_venta" name="fecha_venta" value="{{ $venta->fecha_venta }}" >
        </div>
        <div class="form-group">
            <label for="cliente">Cliente:</label>
            <input type="text" class="form-control" id="cliente" name="cliente" value="{{ $venta->cliente }}" >
        </div>
        <div class="form-group">
            <label for="pagado">Pagado:</label>
            <select class="form-control" id="pagado" name="pagado" required>
                <option value="0" {{ $venta->pagado == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ $venta->pagado == 1 ? 'selected' : '' }}>Sí</option>
            </select>
        </div>
        <div class="form-group">
            <label for="observaciones">Observaciones:</label>
            <textarea class="form-control" id="observaciones" name="observaciones">{{ $venta->observaciones }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
