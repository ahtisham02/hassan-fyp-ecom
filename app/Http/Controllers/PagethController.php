<?php

namespace App\Http\Controllers;

use App\Models\Pageth;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
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
        if(!empty($request->path))
        {
            $product = Product::findOrFail(\Session::get('custom_product_id'));

            $image_path = Storage::putFile('products/galleries', $request->path);
            $pattern = "/products\/galleries\//";
            $image_path = preg_replace($pattern, '', $image_path);
            $image_data['image'] = $image_path;
            // $product->images()->create($image_data);
            $image_data['product_id'] = $product->id;
            ProductImage::create($image_data);
        }

        $book= new Pageth();
        $book->path= $request['path'];
        $book->save();
        return View('backend.customProducts.page4');
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
