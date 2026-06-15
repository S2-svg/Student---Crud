<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        // $categories = DB::select('SELECT * FROM categories');
        // return view('categories.list_user', compact('categories'));
        // $categories = DB::table('categories')->get();
        // return view('categories.list_user', compact('categories'));

        //eloquent
        $categories = CategoryModel::all();
        return view('categories.list_user', compact('categories'));
    }
}
