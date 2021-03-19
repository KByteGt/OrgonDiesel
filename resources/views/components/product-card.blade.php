<div class="col mb-4">
    <div class="card h-100 item">
        <img src="{{ asset($product->image) }}" class="card-img-top" alt="Imagen de {{ $product->code }}">
        <div class="card-body item-info">
            @if($family == "1")
                <p>Inyección Diésel</p>
            @elseif($family == "2")
                <h4 class="card-title">{{ $product->code }}</h4>
                <span>{{ $product->description }}</span>
                <p>{{$product->model}}</p>
            @elseif($family == "3")
                <h4 class="card-title">{{ $product->code }}</h4>
                <p>{{ $product->description }}</p>
            @endif
        </div>
        <a href="{{route($url, $product->code)}}" class="btn">Ver más</a>
    </div>
</div>
