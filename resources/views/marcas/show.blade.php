@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Marca</h1>
    <p><strong>ID:</strong> {{ $marca->id }}</p>
    <p><strong>Nombre:</strong> {{ $marca->nombre }}</p>
    <a href="{{ route('marcas.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
