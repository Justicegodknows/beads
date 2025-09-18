<?php
namespace App\Http\Controllers;

use App\Models\productcategory;
use Illuminate\Http\Request;

class productcategoryController extends Controller
{
    public function index()
    {
        // load the needed data
        $productcategory = productcategory::all();

        // send to view + return response
        return view('productcategory.index', compact('productcategory'));
    }

    public function show($id)
    {
        $productcategory = productcategory::find($id);

        return view('productcategory.show', compact('productcategory'));
    }
}
