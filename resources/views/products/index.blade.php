@extends('layouts.website')

@section('content')
    {{--
     // Vars
     - $productFamily
     - $productCategoys
     - $products
    --}}

    <main id="main" class="mt-nav">


        <x-section id="products" class="featured-product " tag="productos" title="<span>Lubricantes</span>">

            <x-slot name="paragraph">
                <p>Resultado de la busquda: <strong>vehiculos livianos</strong></p>
                <a href="#">ver todo <i class="fas fa-stream"></i></a>
            </x-slot>

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
                                        <option value="1">Motocicletas</option>
                                        <option value="2">Vehiculos livianos</option>
                                        <option value="3">Vehiculos semi pesados y pesados</option>
                                        <option value="4">Refrigerantes</option>
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
                            <a href="#" class="btn-block">Tubos</a>
                            <a href="#" class="btn-block">Inyección Diésel</a>
                        </div>
                    </div>

                    <p class="px-2">Si deseas más información no dudes en llamarnos o consultando en nuestras redes sociales</p>
                    <div class="px-2 mb-4">
                        <a href="" class="btn-block"><i class="fab fa-facebook-square"></i> @orgondiesel</a>
                        <a href="" class="btn-block"><i class="fab fa-whatsapp"></i> +502 5463 7035</a>
                        <a href="" class="btn-block"><i class="fas fa-fax"></i> +502 2500 0200</a>
                    </div>


                </div>

                <div class="col-12 col-lg-9 products-view">

                    <div class="row row-cols-1 row-cols-md-3">

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25009</h4>
                                    <span>Motocicleta</span>
                                    <p >4T 20W-50 Semisintetico 1L</p>
                                    <a href="{{route('lubricants.show', 'OD-25009')}}" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0320.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25012</h4>
                                    <span>Vehiculos Livianos</span>
                                    <p class="card-text">20W-50 Semisintetico Plus 5L</p>
                                    <a href="{{route('lubricants.show', 'OD-25012')}}" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25009</h4>
                                    <span>Motocicleta</span>
                                    <p >4T 20W-50 Semisintetico 1L</p>
                                    <a href="{{route('lubricants.show', 'OD-25009')}}" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0320.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25012</h4>
                                    <span>Vehiculos Livianos</span>
                                    <p class="card-text">20W-50 Semisintetico Plus 5L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25009</h4>
                                    <span>Motocicleta</span>
                                    <p class="card-text">4T 20W-50 Semisintetico 1L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0320.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25012</h4>
                                    <span>Vehiculos Livianos</span>
                                    <p class="card-text">20W-50 Semisintetico Plus 5L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25009</h4>
                                    <span>Motocicleta</span>
                                    <p class="card-text">4T 20W-50 Semisintetico 1L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25009</h4>
                                    <span>Motocicleta</span>
                                    <p class="card-text">4T 20W-50 Semisintetico 1L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0320.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25012</h4>
                                    <span>Vehiculos Livianos</span>
                                    <p class="card-text">20W-50 Semisintetico Plus 5L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0342.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25009</h4>
                                    <span>Motocicleta</span>
                                    <p class="card-text">4T 20W-50 Semisintetico 1L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0320.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25012</h4>
                                    <span>Vehiculos Livianos</span>
                                    <p class="card-text">20W-50 Semisintetico Plus 5L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 item">
                                <img src="{{ asset('./products/lubricants/DSC_0320.png') }}" class="card-img-top" alt="...">
                                <div class="card-body item-info">
                                    <h4 class="card-title">OD-25012</h4>
                                    <span>Vehiculos Livianos</span>
                                    <p class="card-text">20W-50 Semisintetico Plus 5L</p>
                                    <a href="#" class="btn">Ver más</a>
                                </div>
                            </div>
                        </div>

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


