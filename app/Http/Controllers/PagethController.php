<?php

namespace App\Http\Controllers;

use App\Models\Pageth;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Modules\Backend\ProductManagement\Entities\Brand;
use App\Modules\Backend\ProductManagement\Entities\Category;
use Illuminate\Support\Facades\Storage;
use App\Modules\Backend\ProductManagement\Entities\ProductImage;

class PagethController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all(s));
        // dd(\Session::get('custom_product_id'));
        $product = Product::findOrFail(\Session::get('custom_product_id'));
        $image = $request->path;
        $fileName = $image->getClientOriginalName();
        $getFileExt   = $image->getClientOriginalExtension();
        $fileNameNew = time().'-'.rand(000,9999).'.'.$getFileExt;
        $destinationPath = public_path().'/uploads/products/galleries/' ;
        $image->move($destinationPath,$fileNameNew);
        $image_data['image'] = $fileNameNew;
        $image_data['product_id'] = $product->id;
        ProductImage::create($image_data);

        $book= new Pageth();
        $book->path= $fileNameNew;
        $book->save();
        $categories = Category::where('is_active','1')->get();
        $brands = Brand::where('is_active','1')->get();
        return View('backend.customProducts.page4')->with(compact('categories','brands'));
    }

    public function Adminstore(Request $request)
    {
        // dd($request->all(s));
        // dd(\Session::get('custom_product_id'));
        $product = Product::findOrFail(\Session::get('custom_product_id'));
        $image = $request->path;
        $fileName = $image->getClientOriginalName();
        $getFileExt   = $image->getClientOriginalExtension();
        $fileNameNew = time().'-'.rand(000,9999).'.'.$getFileExt;
        $destinationPath = public_path().'/uploads/products/galleries/' ;
        $image->move($destinationPath,$fileNameNew);
        $image_data['image'] = $fileNameNew;
        $image_data['product_id'] = $product->id;
        ProductImage::create($image_data);

        $book= new Pageth();
        $book->path= $fileNameNew;
        $book->save();
        $categories = Category::where('is_active','1')->get();
        $brands = Brand::where('is_active','1')->get();
        return View('backend.AdmincustomProducts.page4')->with(compact('categories','brands'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pageth  $pageth
     * @return \Illuminate\Http\Response
     */
    public function show(Pageth $pageth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pageth  $pageth
     * @return \Illuminate\Http\Response
     */
    public function edit(Pageth $pageth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pageth  $pageth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pageth $pageth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pageth  $pageth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pageth $pageth)
    {
        //
    }
}
