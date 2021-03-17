@extends('layouts.app')

@section('content')

    <div class="container">
        <x-status/>

        <x-errors text="Error al llenar el formulario" strong="New family"/>

    </div>

    <x-page-view>
        <x-slot name="menu">
            @include('admin.menu')
        </x-slot>

        <x-card title="{{ __('Categories') }}">

            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-0">{{ __('Categories') }}</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#familyModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    {{__("New category")}}
                </button>
            </div>

            <br>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('category')}} <i class="fas fa-sort-down"></i></th>
                    <th scope="col">{{__('family')}}</th>
                    <th scope="col">{{__('updated at')}}</th>
                    <th scope="col">{{__('status')}}</th>
                </tr>
                </thead>
                <tbody>



                @forelse($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td><a href="{{route('categories.show', $category->id)}}">{{ $category->name }}</a></td>
                        <td>{{ $category->family }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>{{ $category->active == true ? 'activo' : 'No activo' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"><p class="text-center">No hay categorias</p></td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            {{ $categories->links() }}


        </x-card>

    </x-page-view>

    <x-modal id="familyModal" title="New family">
        @include('admin.categories.form')
    </x-modal>
@endsection
