@extends('layout')

@section('content')
    <div class="container mt-5 pt-4">
        <h2 class="mb-4">Список мест</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>ID зала</th>
                    <th>Номер места</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($seats as $seat)
                    <tr>
                        <td>{{ $seat->id }}</td>
                        <td>{{ $seat->hall_id }}</td>
                        <td>{{ $seat->seat_number }}</td>
                        <td>
                            <a href="{{ url('seat/edit/'.$seat->id) }}" class="btn btn-sm btn-primary me-2">Редактировать</a>
                            <a href="{{ url('seat/destroy/'.$seat->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Удалить место?')">Удалить</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <div>
                {{ $seats->links() }}
            </div>
            <div>
                <a href="{{ url('/seat/create') }}" class="btn btn-success">Добавить место</a>
            </div>
        </div>
    </div>
@endsection
