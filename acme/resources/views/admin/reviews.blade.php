@extends('admin.layouts.main')

@section('contenido')
    <h1>Revisiones</h1>
    <div class="p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Plano</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Comentarios</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->drawing->name ?? 'N/A' }}</td>
                        <td>{{ $review->review_date ?? $review->created_at }}</td>
                        <td>{{ $review->comment }}</td>
                        <td>{{ $review->status ?? 'Pendiente' }}</td>
                        <td>
                            <button class="btn btn-danger">X</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection