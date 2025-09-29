@extends('admin.layouts.main')

@section('contenido')
    <h1>Proyectos</h1>
    <div class="p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Arquitecto</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->customer->user->name ?? 'N/A' }}</td>
                        <td>{{ $project->architect->user->name ?? 'N/A' }}</td>
                        <td>{{ $project->start_date }}</td>
                        <td>{{ $project->status }}</td>
                        <td>
                            <button class="btn btn-danger">X</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection