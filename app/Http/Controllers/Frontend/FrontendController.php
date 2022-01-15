<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function category() {
        $category = Category::where('status', '1')->get();
        return view('frontend.category', compact('category'));
    }
}
