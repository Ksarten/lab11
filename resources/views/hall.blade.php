<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h2>{{$hall ? "Список всех мест в кинозале ".$hall->name : 'Неверный ID категории' }}</h2>
@if($hall)
    <table border="1">
        <thead>
        <td>id</td>
        <td>место</td>
        @foreach ($hall->seats as $seat)
            <tr>
                <td>{{$seat->id}}</td>
                <td>{{$seat->seat}}</td>
            </tr>
        @endforeach
        </thead>
    </table>
@endif
</body>
</html>
