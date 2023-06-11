@if(isset($quejaReclamo))
    <!-- Formulario para editar una queja o reclamo -->
    <form action="{{ url('/quejas-reclamos/' . $quejaReclamo->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" value="{{ $quejaReclamo->asunto }}" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $quejaReclamo->descripcion }}</textarea><br>

        <button type="submit">Actualizar</button>
    </form>
@else
    <!-- Formulario para crear una nueva queja o reclamo -->
    <form action="{{ url('/quejas-reclamos') }}" method="POST">
        @csrf
        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea><br>

        <button type="submit">Guardar</button>
    </form>
@endif
