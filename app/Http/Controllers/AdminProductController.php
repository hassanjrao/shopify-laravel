<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with(['productCategory'])->latest()->get();


        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategories = ProductCategory::latest()->get();

        $product=null;

        $sizes=Product::sizes();

        return view('admin.products.add_edit', compact('productCategories','product','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'product_category_id'=>'required|exists:product_categories,id',
            'price'=>'required|numeric',
            'sizes'=>'required|array',
            'images'=>'nullable|array',

        ]);

        $product=Product::create([
            'name'=>$request->name,
            'product_category_id'=>$request->product_category_id,
            'price'=>$request->price,
            'sizes'=>$request->sizes,
            'description'=>$request->name,
        ]);

        if($request->has('images')){
            foreach ($request->images as $image) {
                $product->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->route('admin.products.index')->with('success','Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productCategories = ProductCategory::latest()->get();

        $product=Product::findOrFail($id);

        $sizes=Product::sizes();

        return view('admin.products.add_edit', compact('productCategories','product','sizes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'product_category_id'=>'required|exists:product_categories,id',
            'price'=>'required|numeric',
            'sizes'=>'required|array',
            'images'=>'nullable|array',

        ]);

        $product=Product::findOrFail($id);

        $product->update([
            'name'=>$request->name,
            'product_category_id'=>$request->product_category_id,
            'price'=>$request->price,
            'sizes'=>$request->sizes,
            'description'=>$request->name,
        ]);

        if($request->has('images')){

            // delete old images
            $product->clearMediaCollection('images');

            foreach ($request->images as $image) {
                $product->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->route('admin.products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect()->route('admin.products.index')->with('success','Product deleted successfully');
    }
}
