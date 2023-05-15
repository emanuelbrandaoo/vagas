<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <h2>@yield('h2')</h2>
    </header>
    <div class="navigation">
        <ul class="nav-bar">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="/user/dashboard">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/dashboard">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/company/dashboard">Empresas</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <a class="nav-link" href="/" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form>
                </li>
            @endauth
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Registrar-se</a>
            </li>
            @endguest
        </ul>
    </div>
    <main class="content">
        @if(session('msg'))
            <div class="alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
        @endif

@if ($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

        @yield('content')
    </main>
    <footer class="footer">
        Emanuel Brandão &copy; 2023
    </footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <h2>@yield('h2')</h2>
    </header>
    <div class="navigation">
        <ul class="nav-bar">
                <li class="nav-item">
                    <a class="nav-link" href="/">Início</a>
                </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="/user/dashboard">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/dashboard">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/company/dashboard">Empresas</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <a class="nav-link" href="/" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form>
                </li>
            @endauth
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Registrar-se</a>
            </li>
            @endguest
        </ul>
    </div>
    <main class="content">
        @if(session('msg'))
            <div class="alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
        @endif

@if ($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

        @yield('content')
    </main>
    <footer class="footer">
        Emanuel Brandão &copy; 2023
    </footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>