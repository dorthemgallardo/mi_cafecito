@extends('master')
@section('pestaña')
   <title>Ordenar Productos</title>
@stop


@section('titulo')

<div class="row">
  <h1 class="col-8 align-self-start">Ordenar Productos</h1>
  <a href="{{url('/generarPedido')}}"
    class="btn btn-success btn-sm col-3 align-self-start">Ver Pedido</a>
</div>
@stop


@section('contenido')


<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto -> id }}</td>
            <td>{{ $producto -> nombre }}</td>
            <td>{{ $producto -> precio }}</td>
            <td><img src="{{asset('img/'.$producto->imagen)}}" class="img-fluid rounded shadow vintage-img" alt="{{ $producto -> nombre }}"></td>
            <td>
                <a href="{{ url('/agregarProducto') }}/{{$producto->id}}"
                    class="btn btn-primary btn-sm">Agregar</a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
