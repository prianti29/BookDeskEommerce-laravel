<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Enums\MainCategory;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["category_list"] = category::get();
        //dd($data);
        return view('admin.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["main_category"] = MainCategory::asSelectArray();
        return view('admin.categories.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        // $this->categoryRepo->CreateCategory($request);
        // return redirect('/admin/categories');
        $category = new Category();
        $category->name = $request->name;
        $category->main_category_id = $request->main_category_id;
        $category->save();
        flash('Successfully Created')->success();
        return redirect('/admin/categories');
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
        
        $category = category::find($id);
        if (!$category) {
            return redirect('/admin/categories');
        }
        $data["category"] = $category;
        $data["main_category"] = MainCategory::asSelectArray();
        return view('admin.categories.edit', $data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(CategoryRequest $request, $id)
    // {
    //     $category = category::UpdateCategory($id);
      
    //     if (!$category) {
    //         return redirect('/categories');
    //     }
    //     $category->name = $request->category_name;
    //     $category->save();
    //     return redirect('admin/categories');
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);
        if (!$category) {
            return redirect('/admin/categories');
        }
        $category->delete();
        return redirect('/admin/categories');
    }
}
