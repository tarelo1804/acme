@extends('admin.layouts.main')

@section('contenido')
    <h1>Arquitectos</h1>
    <div class="p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Zona</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($architects as $architect)
                    <tr>
                        <td>{{ $architect->id }}</td>
                        <td>{{ $architect->user->name ?? 'N/A' }}</td>
                        <td>{{ $architect->user->email ?? 'N/A' }}</td>
                        <td>N/A</td>
                        <td>{{ $architect->professional_certificate }}</td>
                        <td>N/A</td>
                        <td>
                            <button class="btn btn-danger">X</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection