@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="jumbotron">
        <div class="container">
        <h1>Bienvenido a nuestra tienda de dispositivos móviles</h1>
        <p>Encuentra los últimos modelos de smartphones al mejor precio.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h2>Oferta destacada</h2>
                <p>Descripción de la oferta destacada.</p>
            </div>
            <div class="col-md-6">
                <h2>Nuevos lanzamientos</h2>
                <p>Descripción de los nuevos lanzamientos.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <h2>Pre ordenar</h2>
                <p>Pre ordena el dispositivo que quieras</p>
            </div>
            <div class="col-md-6">
            <a href="{{ route('registros.index') }}" class="btn btn-primary btn-lg">Ver Catalogo</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Productos populares</h2>
                <p>Descripción de los productos populares.</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/galaxy-s23-ultra-rear-colors.jpg') }}" class="card-img-top" alt="Producto 1" width="300" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <p class="card-text">Descripción del producto 1.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/Google Pixel 7 Pro.png') }}" class="card-img-top" alt="Producto 2" width="300" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">Descripción del producto 2.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/iphone 14.jpeg') }}" class="card-img-top" alt="Producto 3" width="300" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">Descripción del producto 3.</p>
                    </div>
                </div>
            </div>
        </div>
        <main>
    <section class="banner">
    <img src="#" class="card-img-top img-fluid" alt="Panel" width="500" height="400">
    </section>

    <section class="productos">
      <h2>Mas acerca de nuestros productos</h2>
      <!-- Lista de productos móviles -->
      <div class="producto">
        <!-- Información y detalles del primer producto -->
      </div>
      <div class="producto">
        <!-- Información y detalles del segundo producto -->
      </div>
      <!-- Agregar más productos según sea necesario -->
    </section>
  </main>   </div>
    <div class="col-md-4">
    <div class="card">
        <img src="{{ asset('img/Panel.png') }}" class="card-img-top img-fluid" alt="Panel" width="500" height="400">
        <div class="card-body">
            <h5 class="card-title">Producto 1</h5>
            <p class="card-text">Descripción del producto 1.</p>
        </div>
    </div>
</div>


<p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
<p class="lh-sm">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
<p class="lh-base">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
<p class="lh-lg">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
@endsection
