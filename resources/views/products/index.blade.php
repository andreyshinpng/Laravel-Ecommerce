@extends('layouts.main')

@section('content')
    @foreach($products as $key => $product)
        @if (($key + 1) % 5 === 1)
            <div class="row" id="product_row">
        @endif
        <div class="col" id="product">
            <b>{{ $product->title }}</b>
            <p id="product_description">{{ $product->description }}</p>
            <p><b>${{ $product->price }}</b></p>
            <button class="btn btn-success mt-2">Add to Cart</button>
        </div>
        @if (($key + 1) % 5 === 0)
            </div>
        @endif
    @endforeach
    <div class="mt-4">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
@endsection
