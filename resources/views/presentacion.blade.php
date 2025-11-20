@extends('master')

@section('pestaña')
    <title>Mi cafecito - Presentación</title>
@endsection

@section('titulo')
    <h2 class="text-center mb-4">Bienvenido a nuestra cafetería</h2>
@endsection

@section('contenido')
    <div class="card p-4 mb-4">
        <p>
            En "Mi cafecito" encontrarás un ambiente cálido, clásico y acogedor donde
            los aromas de café y té artesanal se mezclan con un estilo retro único.
        </p>
    </div>

    <div class="card p-4 mb-4">
        <p>
            Nuestro espacio está inspirado en cafeterías más modernas: tonos enriquecidos,
            y una atmósfera tranquila diseñada para que disfrutes cada sorbo.
        </p>
    </div>

    <div class="card p-4 text-center">
        <img src="{{ asset('img/cafe.jpg') }}" class="img-fluid rounded shadow" alt="Cafetería pop">
    </div>
@endsection
