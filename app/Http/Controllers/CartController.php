<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get cart items
        $cartItems = session()->get('cart');




        // Merge arrays by size
        $cartItems = $this->mergeArraysBySize($cartItems);


        $cartData=[];

        foreach($cartItems as $productId => $sizes){
            $product = Product::find($productId);
            $cartItems[$productId]['product'] = $product;

            $cartData[]=[
                'product'=>$product,
                'price'=>$product->price,
                'sizes'=>$sizes
            ];

        }

        // calculate total price
        $totalPrice = 0;
        foreach($cartData as $item){
           foreach($item['sizes'] as $size){
               $totalPrice += $item['price'] * $size['quantity'];
           }
        }

        // dd($totalPrice);


        return view('front.cart.index', compact('cartItems','totalPrice'));

    }

    // Function to merge arrays with the same size
    function mergeArraysBySize($array) {
        $mergedArray = [];
        foreach ($array as $item) {
            $productId = $item["product_id"];
            $size = $item["size"];
            $quantity = (int)$item["quantity"];
            if (!isset($mergedArray[$size][$productId])) {
                $mergedArray[$size][$productId] = [
                    "quantity" => $quantity,
                    "size" => $size,
                ];
            } else {
                $mergedArray[$size][$productId]["quantity"] += $quantity;
            }
        }
        $finalResult = [];
        foreach ($mergedArray as $size => $products) {
            foreach ($products as $productId => $data) {
                $finalResult[$productId][] = $data;
            }
        }
        return $finalResult;
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'size' => 'required'
        ]);

        // Add to cart
        session()->push('cart', [
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'size' => $request->size
        ]);

        return response()->json([
            'message' => 'Product added to cart successfully!'
        ], 200);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productId,$size)
    {
        // Remove from cart
        $cart = session()->get('cart');

        foreach($cart as $index => $item){
            if($item['product_id'] == $productId && $item['size'] == $size){
                unset($cart[$index]);

            }
        }

        session()->put('cart', $cart);


        return back()->with('success', 'Product removed from cart successfully!');
    }
}
