<section id="sales" class="sales">
    <div class="container" data-aos="fade-up">
        <div class="row">

            @if($products)
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="item">
                            <div class="item-img">
                                <img src="{{asset($product['image'])}}" class="img-fluid" alt="">
                            </div>
                            <div class="item-info">
                                <h4>{{$product['code']}}</h4>
                                <span>{{$product['family']}}</span>
                                <p>{{$product['description']}}</p>
                                <a href="{{$product['url']}}" class="btn">Ver más</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


        </div>

    </div>
</section>
