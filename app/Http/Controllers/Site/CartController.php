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
                'price' => $product->price - $product->discount_amount,  
                'quantity' => 1,
                'attributes' => array(
                    'featured_image' =>$product->featured_image
                  )
            )); 
            return redirect("/");
        } else {
            return redirect("/"); 
        }
    }
        public function checkout() 
        {  
            $cartCollection = \Cart::getContent(); 
           // dd($cartCollection);
            $data["cartCollection"] =  $cartCollection; 
            return view('site.cart.checkout', $data);  
        }
        public function remove_product($id){
            \Cart::remove($id);
            return redirect("/checkout");
        }
        public function remove_one_product($id){
            $product = \Cart::get($id);
            if($product->quantity==1){
                \Cart::remove($id);
            }
            else{
                \Cart::update($id, array(
                    'quantity' => -1,
                  ));
            }
              return redirect("/checkout");
        }
        public function update_product($id, Request $request){
            $original_product= $this->productRepo->fine($id);
          
            if($original_product->stock >= $request->cart_value){
                $product = \Cart::get($id);
                // dd($product);
                 $ex_product=$product->quantity;
                 $new_product=$request->cart_value;   
                 \Cart::update($id, array(
                     'quantity' => $new_product-$ex_product,
                   ));
            }else{
                flash('stock Out')->error();
            }
              return redirect("/checkout");
        }
        public function add_one_product($id){
            \Cart::update($id, array(
                'quantity' => 1,
              ));
              return redirect("/checkout");
        }
   
   
    }

