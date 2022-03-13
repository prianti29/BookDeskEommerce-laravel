<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ICategoryRepository;
use App\Interfaces\IProductRepository;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepo;
    protected $categoryRepo;

    public function __construct(IProductRepository $productRepo, ICategoryRepository $categoryRepo)
    {
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["product_list"]= $this->productRepo->get();
       
        return view("admin.products.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["categories"] = $this->categoryRepo->get();
        return view("admin.products.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $this->productRepo->CreateProduct($request);
        return redirect('/admin/products');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function destroy($id)
    {
        // dd($id);
        $data = $this->productRepo->DeleteProduct($id);
        //dd( $data );
        return redirect('/admin/products'); 
    }
    
}
