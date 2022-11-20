<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                <a href="#">Cart</a>
                <a href="#">Login</a>
                <a href="#" class="btn btn-primary">Register</a>
            </div>
        </div>
    </div>
</header>

<section id="content_section">
    <div class="container">
        <div class="content">
            <div class="row" id="product_row">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="col" id="product">
                        <h4>Test product</h4>
                        <p id="product_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lobortis posuere.</p>
                        <p style="font-weight: bold">Price: $1.23</p>
                        <button class="btn btn-success mt-2">Add to Cart</button>
                    </div>
                @endfor
            </div>
            <div class="row" id="product_row">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="col" id="product">
                        <h4>Test product</h4>
                        <p id="product_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lobortis posuere.</p>
                        <p style="font-weight: bold">Price: $1.23</p>
                        <button class="btn btn-success mt-2">Add to Cart</button>
                    </div>
                @endfor
            </div>
            <div id="pagination" class="mt-3">
                <b>Pages:</b>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
        </div>
    </div>
</section>

</body>
</html>
