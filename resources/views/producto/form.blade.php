<div class="container">
<label class="form-label">Nombre &emsp;</label>
    <input type="text" name="nombre_producto" id="nombre_producto" value="{{ isset($producto)?$producto->nombre_producto:'' }}"  /><br />
    @error('nombre_producto')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br/>
    <br />
    Precio&emsp;&emsp;
    <input type="number" name="precio" id="precio" value="{{ isset($producto)?$producto->precio:'' }}" /><br />
    @error('precio')
    <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br/>
    <br />
    Cantidad &nbsp;
    <input type="number" name="cantidad" id="cantidad" value="{{ isset($producto)?$producto->cantidad:'' }}" /><br />
    @error('cantidad')
    <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br />
    <br/>
    Descripcion<br />
    <input type="text" name="descripcion_producto" id="descripcion_producto" value="{{ isset($producto)?$producto->descripcion_producto:'' }}" style="width: 500px; height: 100px;" /><br />
    @error('descripcion_producto')
    <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br />
    <br/>


    <a  href="{{ route('producto.index') }}" class="btn btn-danger">Cancelar</a>
 
    <button type="submit" class="btn btn-success">Guardar</button>
    </div>