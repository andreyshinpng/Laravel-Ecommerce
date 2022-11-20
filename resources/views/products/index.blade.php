@extends('layouts.main')

@section('content')
    <h1 class="mt-3 mb-3">Products</h1>
    @foreach($products as $key => $product)
        @if (($key + 1) % 5 === 1)
            <div class="row" id="product_row">
        @endif
        <div class="col" id="product">
            <b>{{ $product->title }}</b>
            <p id="product_description">{{ $product->description }}</p>
            <p><b>${{ $product->price }}</b></p>
            <button class="btn btn-success btn-sm mt-2"><i class="bi bi-plus-lg"></i> Add to Cart</button>
        </div>
        @if (($key + 1) % 5 === 0)
            </div>
        @endif
    @endforeach
    <div class="mt-4">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
@endsection
