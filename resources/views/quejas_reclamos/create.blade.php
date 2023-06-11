<div class="row">
        <div class="col-md-12">
            <h2>Quejas y reclamos</h2>
            <p>Si tienes alguna queja o reclamo, por favor déjanos tus comentarios:</p>
            <form action="/quejas-reclamos" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" name="correo" id="correo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>