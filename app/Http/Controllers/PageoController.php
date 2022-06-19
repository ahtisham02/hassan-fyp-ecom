<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Pageo;
use App\Models\Sbook;
use App\Models\Country;
use App\Models\Gcd_brnd;
use App\Models\Gcd_award;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Gcd_biblio_entry;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PageoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $name =$request->input('story_ptr_id');
    // $students = attendance::where('name',$name)->get();
    $books = DB::table('gcd_biblio_entry')
                ->where('story_ptr_id', '=', $name)->get();
    return View('test', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $bok=Gcd_brnd::findOrFail($id);
        return View('page1nn', compact('bok'));
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

        $bok= Gcd_brnd::latest()->first();
        return View('backend.customProducts.page2', compact('bok'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pageo  $pageo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bok=Book::findOrFail($id);
        return View('backend.customProducts.page1n', compact('bok'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pageo  $pageo
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    $books=Gcd_award::findOrFail(1);
    return View('test', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pageo  $pageo
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $bok=Sbook::findOrFail($id);
          $p=Publisher::findOrFail($bok->id);
          $c=Country::findOrFail($bok->country_id);
        return View('page1sbook', compact('bok','p','c'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pageo  $pageo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pageo $pageo)
    {
        //
    }
}
