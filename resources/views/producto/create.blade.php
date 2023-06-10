@extends('layouts.app')
@section('content')
    <h2>Agregar nuevo productos +</h2></br><br>

    <form action="{{ url('/producto') }}" method="POST">
        @csrf
        @include('producto.form')
    
    </form>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function (e){
        $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>