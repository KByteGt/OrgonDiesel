@extends('layouts.website')

@section('content')

    <x-hero/>



    <main id="main">
        <x-most-sold/>

    @include('components.website.about')

    @include('components.website.products')

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('./img/icon_orgondiesel.png') }}" class="img-fluid" alt="Bosch logo">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('./img/brands/bosch.png') }}" class="img-fluid" alt="Bosch logo">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('./img/brands/cummins.png') }}" class="img-fluid" alt="Cummins logo">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('./img/brands/Mcbee.png') }}" class="img-fluid" alt="McBee logo">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('./img/brands/yuko.png') }}" class="img-fluid" alt="Yuko logo">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('./img/brands/detroit-diesel.png') }}" class="img-fluid" alt="Detroit Diesel logo">
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->


    @include('components.website.contac');

</main>

@endsection
