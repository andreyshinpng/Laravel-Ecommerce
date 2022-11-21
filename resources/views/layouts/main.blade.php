<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>E-Commerce</title>
</head>
<body>

<header>
    <div class="container">
        <div class="navbar">
            <div class="navbar_left">
                <a href="/"><b>E-Commerce</b></a>
            </div>
            <div class="navbar_right">
                @if (Auth::guest())
                    <a href="/login" class="btn btn-link"><i class="bi bi-box-arrow-in-left"></i> Login</a>
                    <a href="/register" class="btn btn-outline-light">Register</a>
                @else
                    <a href="#" class="btn btn-link"><i class="bi bi-bag"></i> Cart</a>
                    <a href="{{ route('dashboard') }}" class="btn btn-link"><i class="bi bi-person-circle"></i> Profile ({{ Auth::user()->name }})</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" value="{{ route('logout') }}" class="btn btn-outline-light">Logout</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</header>

<section id="content_section">
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</section>

</body>
</html>
