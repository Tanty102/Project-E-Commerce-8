<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function showProduct($productId)
    // {
    //     $product = Product::find($productId);

    //     $formatted_price = number_format($product->regular_price, 0, ',', '.');
        
    //     return view('product', compact('product', 'formatted_price'));
    // }
}

