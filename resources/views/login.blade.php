<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Блок для вывода ошибок -->
@if($errors->has('error'))
    <div class="fixed-top text-center" style="margin-top: 60px;">
        <div class="alert alert-danger alert-dismissible fade show d-inline-block" role="alert">
            {{ $errors->first('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Кинотеатр</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                           href="{{ url('seat') }}">Места в залах</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('seat') }}">Все места</a></li>
                            <li><a class="dropdown-item" href="{{ url('seat/create') }}">Добавить место</a></li>
                        </ul>
                    </li>
                </ul>

                @if(!Auth::user())
                    <form class="d-flex" method="post" action="{{ url('auth') }}">
                        @csrf
                        <div class="d-flex" style="gap: 15px;">
                            <input class="form-control"
                                   type="email"
                                   name="email"
                                   placeholder="Email"
                                   value="{{ old('email') }}">
                            <input class="form-control"
                                   type="password"
                                   name="password"
                                   placeholder="Пароль">
                            <button class="btn btn-outline-success" type="submit">Войти</button>
                        </div>
                    </form>
                @else
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <span class="nav-link">
                                <i class="fa fa-user me-1"></i>
                                {{ Auth::user()->name }}
                            </span>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="btn btn-outline-light" href="{{ url('logout') }}">Выйти</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
