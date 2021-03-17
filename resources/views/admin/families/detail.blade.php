@extends('layouts.app')

@section('content')

    <div class="container">
        <x-status/>
        <x-errors text="Family Product" strong=""/>
    </div>

    <x-page-view>
        <x-slot name="menu">
            @include('admin.menu')
        </x-slot>

        <x-card title="{{ __('Families') }}">

            <form action="{{route('families.update', $family->id)}}" method="post">
                <h4>{{$family->name}}</h4>
                <p>URL: {{$family->url}}</p>
                <p>Fecha de creación: {{$family->created_at}}</p>
                <p>Fecha de actualización: {{$family->updated_at}}</p>
                <p>Estado: {{$family->active == 1 ? 'activo' : 'No activo'}}</p>
            </form>

            <div class="text-center">
                <a href="{{route('families.index')}}" class="btn btn-outline-secondary">Regresar</a>
            </div>


        </x-card>

    </x-page-view>

@endsection
