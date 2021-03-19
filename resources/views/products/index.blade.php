@extends('layouts.website')

@section('content')
    {{--
     // Vars
     - 'familyId'
     - 'families'
     - 'categories'
     - 'products'
     - 'search'
    --}}

    <main id="main" class="mt-nav">

        <x-section id="products" class="featured-product " tag="productos" title="<span>{{$family->name}}</span>">

            @if($filter || $search)
            <x-slot name="paragraph">
                @if($filter != null)
                    <h4>{{ $filter->name }}</h4>
                @endif
                @if($search != null)
                    <p>Resultado de la busquda: <strong>{{ $search }}</strong></p>
                @endif
                    <a href="{{route($family->url)}}">ver todo <i class="fas fa-stream"></i></a>
            </x-slot>
            @endif


            <div class="row">
                <div class="col-12 col-lg-3">

                    <div class="card mb-4">
                        <div class="card-header">
                            <form action="{{ route($family->url .'.search') }}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="search" id="search" class="form-control" placeholder="Código de producto?" aria-label="Search field" aria-describedby="button-search">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-search"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="card-body">

                            <x-category-menu id="{{$family->id}}"/>

                        </div>

                        <div class="card-footer">

                            <x-family-menu id="{{$family->id}}"/>

                        </div>

                    </div>

                    <p class="px-2">Si deseas más información no dudes en llamarnos o consultando en nuestras redes sociales</p>
                    <div class="px-2 mb-4">
                        <a href="https://www.facebook.com/orgondiesel/" class="btn-block"><i class="fab fa-facebook-square"></i> @orgondiesel</a>
                        <a href="https://wa.me/50254637035" class="btn-block"><i class="fab fa-whatsapp"></i> +502 5463 7035</a>
                        <a href="tel:+50225000200" class="btn-block"><i class="fas fa-fax"></i> +502 2500 0200</a>
                    </div>


                </div>

                <div class="col-12 col-lg-9 products-view">
                    <x-errors text="Error" strong="!"/>
                    <x-status/>

                    @if(count($products) > 0)
                    <div class="row row-cols-1 row-cols-md-3">

                        @foreach($products as $product)
                            <x-product-card code="{{$product->code}}" family="{{$product->family_id}}" category="{{$product->category_id}}" url="{{$family->url . '.show'}}"/>
                        @endforeach


                    </div>

                    {{$products->links()}}

                    @else
                        <p class="text-center text-muted mt-5">
                            <span class="text-danger" style="font-size: 3rem">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                            <br/>
                            No hay productos disponibles por el momento
                        </p>
                        <hr class="mx-5 align-self-center"/>
                        <p class="text-center text-muted mb-5">
                            puedes ponerte en contacto con nosotros, con gusto te atenderemos
                            <br/>
                            <strong>info@orgondiesel.com</strong>
                            <br>
                            <strong>+502 2500 0200</strong>
                        </p>
                    @endif

                </div>
            </div>

        </x-section>

    </main>

@endsection


