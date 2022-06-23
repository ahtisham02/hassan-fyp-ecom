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

    public function Adminindex()
    {
        return view('backend.AdmincustomProducts.index');
    }

    public function Adminstore(Request $request)
    {
        $name =$request->input('search');
        $books = DB::table('books')->where('title', '=', $name)->get();
        $bookss = DB::table('gcd_brnds')->where('title', '=', $name)->get();

        return View('backend.AdmincustomProducts.listing', compact('books'));
    }

    public function Adminshow($id)
    {
        $bok=Book::findOrFail($id);
        return View('backend.AdmincustomProducts.page1n', compact('bok'));
    }

}
