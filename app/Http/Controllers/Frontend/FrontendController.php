<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
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

    public function viewcategory($slug) {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('category_id', $category->id)->where('status','1')->get();
            return view('frontend.products.index', compact('category', 'products'));
        } else {
            return redirect('/')->with('status', "Táto adresa neexistuje");
        }
    }

    public function productview($cate_slug, $prod_slug) {
        if (Category::where('slug', $cate_slug)->exists()) {
            if (Product::where('slug', $prod_slug)->exists()) {
                $products = Product::where('slug', $prod_slug)->first();
                return view('frontend.products.view', compact('products'));
            } else {
                return redirect('/')->with('status', "Tento produkt sa nenašiel");
            }
        } else {
            return redirect('/')->with('status', "Táto kategória sa nenašla");
        }
    }
}
