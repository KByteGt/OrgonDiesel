<div class="col mb-4">
    <div class="card h-100 item">
        <img src="{{ asset($product->image) }}" class="card-img-top" alt="Imagen de {{ $product->code }}">
        <div class="card-body item-info">
            <h4 class="card-title">{{ $product->code }}</h4>
            <span>{{ $product->category }}</span>
            <p>{{ $product->description }}</p>
            {{--<p><strong>Modelo:</strong> HX35</p>--}}
        </div>
        <a href="{{route($url, $product->code)}}" class="btn">Ver más</a>
    </div>
</div>
