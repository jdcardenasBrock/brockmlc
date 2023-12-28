@extends('layouts.app_dash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Modulo de Cotizador</h1>
                
                <div class="top-right-button-container">
                    @can('crear_cotizacion')
                    <a href="{{route('cotizacion.create')}}">
                    <button type="button" class="btn btn-outline-primary btn-lg top-right-button  mr-1">Generar Cotización</button>
                    </a>
                    @endcan
                </div>
            </div>


            <div class="separator mb-5"></div>
            

        @can('visualizar_cotizacion')
            <table class="table table-bordered" id="cotizacion_table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Referencia</th>
                        <th>Peso en Libras</th>
                        <th>Descripción</th>
                        <th>Marca</th>
                        <th>Notas</th>
                        <th>Fecha de Creación</th>
                       
                        <th></th>
                    </tr>
                </thead>
            </table>
            @endcan
        </div>
    </div>
</div>


@endsection
@push('scripts')
@endpush