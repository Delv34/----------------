<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all() {
       return $products = Product::paginate(5);
    }

    public function get_product(string $id) {
        $product = Product::find($id);
        $comments = Comment::where('product_id', '=', $id)->get();
        return [$product, $comments];
    }

    public function product_sort(Request $request) {
       $parameters = $request->query();
    }

}
