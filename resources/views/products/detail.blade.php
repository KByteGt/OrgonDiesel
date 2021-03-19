@extends('layouts.website')

@section('content')

    <main id="main" class="mt-nav">


        <x-section id="products" class="featured-product " tag="{{$product->family}}" title="<span>{{$product->code}}</span>">

            <x-slot name="paragraph">
                <a href="{{route($product->url)}}" class="btn">Regresar</a>
            </x-slot>

            <div class="row">
                <div class="col-12 col-lg-5 mb-4">
                    <div class="card h-100 item-view">
                        <div class="card-header item-title">
                            <a href="{{route($product->url)}}" class="mb-0">{{$product->family}}</a> / <span>{{$product->category}}</span>
                        </div>
                        <div class="card-body item-info">
                            @if($product->family == 'Lubricantes')
                                <h4>Código</h4>
                                <p>{{$product->code}}</p>
                                <hr>
                                <h4>Descripción</h4>
                                <p>{{$product->description}}</p>
                                <hr>
                                <h4>Detalle</h4>
                                <p>{!!$product->detail!!}</p>
                                <hr>
                                <h4>Presentación</h4>
                                <p>{{$product->presentation}}</p>

                            @elseif($product->family == 'Turbos')
                                <h4>Código</h4>
                                <p>{{$product->code}}</p>
                                <hr>
                                <h4>Descripción</h4>
                                <p>{{$product->description}}</p>
                                <hr>
                                <h4>Modelo</h4>
                                <p>{{$product->model}}</p>
                                <hr>
                                <h4>Aplicación</h4>
                                <p>{{$product->application}}</p>
                                <hr>
                                <h4>Año</h4>
                                <p>{{$product->year ? $product->year : 'Sin especificar'}}</p>
                            @endif
                        </div>

                        <div class="card-footer">
                            @if($product->family == 'Lubricantes' and $product->datasheet)
                                <a href="{{$product->datasheet}}" target="_blank" class="btn btn-block btn-success mb-2">Datasheet</a>
                            @endif
                            {{-- <button class="btn btn-primary-red">Cotizar</button>--}}
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="Foto de producto {{$product->code}}">
                        {{--
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
                        --}}
                    </div>


                </div>
            </div>

            <x-mostSold>También te puede interesar</x-mostSold>

            <div class="text-center">
                <a href="{{route($product->url)}}" class="btn btn-outline-secondary px-5"><i class="fas fa-long-arrow-alt-left"></i> Regresar</a>
            </div>

        </x-section>

    </main>

@endsection


