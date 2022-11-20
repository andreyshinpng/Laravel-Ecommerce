@extends('layouts.main')

@section('content')
    <h4 class="mb-3"><a href="/" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> All products</a></h4>
    <div id="show_product">
        <h2>{{ $product->title }}</h2>
        <p class="product_description"><b>Description:</b> <br>{{ $product->description }}</p>

        <p class="product_price"><b>${{ $product->price }}</b></p>
        <button class="btn btn-success mt-2"><i class="bi bi-plus-lg"></i> Add to Cart</button>
    </div>
@endsection
