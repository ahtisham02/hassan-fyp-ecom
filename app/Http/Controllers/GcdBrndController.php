<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Gcd_brnd;
use App\Models\Publisher;
use App\Models\Sbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GcdBrndController extends Controller
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
        $name =$request->input('search');
        $books = DB::table('books')->where('title', '=', $name)->get();

        $bookss = DB::table('gcd_brnds')->where('title', '=', $name)->get();

        // $sbooks = DB::table('sbooks')->where('name', '=', $name)->get();

        return View('backend.customProducts.listing', compact('books'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gcd_brnd  $gcd_brnd
     * @return \Illuminate\Http\Response
     */
    public function show(Gcd_brnd $gcd_brnd)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gcd_brnd  $gcd_brnd
     * @return \Illuminate\Http\Response
     */
    public function edit(Gcd_brnd $gcd_brnd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gcd_brnd  $gcd_brnd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gcd_brnd $gcd_brnd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gcd_brnd  $gcd_brnd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gcd_brnd $gcd_brnd)
    {
        //
    }
}
