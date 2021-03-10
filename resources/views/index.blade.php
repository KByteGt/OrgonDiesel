@extends('layouts.website')

@section('content')

    <x-hero/>

    <<main id="main">
        @include('components.website.about')

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
