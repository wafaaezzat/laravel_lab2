<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function list(){

$categories=  Category::all(); //select * from categories
return View('category.list',['categories'=>$categories]);
 
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $category= new Category;
        $category->name=$request->categoryName;
        $category->save(); // insert into table 
        return redirect()->route('categories.list');

    }

public function delete($id){
    $category =Category::findOrFail($id);
    if ($category){
        $category->delete();
    }
    return redirect()->route('categories.list');
}

function updateform($id){
    $category = Category::find($id);
    return view('category.update',['category'=>$category]);
}

function update(Request $request,$id){
    $category=Category::find($id);
    $category->name = $request->categoryName;
    $category->update();
    return redirect()->route('categories.list');
}

}
