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


        <x-section id="products" class="featured-product " tag="productos" title="<span>Lubricantes</span>">

            @if($search)
                <x-slot name="paragraph">
                    <p>Resultado de la busquda: <strong>{{ $search }}</strong></p>
                    <a href="{{route($familyId['url'])}}">ver todo <i class="fas fa-stream"></i></a>
                </x-slot>
            @endif

            <div class="row">
                <div class="col-12 col-lg-3">

                    <div class="card mb-4">
                        <div class="card-header">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Código de producto?" aria-label="Recipient's username" aria-describedby="button-search">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-search"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>

                            <form action="" class="mt-2">
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                        <option selected>Por categoria?</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <p class="card-text">También te puede interesar:</p>
                            <hr>
                            @foreach($families as $family)
                                @if($family['id'] != $familyId['id'])
                                    <a href="{{route($family['url'])}}" class="btn-block">{{$family['name']}}</a>
                                @endif
                            @endforeach
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

                    <div class="row row-cols-1 row-cols-md-3">

                        @forelse($products as $product)
                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset($product['image']) }}" class="card-img-top" alt="Imagen de {{ $product['id'] }}">
                                <div class="card-body item-info">
                                    <h4 class="card-title">{{ $product['id'] }}</h4>
                                    <span>{{ $product['category'] }}</span>
                                    <p>{{ $product['description'] }}</p>
                                    <a href="{{route($familyId['url'] . '.show', $product['id'])}}" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse


                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </x-section>

    </main>

@endsection


