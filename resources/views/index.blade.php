@extends('layouts.website')

@section('content')

    <x-hero/>

    <<main id="main">
        @include('components.website.about')

       @include('components.website.products')

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">

                <div class="row">



                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/brands/1.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/brands/2.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/brands/3.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/brands/4.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('./img/brands/5.png') }}" class="img-fluid" alt="">
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
