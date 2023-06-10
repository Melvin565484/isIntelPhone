@extends('layouts.app')
@section('content')
        <thead>
   
        </thead>
        <tbody>
        @foreach($registros as $registro)
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <h2 style="color: blue;" >Dispositivo: {{ $registro->nombre_producto }}</h2>
                    <p style="color: blue;">Descripcion:</p>
                    <p>{{ $registro->descripcion_producto }}</p>
                    <p style="color: blue;">Precio:</p>
                    <p>${{ $registro->precio }}</p>
                    <a style="color: green;" class="icon-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg></svg>
                    Comprar
                </a>
                <a style="color: red;" class="icon-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                    </svg></svg>
                    Favoritos
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" >
            <svg xmlns="http://www.w3.org/2000/svg" width="400" height="400" fill="gray" class="bi bi-images" viewBox="0 0 16 16">
            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
            </svg>    
        </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <!-- Contenido de la tarjeta 3 -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <!-- Contenido de la tarjeta 4 -->
            </div>
        </div>
        <!-- Agrega más tarjetas según sea necesario -->
    </div>
</div>
@endforeach
</tbody>         
@endsection