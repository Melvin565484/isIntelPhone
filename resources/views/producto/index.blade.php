@extends('layouts.app')
@section('content')

    <h2>Catalogo</h2><br/>


    <a href="{{ url('producto/create') }} " class="btn btn-primary" >Agregar Producto + </a>

    <table class="table">
        <thead>
            <tr>
                <th style="background-color: gray;" >Codigo</th>
                <th style="background-color: gray;" >Producto</th>
                <th style="background-color: gray;">Precio$</th>
                <th style="background-color: gray;">Cantidad</th>
                <th style="background-color: gray;">Descripcion</th>
                <th style="background-color: gray;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre_producto }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>{{ $producto->descripcion_producto }}</td>
                <td>
                    <form method="POST" action="{{ url('/producto/'. $producto->id) }}">
                    @csrf
                    <a href="{{ url('/producto/'. $producto->id . '/edit') }}" class="btn btn-primary" style="width: 82px; height: 40px;">Editar</a></br>
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')" style="width: 82px; height: 40px;"
                    class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
    </table>
    <br/>
    {{ $productos->links('pagination::bootstrap-4') }}
@endsection