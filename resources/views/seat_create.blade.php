@extends('layout')
@section('content')
    <h2>Добавление места</h2>
    <div class="row justify-content-center">
        <div class="col-4 mt-5">
            <form method="post" action={{url('seat')}} >
                @csrf
                <div class="mb-3">
                    <label for="seat_number" class="form-label">Номер места</label>
                    <input type="text" class="form-control @error('seat_number') is-invalid @enderror"
                           id="seat_number" name="seat_number" aria-describedby="seatNumberHelp" value="{{ old('seat_number') }}">
                    <div id="seatNumberHelp" class="form-text">Введите номер места</div>
                    @error('seat_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="hall" class="form-label">Номер зала</label>
                    <select class="form-select" id="hall" name="hall_id" aria-describedby="hallHelp" value={{ old('hall_id') }} > <option style=". ">
                        @foreach ($halls as $hall)
                            <option value="{{$hall->id}}"
                                    @if(old('hall_id') == $hall->id) selected
                                @endif>{{$hall->name}}
                            </option>
                        @endforeach
                    </select>
                    <div id="hallHelp" class="form-text">Выберите зал</div>
                    @error('hall_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@endsection
