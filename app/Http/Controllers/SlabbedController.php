<?php

namespace App\Http\Controllers;

use App\Models\Slabbed;
use Illuminate\Http\Request;

class SlabbedController extends Controller
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
        //
        $book= new Slabbed();

        if($request['slgrade']==''){
            $book->slgrade= 'No';
        }
        else{
        $book->slgrade= $request['slgrade'];
        }
        if($request['cgcdes']==''){
            $book->cgcdes='No';
        }
        else
        {
            $book->cgcdes=$request['cgcdes'];
        }
        if($request['pgxdes']==''){
            $book->pgxdes='No';
        }
        else
        {
            $book->pgxdes=$request['pgxdes'];
        }
        if($request['slsignature']==''){
            $book->slsignature='No';
        }
        else
        {
            $book->slsignature=$request['slsignature'];
        }
        if($request['slrestoration']==''){
            $book->slrestoration='No';
        }
        else
        {
            $book->slrestoration=$request['slrestoration'];
        }
        if($request['certificate']==''){
            $book->certificate=122;
        }
        else
        {
            $book->certificate=$request['certificate'];
        }
        $book->save();
        return View('backend.customProducts.page3');
       // $a=5;
        // $book= new Slabbed();
        // $book->slgrade= $request['slgrade'];

        // $book->cgcdes=$a;

        // $book->cbcsdes= $request['cbcsdes'];
        // $book->pgxdes= $request['pgxdes'];
        // $book->slsignature= $request['slsignature'];
        // $book->slrestoration= $request['slrestoration'];
        // $book->certificate= $request['certificate'];
        // $book->save();
        // return View('page3');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slabbed  $slabbed
     * @return \Illuminate\Http\Response
     */
    public function show(Slabbed $slabbed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slabbed  $slabbed
     * @return \Illuminate\Http\Response
     */
    public function edit(Slabbed $slabbed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slabbed  $slabbed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slabbed $slabbed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slabbed  $slabbed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slabbed $slabbed)
    {
        //
    }
}
