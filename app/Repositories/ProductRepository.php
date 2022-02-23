<?php

namespace App\Repositories;

use App\Interfaces\ICategoryRepository;
use App\Interfaces\IImageRepository;
use App\Interfaces\IProductRepository;
use App\Models\Product;
use App\Models\Image;
use PhpParser\Node\Stmt\Foreach_;

class ProductRepository extends BaseRepository implements IProductRepository
{
    protected $model;

    protected $categoryRepo;

    // public function __construct(ICategoryRepository $categoryRepo)
    // {
    //     $this->categoryRepo = $categoryRepo;
    // }

    public function __construct(Product $model ,ICategoryRepository $categoryRepo)
    {
        parent::__construct($model);
        $this->categoryRepo = $categoryRepo;
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
    public function GetMensProductsList()
    {   
        $data["category_list"] = $this->categoryRepo->GetCategoryListWithProducts();
       // dd($data);
        foreach($data as $item){
            dd($item->products());
            foreach ($item->products() as $p)
            {
                //dd($product);
            }
        }
    }
    public function GetWomensProductList()
    {   
    }
    public function GetBegProductList()
    {   
    }
    public function GetFootwareProductList()
    {   
    }
   
}
