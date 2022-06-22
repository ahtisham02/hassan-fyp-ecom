<?php

namespace App\Http\Controllers\Backend;

use App\Models\Book;
use App\Models\Pageo;
use App\Models\Gcd_brnd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modules\Backend\ProductManagement\Entities\Product;

class CustomProductController extends Controller
{
    public function index()
    {
        return view('backend.customProducts.index');
    }

    public function store(Request $request)
    {
        $name =$request->input('search');
        $books = DB::table('books')->where('title', '=', $name)->get();
        $bookss = DB::table('gcd_brnds')->where('title', '=', $name)->get();

        return View('backend.customProducts.listing', compact('books'));
    }

    public function show($id)
    {
        $bok=Book::findOrFail($id);
        return View('backend.customProducts.page1n', compact('bok'));
    }

    public function Step2Index()
    {
        $bok= Gcd_brnd::latest()->first();
        return View('backend.customProducts.page2', compact('bok'));
    }

    public function Step2Store(Request $request)
    {
        // dd($request->all());
        $book= new Pageo();
        $book->c_title= $request['c_title'];
        $book->issue_number= $request['issue_number'];
        $book->publisher= $request['publisher'];
        $book->year_of_publish= $request['year_of_publish'];
        if($request['variant']==''){
            $book->variant= 'No';
        }
        else{
        $book->variant= $request['variant'];
        }
        if($request['vd']==''){
            $book->vd= 'No';
        }
        else{
        $book->vd= $request['vd'];
        }
        // $book->variant= 'No';//$request['variant'];
        // $book->vd= 'No';//$request['vd'];
        $book->k_characters= $request['k_characters'];
        if($request['f_appearance']==''){
            $book->f_appearance= 'No';
        }
        else{
        $book->f_appearance= $request['f_appearance'];
        }
     //$book->f_appearance= $request['f_appearance'];
        $book->grade= 'Very Good(VG)';
        $book->Genre= $request['genre'];
        $book->script= $request['script'];
        $book->art= $request['art'];
        $book->country= $request['country'];
        $book->reprint= $request['reprint'];
        $book->print= $request['print'];
        $result = $book->save();
        if($result)
        {
            $product = new Product;
            $product->seller_id = Auth::user()->id;
            $product->category_id  = 1;
            $product->name = $request['c_title'];
            $product->unit = 'Piece';
            $product->tags = "";
            $product->minimum_qty = 10;
            $product->barcode = $request['issue_number'];
            $product->sku = $request['issue_number'];
            $product->is_refundable = 0;
            $product->unit_price = 0;
            $product->purchase_price = 2;
            $product->sale_price = 0;
            $product->discount = 0;
            $product->quantity = 100;
            $product->shipping_cost = 80;
            $product->slug = $request['issue_number'];
            $product->total_viewed = 0;
            $product->is_active = 1;
            $product->publish_stat = 1;
            $product->save();
            \Session::put("custom_product_id", $product->id);

        }

    }
}
