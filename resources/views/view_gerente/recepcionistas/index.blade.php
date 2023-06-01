@extends('partials/template')

@section('app-content')
    @section('activate-report')
        active
    @endsection
    @section('title')
        Recepcionistas del hotel
    @endsection
    @section('app-content-actions')
        @component('partials/actions')
            @section('filter-menu')
            {{-- Aquí las opciones de filtro: <label> <option> </label> --}}
            @endsection
        @endcomponent
    @endsection
    {{-- Aquí el boton de creación (en caso sea necesario) --}}
    @section('button-insert')
        <button class="app-content-headerButton">Agregar recepcionista</button>
    @endsection
@endsection
