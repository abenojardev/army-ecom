<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class CartController extends Controller
{
    protected $request, $product;
    
    public function __construct(Product $product, Request $request)
    {
        $this->request = $request;
        $this->product = $product;
    }

    public function add($id)
    {   
        if(!Session::exists('cart')){
            Session::put('cart', []);
        }
        
        $cart = Session::get('cart');
        
        array_push($cart, $id);
        // Session::put('cart', $cart);

        dd(
            Session::get('cart')
        );
    }
}
