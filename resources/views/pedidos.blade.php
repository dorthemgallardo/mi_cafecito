@extends('master')
@section('pestaña')
   <title>Ver Pedidos</title>
@stop


@section('titulo')
<h1>Ver Pedidos</h1>
@stop


@section('contenido')


<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Origen</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pedidos as $pedido)
        <tr>
            <td>{{ $pedido -> id }}</td>
            <td>{{ $pedido -> nombre }}</td>
            <td>{{ $pedido -> origen }}</td>
            <td>{{ $pedido -> fecha }}</td>
            <td>{{ $pedido -> total }}</td>
            <td>
                <a href="{{ url('/eliminarPedido') }}/{{$pedido->id}}"
                    class="btn btn-primary btn-sm">Eliminar</a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
