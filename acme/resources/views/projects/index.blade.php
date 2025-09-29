@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Proyectos</h2>
                    <a href="{{ route('projects.create') }}" class="btn btn-primary float-right">Nuevo Proyecto</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Entrega</th>
                                <th>Zona</th>
                                <th>Cliente</th>
                                <th>Arquitecto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->delivery_date }}</td>
                                <td>{{ $project->zone->name }}</td>
                                <td>{{ $project->customer->user->name }}</td>
                                <td>{{ $project->architect->user->name }}</td>
                                <td>
                                    <a href="{{ route('projects.show', $project) }}" class="btn btn-info btn-sm">Ver</a>
                                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection