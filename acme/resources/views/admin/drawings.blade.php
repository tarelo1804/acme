@extends('admin.layouts.main')

@section('contenido')
    <h1>Planos Arquitectónicos</h1>
    <div class="p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Versión</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($drawings as $drawing)
                    <tr>
                        <td>{{ $drawing->id }}</td>
                        <td>{{ $drawing->project->name ?? 'N/A' }}</td>
                        <td>{{ $drawing->name }}</td>
                        <td>{{ $drawing->version ?? '1.0' }}</td>
                        <td>{{ $drawing->created_at }}</td>
                        <td>{{ $drawing->status }}</td>
                        <td>
                            <button class="btn btn-danger">X</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection