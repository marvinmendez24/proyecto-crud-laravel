@extends('layout')
@section('titulo')
    Edita tu proyecto
@endsection
@section('main')
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-primary">Volver</a>
    </div>
    <form action="{{ route('project.update', $proyecto->id) }}" class="form w-md-50 mx-auto mt-3" method="post">
        @csrf
        @method('put')
        @include('projects.formulario')
        <input type="submit" value="Editar proyecto" class="btn btn-primary">
    </form>
@endsection