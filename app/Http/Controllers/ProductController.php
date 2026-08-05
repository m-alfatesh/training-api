<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
public function index(){
    $products = Product::all();
    return response()->json([
    'success' => true,
    'message' => 'Products retrieved successfully',
    'data' => $products
]);
}
public function show($id){
    $product = Product::find($id);
    if (!$product) {
        return response()->json([
            'success' => false,
            'message' => 'Product not found'
        ], 404);
    }

    return response()->json([
        'success' =>true,
        'message' =>'product retrieved successfully',
        'data' => $product
    ]);
    }

public function store(StoreProductRequest $request){
    $product = Product::create([


            'name' => $request->name,
            'description' => $request->description,
            'price'=>  $request->price,
            'quantity' =>$request->quantity,
            'is_active'=> $request ->is_active,
        ]
    );
     return response()->json(
        [
            'success'=>true,
            'message'=> 'Product created successfully',
            'data'=>$product,
        ]
    );
}
public function update(UpdateProductRequest $request,$id){
    $product = Product::find($id);
if (!$product) {
        return response()->json([
            'success' => false,
            'message' => 'Product not found'
        ], 404);
    }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->is_active = $request->is_active;
    $product->save();
    return response()->json([
        'success' => 'true',
        'descriptopn' => 'the Product has been Updated',
        'data' => $product,
    ]);
}
public function destroy($id){
    $product = Product::find($id);
    if (!$product) {
        return response()->json([
            'success' => false,
            'message' => 'Product not found'
        ], 404);
    }
    $product->delete();
    return response()->json([
        'description' => 'Product deleted successfully'
    ]);
}
}
