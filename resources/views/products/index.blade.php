@extends('layouts.main')

@section('header')
    <div class="navbar_left">
        <a href="/">Home page</a>
    </div>
    <div class="navbar_right">
        <a href="#">Cart</a>
        <a href="#">Login</a>
        <a href="#">Register</a>
    </div>
@endsection

@section('content')
    <div class="product_wrapper">
        @foreach ($products as $product)
            <div class="product">
                <h3>{{ $product->title }}</h3>
                <p>Description: {{ $product->description }}</p>
                <p><b>Price: ${{ $product->price }}</b></p>
            </div>
        @endforeach
    </div>
@endsection
