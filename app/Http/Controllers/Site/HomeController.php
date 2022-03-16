<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Interfaces\IProductRepository;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productRepo;

    public function __construct(IProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }
    public function index()
    {
        $data["mens_products"] = $this->productRepo->GetMensProductsList();
        $data["womens_product"] = $this->productRepo->GetWomensProductList();
        $data["category_list_men"] = Category::where('main_category_id', 0)->get();
        $data["category_list_women"] = Category::where('main_category_id', 1)->get();
    
        return view('site.home', $data); 
    }

    //Single Product
    public function products($id)
    {
        $data["category_list_men"] = Category::where('main_category_id', 0)->get();
        $data["category_list_women"] = Category::where('main_category_id', 1)->get();  
        $data["products"] = $this->productRepo->find($id); 
        return view('site.products.single', $data);
    }
    public function womens($id)
    {
        $data["category_list_men"] = Category::where('main_category_id', 0)->get();
        $data["category_list_women"] = Category::where('main_category_id', 1)->get();  
        //dd($id);
        $data["womens_product"] = Product::where('category_id',$id)->get();
       
       // dd($data);
        return view('site.products.womens', $data); 
   
    }
    public function mens($id)
    { 
        $data["category_list_men"] = Category::where('main_category_id', 0)->get();
        $data["category_list_women"] = Category::where('main_category_id', 1)->get();  
       // dd($id);
        $data["mens_product"] = Product::where('category_id',$id)->get();
        return view('site.products.mens', $data); 
   
    }
}
