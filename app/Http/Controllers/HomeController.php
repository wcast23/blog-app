<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        //$allCategories is the object that will contain
        //the data retrieved from the DB
        $allCategories = Category::all();

        //We retrieve the data into the view named "home"
        return view('home', ['categories' => $allCategories]);
    }
}
