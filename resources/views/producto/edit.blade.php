@extends('layouts.app')
@section('content')

    <h2>Editar Registro de Mascota</h2>

    <form action="{{ url('/producto/'. $producto->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        @include('producto.form')
    
    </form>
@endsection