<div class="dropdown d-block d-lg-none">
    <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categorias
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach($categories as $category)
            <a href="{{ route($family->url, $category->id) }}" class="dropdown-item"> {{ $category->name }}</a>
        @endforeach
    </div>
</div>

<div class="d-none d-sm-none d-md-none d-lg-block">
    <p class="card-text">Categorias</p>
    <hr>
    @foreach($categories as $category)
        <a href="{{ route($family->url, $category->id) }}" class="btn-block"><i class="fas fa-caret-right"></i> {{ $category->name }}</a>
    @endforeach
</div>
