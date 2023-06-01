@extends('partials/template')
@section('app-content')
    @section('activate-habit')
        active
    @endsection
    <div class="app-content-header">
        <h1 class="app-content-headerText">Habitacion {{ $habitacion->nro_habitacion }}</h1>
        <button class="mode-switch" title="Switch Theme">
            <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" width="24" height="24" viewbox="0 0 24 24">
                <defs></defs>
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
        </button>
    </div>
@endsection
