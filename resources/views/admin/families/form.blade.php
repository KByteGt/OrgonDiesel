<form method="post" action="{{route('families.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
        <small id="nameHelp" class="form-text text-muted">Nombre de la familia de productos</small>
    </div>
    <div class="form-group">
        <label for="url">URL Id</label>
        <input type="text" class="form-control" id="url" name="url" aria-describedby="urlHelp" required>
        <small id="urlHelp" class="form-text text-muted">Nombre del id de URL, consultar con soporte para la creación de un nuevo URL id</small>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Crear nueva familia
    </button>
</form>
