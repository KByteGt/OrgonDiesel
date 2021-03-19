{{--
<section id="sales" class="sales">
    <div class="container" data-aos="fade-up">
        <h3 class="text-center mb-4">{{ $slot }}</h3>
        <div class="row">

            @if($products)


                {
                    @foreach($products as $product)
                        <x-product-card code="{{$product->code}}" family="{{$product->family_id}}" category="{{$product->category_id}}" url="{{$product->url . '.show'}}"/>

                    <div class="col-lg-3 col-md-6 col-12 ">
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
--}}
