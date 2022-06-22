<?php

namespace App\Http\Controllers;

use App\Models\Raw;
use App\Models\Pageo;
use App\Models\Pagefo;
use App\Models\Pageth;
use App\Models\Slabbed;
use App\Models\Gcd_brnd;
use App\Modules\Backend\ProductManagement\Entities\Product;
use App\Modules\Backend\ProductManagement\Entities\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagefoController extends Controller
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
        // dd($request->all());
        //
        $book= new Pagefo();
        $book->title= $request['title'];
        $book->price= $request['price'];
        $book->shopname= Auth::user()->company_name;
        $book->firstname= Auth::user()->first_name;
        $book->lastname= Auth::user()->last_name;
        $book->email= Auth::user()->email;
        $book->password= Auth::user()->password;
        $book->save();
        $pgo= Pageo::latest()->first();
        $R=Slabbed::latest()->first();
        $pgt= Pageth::latest()->first();
        $pgf=Pagefo::latest()->first();
        $book= new Gcd_brnd();
        $book->title= $pgf->title;
        $book->issue_id= $pgo->issue_number;
        $book->publisher= $pgo->publisher;
        $book->year_of_publish= $pgo->year_of_publish;
        $book->variant= $pgo->variant;
        $book->vd= $pgo->vd;
        $book->characters= $pgo->k_characters;
        $book->f_appearance= $pgo->f_appearance;
        $book->grade= 'minio';//$R->grade;
        $book->genre= $pgo->Genre;
        $book->script=$pgo->script;
        $book->art= $pgo->art;
        $book->country=$pgo->country;
        $book->reprint= $pgo->reprint;
        $book->print= $pgo->print;
        $book->path= $pgt->path;
        $book->price= $pgf->price;
        $book->save();

        $product = Product::findOrFail(\Session::get('custom_product_id'));
        $product->unit_price = $request->price;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        $productDetail = new ProductDetail;
        $productDetail->product_id = $product->id;
        $productDetail->is_free_shipping = 0;
        $productDetail->is_flat_rate = 0;
        $productDetail->is_product_wise_shipping = 0;
        $productDetail->is_quantity_multiply = 0;
        $productDetail->warning_quantity = 5;
        $productDetail->is_show_stock_quantity = 1;
        $productDetail->is_show_stock_with_text_only = 0;
        $productDetail->is_hide_stock = 0;
        $productDetail->is_cash_on_delivery = 0;
        $productDetail->is_featured = 0;
        $productDetail->is_todays_deal = 0;
        $productDetail->is_best_sell = 0;
        $productDetail->estimated_shipping_days = "3-7 days";
        $productDetail->save();

        return redirect('/seller');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagefo  $pagefo
     * @return \Illuminate\Http\Response
     */
    public function show(Pagefo $pagefo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagefo  $pagefo
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagefo $pagefo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagefo  $pagefo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagefo $pagefo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagefo  $pagefo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagefo $pagefo)
    {
        //
    }
}
