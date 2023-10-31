@extends('layout');
@section('titulo')
    {{$proyecto->nombreProyecto}}
@endsection
@section('main')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-primary">Volver</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3>Información general:</h3>
            <p class="fw-bold">
                Nombre: <span class="d-block fw-normal">{{$proyecto->nombreProyecto}}</span>
            </p>
            <p class="fw-bold">
                Financiador: <span class="d-block fw-normal">{{$proyecto->fuenteFondos}}</span>
            </p>
        </div>
        <div class="col-md-4">
            <h3>Detalle de fondos:</h3>
            <p class="fw-bold">
                Planificados: <span class="d-block fw-normal">${{$proyecto->montoPlanificado}}</span>
            </p>
            <p class="fw-bold">
                Patrocinados: <span class="d-block fw-normal">${{$proyecto->montoPatrocinado}}</span>
            </p>
            <p class="fw-bold">
                Fondos propios: <span class="d-block fw-normal">${{$proyecto->montoFondosPropios}}</span>
            </p>
        </div>
        <div class="col-md-8">
            <a href="{{ route('pdf.show', $proyecto->id) }}" class="btn btn-success">Descargar Informe</a>
        </div>
    </div>
@endsection