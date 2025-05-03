@extends('layout')

@section('content')
    <div class="container mt-5 pt-4">
        <h2 class="mb-4">Редактирование места</h2>

        <form method="post" action="{{ url('seat/update/'.$seat->id) }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Номер места</label>
                <input type="text" class="form-control @error('seat_number') is-invalid @enderror"
                       name="seat_number" value="{{ old('seat_number', $seat->seat_number) }}">
                @error('seat_number')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Номер кинозала:</label>
                <select class="form-select @error('hall_id') is-invalid @enderror" name="hall_id">
                    @foreach ($halls as $hall)
                        <option value="{{ $hall->id }}"
                                @if(old('hall_id', $seat->hall_id) == $hall->id) selected @endif>
                            {{ $hall->name }}
                        </option>
                    @endforeach
                </select>
                @error('hall_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a href="{{ url('seat') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection
