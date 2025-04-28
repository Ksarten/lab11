<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
    <style>     .is-invalid { color: red; }     </style>
</head>
<body>
<h2>Добавление места</h2>
<form method="post" action={{url('seat')}}/>
    @csrf
    <label>Номер места</label>
    <input type="text" name="name" value="{{ old('name') }}"/>
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Номер зала</label>
    <select name="hall_id" value="{{ old('hall_id') }}">
            @foreach ($halls as $hall)
                <option value="{{$hall->id}}"
                    @if(old('hall_id') == $hall->id) selected
                @endif>{{$hall->name}}
            </option>
        @endforeach
    </select>
    @error('hall_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <input type="submit" value="Сохранить">
</body>
</html>
