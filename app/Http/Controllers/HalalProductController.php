<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HalalProductController extends Controller
{
    public function index()
    {
        return view('halalProducts');
    }

    public function products(Request $request)
    {
        $query = Product::query();

        if ($request->filled('product_name')) {
            $query->where('name', 'like', '%' . $request->product_name . '%');
        }

        if ($request->filled('company_name')) {
            $query->where('company', 'like', '%' . $request->company_name . '%');
        }

        $products = $query->paginate(6);

        return view('products', compact('products'));
    }

    public function category($category)
    {
        $products = Product::where('category', $category)->paginate(6);
        return view('category-products', compact('products', 'category'));
    }
}
