<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>Home</title>
</head>
<body>

<header>
    <div class="container">
        <div class="navbar">
            @yield('header')
        </div>
    </div>
</header>

<section class="content_section">
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</section>

</body>
</html>
