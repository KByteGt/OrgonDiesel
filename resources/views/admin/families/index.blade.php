@extends('layouts.app')

@section('content')

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Error al llenar el formulario, <strong>{{__('New family')}}</strong></h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

    <x-page-view>
        <x-slot name="menu">
            @include('admin.menu')
        </x-slot>

        <x-card title="{{ __('Families') }}">

            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-0">{{ __('Families') }}</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#familyModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    {{__("New family")}}
                </button>
            </div>

            <br>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('family')}}</th>
                    <th scope="col">{{__('URL')}}</th>
                    <th scope="col">{{__('modified at')}}</th>
                    <th scope="col">{{__('status')}}</th>
                </tr>
                </thead>
                <tbody>

                @forelse($families as $family)
                <tr>
                    <th scope="row">{{$count++}}</th>
                    <td><a href="{{route('families.show', $family->id)}}">{{ $family->name }}</a></td>
                    <td>{{ $family->url }}</td>
                    <td>{{ $family->updated_at }}</td>
                    <td>{{ $family->active == true ? 'activo' : 'No activo' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5"><p class="text-center">No hay familias</p></td>
                </tr>
                @endforelse
                </tbody>
            </table>

            {{ $families->links() }}


        </x-card>

    </x-page-view>

    <x-modal id="familyModal" title="New family">
        @include('admin.families.form')
    </x-modal>
@endsection
