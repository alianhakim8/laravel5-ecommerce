<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('products.show', compact('product'));
        } else {
            return redirect('/products')->with('errors', 'Produk tidak ditemukan');
        }
    }

    public function image($imageName)
    {
        $filePath = storage_path(env('PATH_IMAGE') . 'products/' . $imageName);
        return Image::make($filePath)->response();
    }
}
