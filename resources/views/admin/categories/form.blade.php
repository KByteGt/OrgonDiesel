<form method="post" action="{{route('categories.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
        <small id="nameHelp" class="form-text text-muted">Nombre de la categoria del producto</small>
    </div>
    <div class="form-group">
        <label for="familyProduct">Familia</label>
        <select class="form-control" id="familyProduct" name="family">
            @foreach($families as $family)
            <option value="{{$family->id}}">{{$family->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Crear nueva familia
    </button>
</form>
