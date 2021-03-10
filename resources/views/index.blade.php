@extends('layouts.website')

@section('content')

    <x-hero/>

    <<main id="main">
        {{-- @include('components.website.about')--}}
        <x-section id="about" class="about section-bg" tag="About" title="Un poco de <span>nosotros</span>">
            <div class="col-lg-6">
                <img src="{{ asset('./img/about_od.jpg') }}" alt="Orgon Diesel" class="img-fluid">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center">
                <h3>ORGON DIESEL PARTS</h3>
                <p class="font-italic">
                    Somos  inspirados por la visión, misión, principios y valores, para dar a nuestros clientes un servicio y producto extraordinario.
                </p>
                <ul>
                    <li>
                        <i class="fas fa-box-open"></i>
                        <div>
                            <h5>Productos</h5>
                            <p>Nos consta que el producto fabricado por nuestros proveedores cumple con los más altos estándares de calidad como fiabilidad, durabilidad y funcionalidad, lo que nos permite permanecer en el mercado llenando las expectativas de nuestros clientes.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-building"></i>
                        <div>
                            <h5>Servicio</h5>
                            <p>Estamos comprometidos con nuestros clientes a darles un servicio extraordinario, en primer lugar que el producto lo tengan en sus manos en el menor tiempo posible, capacitándonos constantemente para escuchar y resolver en el menor tiempo posible sus necesidades.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </x-section>

        <x-section id="products" class="" tag="Productos" title="Nuestros <span>productos</span>">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('./img/logo_orgondiesel.png') }}" class="img-fluid" alt="">
            </div>
        </x-section>

        <section id="products" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('Products')</h2>
                    <h3>Nuestros <span>productos</span></h3>
                    <p></p>
                </div>

                <div class="row">

                </div>
            </div>
        </section>

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/logo_orgondiesel.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/logo_orgondiesel.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/logo_orgondiesel.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/logo_orgondiesel.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/logo_orgondiesel.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/logo_orgondiesel.png') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <section id="contact" class="about ">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('Contact')</h2>
                    <h3><span>Contáctanos</span></h3>
                    <p></p>
                </div>

                <div class="row">

                </div>
            </div>
        </section>

    </main>

@endsection
