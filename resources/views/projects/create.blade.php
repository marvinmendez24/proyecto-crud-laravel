@extends('layout')
@section('titulo')
    Crea tu proyecto
@endsection
@section('main')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-primary">Volver</a>
    </div>
    <form action="{{ route('project.store') }}" class="form w-md-50 mx-auto mt-3" method="post">
        @csrf
        @include('projects.formulario')
        <input type="submit" value="Crear proyecto" class="btn btn-primary">
    </form>
@endsection