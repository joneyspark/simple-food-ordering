<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FoodItem;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $foods = FoodItem::with('category')
            ->orderBy('name', 'asc')
            ->get();
        // return $foods;
        return view('layouts.frontend.pages.home')->with(['foods' => $foods, 'categories'=> $categories]);
    }
}
