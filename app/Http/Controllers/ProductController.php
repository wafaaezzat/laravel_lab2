<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    function list($id){
        $products = Product::where('category_id','=', $id)->get(); 
        return view('products.list',['products'=>$products,'category_id'=>$id]);
    }

    function create($id){
        return view('products.create',['categoryid'=>$id]);
    }

    public function store(Request $request,$id){
        $product=new Product();
        $product->updateOrInsert(['name' => $request->productName,'description'=>$request->productdesc,'slug'=>$request->productslug,'category_id'=>$id,'available'=>1]);
        return redirect()->route('categories.products.list',$id);
    }

    function updateform($id){
        $product = product::find($id);
        return view('products.update',['product'=>$product]);
    }

    function update(Request $request,$id){
        $product=product::find($id);
        $product->name = $request->productName;
        $product->update();
        return redirect()->route('categories.products.list',$product->category_id);
    }

    public function delete($id){
        $product =product::findOrFail($id);

        // $category=Category::table('user')->where('userID', '=', $id);
        if ($product){
            $product->delete();
        }
        return redirect()->route('categories.products.list',$product->category_id);
    }
}
