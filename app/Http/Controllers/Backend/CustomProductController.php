<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomProductController extends Controller
{
    public function index()
    {
        return view('backend.customProducts.index');
    }
}
