<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    @if(session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <a href="{{ url('seat') }}" class="btn btn-primary">Назад к списку мест</a>
</div>
<div class="container" style="margin-top: 80px">
    @error('email')
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    @enderror
    @error('password')
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    @enderror
    @error('error')
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    @enderror
    @error('success')
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
</body>
</html>
