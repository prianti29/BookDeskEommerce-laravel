<?php

namespace App\Repositories;

use App\Interfaces\IProductRepository;
use App\Models\Product;

class ProductRepository extends BaseRepository implements IProductRepository
{
    protected $model;

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
    public function CreateProduct($request){
        try {
            if($request->hasFile('featured_image')){
                $path = $request->file('featured_image')->store('product_images','public');
            }else{
                $path= null;
            }
            $product = $this->model;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->discount_amount = $request->discount_amount;
            $product->stock = $request->stock;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->featured_image = $path;
            $product->save();
            flash('Successfully Added')->success();

        } catch (\Throwable $th) {
            flash('Something went wrong '.$th->getMessage())->error();
        }
        
    }

    
}
