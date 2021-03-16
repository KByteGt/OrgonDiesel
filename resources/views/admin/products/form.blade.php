<form method="post" action="">
    <div class="form-group">
        <label for="code">Código de producto</label>
        <input type="text" class="form-control" id="code" name="code" aria-describedby="codeHelp">
        <small id="codeHelp" class="form-text text-muted">El código de referencia de Orgon Diesel</small>
    </div>
    <div class="form-group">
        <label for="family">Familia</label>
        <select class="form-control" id="family" name="family">
            <option> </option>
            <option value="1">Inyección Diesel</option>
            <option value="2">Turbos</option>
            <option value="3">Lubricantes</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Crear nuevo producto
    </button>
</form>
