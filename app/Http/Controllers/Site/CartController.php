<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Interfaces\IProductRepository;

use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $productRepo;
    public function __construct(IProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }
    public function add_product($product_id)
    {
        $product = $this->productRepo->find($product_id);
        //dd($product);
        if ($product) {
            \Cart::add(array(
                'id' => $product->id,
                'name' => $product->name,
                //'price' => $product->price_after_discount,
                'quantity' => 1, 
            )); 
            return redirect("/");
        } else {
            return redirect("/"); 
        }
    }
        public function checkout() 
        {  
            $cartCollection = \Cart::getContent(); 
            dd($cartCollection);
            $data["cartCollection"] =  $cartCollection; 
            return view('site.cart.checkout', $data);  
        }
   
    }

