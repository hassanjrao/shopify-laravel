<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function show($id){
        $category = ProductCategory::findorfail($id);
        return view('front.categories.show', compact('category'));
    }
}
