<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h2>Список мест</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>id_зала</td>
    <td>Номер_места</td>
    <td>Действия</td>
    </thead>
    @foreach($seats as $seat)
        <tr>
            <td>{{$seat->id}}</td>
            <td>{{$seat->hall_id}}</td>
            <td>{{$seat->seat_number}}</td>
            <td><a href="{{url('seat/destroy/'.$seat->id)}}">Удалить</a>
                <a href="{{url('seat/edit/'.$seat->id)}}">Редактировать</a>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $seats->links() }}
</body>
</html>
