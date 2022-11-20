<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->orderBy('updated_at', 'desc')
            ->paginate(15);
        return view('products.index', [
            'products' => $products
        ]);
    }
}
