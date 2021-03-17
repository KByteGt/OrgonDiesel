@extends('layouts.app')

@section('content')
    <x-page-view>
        <x-slot name="menu">
            @include('admin.menu')
        </x-slot>

        <x-card title="{{ __('Products') }}">

            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-0">{{ __('Products') }}</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    {{__("New product")}}
                </button>
            </div>

            <br>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('code')}}</th>
                    <th scope="col">{{__('family')}}</th>
                    <th scope="col">{{__('AVG')}}</th>
                    <th scope="col">{{__('status')}}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <a href="#">OD-5420</a>
                    </td>
                    <td>Inyección Diesel</td>
                    <td>0</td>
                    <td>
                        Sin asignar
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>OD-5420</td>
                    <td>Inyección Diesel</td>
                    <td>5</td>
                    <td>
                        Asignado
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>OD-5420</td>
                    <td>Inyección Diesel</td>
                    <td>2.3</td>
                    <td>
                        Sin Asignar
                    </td>
                </tr>
                </tbody>
            </table>


        </x-card>

    </x-page-view>

    <x-modal id="productModal" title="New product">
        @include('admin.products.form')
    </x-modal>
@endsection
