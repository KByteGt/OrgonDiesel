<form method="post" action="{{route('products.store')}}">
    @csrf
    <div class="form-group">
        <label for="code">Código de producto</label>
        <input type="text" class="form-control" id="code" name="code" aria-describedby="codeHelp">
        <small id="codeHelp" class="form-text text-muted">El código de referencia de Orgon Diesel</small>
    </div>
    <div class="form-group">
        <label for="family">Familia</label>
        <select class="form-control" id="family" name="family">
            @foreach($families as $family)
                <option value="{{$family->id}}">{{$family->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Crear nuevo producto
    </button>
</form>
