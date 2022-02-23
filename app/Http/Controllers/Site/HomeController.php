<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Interfaces\IProductRepository;
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
        $data["mens_products"]= $this->productRepo->GetMensProductsList();
        $data["womens_product"]= $this->productRepo->GetWomensProductList();
        $data["Beg_product"]= $this->productRepo->GetBegProductList();
        $data["footware_product"]= $this->productRepo->GetFootwareProductList();
      
        return view('site.home', $data);
    }


}
