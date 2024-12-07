<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h2>Список залов</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>название</td>
    <td>продолжительность</td>
    @foreach($films as $film)
        <tr>
            <td>{{$film->id}}</td>
            <td>{{$film->name}}</td>
            <td>{{$film->duration}}</td>
        </tr>
    @endforeach
    </thead>
</table>
</body>
</html>
