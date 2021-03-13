@extends('layouts.website')

@section('content')
    {{--
     // Vars
     - $productFamily
     - $productCategoys
     - $products
    --}}

    <main id="main" class="mt-nav">

        <x-section id="products" class="featured-product" tag="productos" title="<span>Lubricantes</span>">

            <div class="row">
                <div class="col col-lg-3">
                    Side Menu
                </div>

                <div class="col col-lg-9">
                    items
                </div>
            </div>

        </x-section>

    </main>

@endsection


