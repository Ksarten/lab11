<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h2>{{$film ? "Список всех кинозалов, в которых показывают фильм ".$film->name : 'Неверный ID категории' }}</h2>
@if($film)
    <table border="1">
        <thead>
        <td>id</td>
        <td>название</td>
        @foreach ($film->halls as $hall)
            <tr>
                <td>{{$hall->id}}</td>
                <td>{{$hall->name}}</td>
            </tr>
        @endforeach
        </thead>
    </table>
@endif
</body>
</html>
