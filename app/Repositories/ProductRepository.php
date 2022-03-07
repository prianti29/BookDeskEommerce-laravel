<?php

namespace App\Repositories;

use App\Interfaces\IProductRepository;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

class ProductRepository extends BaseRepository implements IProductRepository
{
    protected $model;
    protected $categoryRepo;

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
    public function CreateProduct($request)
    {
        try {
            if ($request->hasFile('featured_image')) {
                $path = $request->file('featured_image')->store('product_images', 'public');
            } else {
                $path = null;
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
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('product_images', 'public');
                    $image = new Image;
                    $image->path = $path;
                    $image->product_id = $product->id;
                    $image->save();
                }
            }
            flash('Successfully Added')->success();
        } catch (\Throwable $th) {
            flash('Something went wrong ' . $th->getMessage())->error();
        }
    }
    public function DeleteProduct($id)
    {
        try {
            $product = $this->find($id);
            Storage::disk('public')->delete($product->featured_image);
            $product->delete();
            flash('Successfully Deleted')->success();
        } catch (\Throwable $th) {
            flash('Something Went Wrong')->error();
        }
    }
    public function GetMensProductsList()
    {
      
        $product = DB::table('products as p')
            ->select('p.id', 'p.name', 'p.price', 'p.discount_amount', 'p.featured_image', 'p.stock', 'p.description', 'p.category_id')
            ->join('categories as c', 'c.id', '=', 'p.category_id')
            ->where('c.main_category_id', 0)
            ->get()->toArray();
            return $product;
        
    }
    public function GetWomensProductList()
    {
        $product = DB::table('products as p')
        ->select('p.id', 'p.name', 'p.price', 'p.discount_amount', 'p.featured_image', 'p.stock', 'p.description', 'p.category_id')
        ->join('categories as c', 'c.id', '=', 'p.category_id')
        ->where('c.main_category_id', 1)
        ->get()->toArray();
        return $product;
        
    }
    // public function GetBegProductList()
    // {
    //    $data = Product::get();
    //    //dd($data);
    // }
    // public function GetFootwareProductList()
    // {
    // }
}
