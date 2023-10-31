@extends('layout')
@section('titulo')
    Administrador de proyectos
@endsection

@section('main')
    <p class="text-center">Administrador de proyectos</p>
    <div class="d-flex justify-content-end">
        <a class="btn btn-sm btn-primary"
        href="{{ route('project.create') }}">Crear nuevo proyecto</a>
    </div>
    @if(session('mensaje'))
        <div class="bg-success text-center p-1 text-white my-2">
            {{ session('mensaje') }}
        </div>
    @endif

    @if(count($proyectos))
        <table class="w-100 mt-5">
            <thead>
                <tr class="bg-dark text-white text-center">
                    <th class="p-2">id</th>
                    <th class="p-2">Proyecto</th>
                    <th class="p-2">Financiamiento</th>
                    <th class="p-2">Capital</th>
                    <th class="p-2">Acciones</th>
                    <th class="p-2"></th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($proyectos as $proyecto)
                    <tr class="border-bottom">
                        <td class="py-1 ">{{ $proyecto->id }}</td>
                        <td class="py-1 ">{{ $proyecto->nombreProyecto }}</td>
                        <td class="py-1 ">{{ $proyecto->fuenteFondos }}</td>
                        <td class="py-1 ">
                            <p class="m-0 fw-bold">Estimado: <span class="fw-normal">${{ $proyecto->montoPlanificado }}</span></p>
                            <p class="m-0 fw-bold">Patrocinado: <span class="fw-normal">${{ $proyecto->montoPatrocinado }}</span></p>
                            <p class="m-0 fw-bold">Propio: <span class="fw-normal">${{ $proyecto->montoFondosPropios }}</span></p>
                        </td>
                        <td class="py-1" class="d-flex flex-column gap-1">
                            <form class="mb-1" action="{{ route('project.destroy') }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $proyecto->id }}">
                                <button type="submit" class="btn btn-sm bg-danger text-white">Eliminar</button>
                            </form>
                            <a href="{{ route('project.edit', $proyecto->id) }}" class="btn btn-sm bg-primary text-white">Editar</a>
                        </td>
                        <td>
                            <a href="{{ route('project.show', $proyecto->id) }}">Ver proyecto</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aún no hay proyectos, comienza creando uno.</p>
    @endif
@endsection