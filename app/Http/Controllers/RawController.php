<?php

namespace App\Http\Controllers;

use App\Models\Raw;
use Illuminate\Http\Request;

class RawController extends Controller
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
        $book= new Raw();
        if($request['slgrade']==''){
            $book->grade= 'No';
        }
        else{
        $book->grade= $request['slgrade'];
        }
        if($request['signature']==''){
            $book->signature= 'No';
        }
        else{
        $book->signature= $request['signature'];
        }
        if($request['restoration']==''){
            $book->restoration= 'No';
        }
        else{
        $book->restoration= $request['restoration'];
        }
        if($request['description']==''){
            $book->description= 'No';
        }
        else{
        $book->description= $request['description'];
        }
        // $book->grade= $request['slgrade'];
        // $book->signature= 'No'; //$request['signature'];
        // $book->restoration= 'No';//$request['restoration'];
        // $book->description= 'No';//$request['description'];
        $book->save();
        return View('backend.customProducts.page3');
    }

    public function Adminstore(Request $request)
    {
        //
        $book= new Raw();
        if($request['slgrade']==''){
            $book->grade= 'No';
        }
        else{
        $book->grade= $request['slgrade'];
        }
        if($request['signature']==''){
            $book->signature= 'No';
        }
        else{
        $book->signature= $request['signature'];
        }
        if($request['restoration']==''){
            $book->restoration= 'No';
        }
        else{
        $book->restoration= $request['restoration'];
        }
        if($request['description']==''){
            $book->description= 'No';
        }
        else{
        $book->description= $request['description'];
        }
        // $book->grade= $request['slgrade'];
        // $book->signature= 'No'; //$request['signature'];
        // $book->restoration= 'No';//$request['restoration'];
        // $book->description= 'No';//$request['description'];
        $book->save();
        return View('backend.AdmincustomProducts.page3');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raw  $raw
     * @return \Illuminate\Http\Response
     */
    public function show(Raw $raw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raw  $raw
     * @return \Illuminate\Http\Response
     */
    public function edit(Raw $raw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raw  $raw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raw $raw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raw  $raw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raw $raw)
    {
        //
    }
}
