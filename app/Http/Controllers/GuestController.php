<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function products(Request $request)
    {
        $products = Part::latest()->get();
        return view('products', compact('products'));
    }
}
