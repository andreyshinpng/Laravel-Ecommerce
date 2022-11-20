@extends('layouts.main')

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
