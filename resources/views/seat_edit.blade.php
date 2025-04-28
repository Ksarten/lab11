<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21з</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Редактирование места</h2>
<form method="post" action="{{ url('seat/update/'.$seat->id) }}">
    @csrf
    <div>
        <label>Номер места</label>
        <input type="text" name="name" value="{{ old('name', $seat->seat_number) }}" />
        @error('name')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Номер кинозала:</label>
        <select name="hall_id">
            @foreach ($halls as $hall)
                <option value="{{ $hall->id }}"
                        @if(old('hall_id', $seat->hall_id) == $hall->id) selected @endif>
                    {{ $hall->name }}
                </option>
            @endforeach
        </select>
        @error('hall_id')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" value="Сохранить">
</form>
</body>
</html>
