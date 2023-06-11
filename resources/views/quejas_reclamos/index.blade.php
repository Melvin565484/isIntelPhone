@extends('layouts.app')

@section('content')

    <h2>Listado de Quejas y Reclamos</h2><br/>

    <a href="{{ url('quejas_reclamos.create') }}" class="btn btn-primary">Agregar Queja o Reclamo +</a>

    <table class="table">
        <thead>
            <tr>
                <th style="background-color: gray;">Código</th>
                <th style="background-color: gray;">Nombre</th>
                <th style="background-color: gray;">Correo</th>
                <th style="background-color: gray;">Mensaje</th>
                <th style="background-color: gray;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quejasReclamos as $quejaReclamo)
            <tr>
                <td>{{ $quejaReclamo->id }}</td>
                <td>{{ $quejaReclamo->nombre }}</td>
                <td>{{ $quejaReclamo->correo }}</td>
                <td>{{ $quejaReclamo->mensaje }}</td>
                <td>
                    <form method="POST" action="{{ url('quejas_reclamos.destroy', $quejaReclamo->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ url('quejas_reclamos.edit', $quejaReclamo->id) }}" class="btn btn-primary">Editar</a></br>
                        <button type="submit" onclick="return confirm('¿Está seguro de que desea eliminar el registro?')" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
    {{ $quejasReclamos->links('pagination::bootstrap-4') }}
@endsection
