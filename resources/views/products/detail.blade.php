@extends('layouts.website')

@section('content')
    {{--
     // Vars
     - $productFamily
     - $productCategoys
     - $products
    --}}

    <main id="main" class="mt-nav">


        <x-section id="products" class="featured-product " tag="lubricante" title="<span>{{$code}}</span>">

            <x-slot name="paragraph">
                <p><strong>4T 20W-50 Semisintetico 1L</strong></p>
            </x-slot>

            <div class="row">
                <div class="col-12 col-lg-5 mb-4">
                    <div class="card h-100 item-view">
                        <div class="card-header item-title">
                            <a href="/lubricantes" class="mb-0">Lubricantes</a> / <span>Motos</span>
                        </div>
                        <div class="card-body item-info">
                            <h4>Código</h4>
                            <p>{{$code}}</p>
                            <hr>
                            <h4>Descripción</h4>
                            <p>4T 20W-50 Semisintetico 1L</p>
                            <hr>
                            <h4>Detalle</h4>
                            <p> - </p>
                            <hr>
                            <h4>Presentación</h4>
                            <p>1 Litro</p>
                            <hr>
                            <h4>Categoria</h4>
                            <p>Moto</p>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-primary-red">Cotizar</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="card-img-top" alt="...">
                        <div class="row row-cols-3">
                            <div>
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div>
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div>
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <x-mostSold>También te puede interesar</x-mostSold>

            <div class="text-center">
                <a href="{{route('lubricants')}}" class="btn btn-outline-secondary px-5"><i class="fas fa-long-arrow-alt-left"></i> Regresar</a>
            </div>

        </x-section>

    </main>

@endsection


