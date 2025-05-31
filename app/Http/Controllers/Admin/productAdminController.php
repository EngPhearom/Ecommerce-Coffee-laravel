<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\productModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productAdminController extends Controller
{
    //
    public function getAllProducts(){
        $data = DB::table('product')->select('*')->get();
        return view('Admin.Product.product', ['product' => $data]);
    }

    public function deleteProduct(Request $request){
        $product_id = $request->id;
        $res = DB::table('product')->where('id', $product_id)->delete();
        return response()->json($res);
    }

    public function addProduct(Request $request){
        $product = new productModelAdmin();
        $product->productName = $request->productName;
        $product->desciption = $request->desciption;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->save();
        return response()->json($product);
    }

    public function updateProduct(Request $request){
        $product = productModelAdmin::find($request->id);
        if($product){
            $product->productName = $request->productName;
            $product->desciption = $request->desciption;
            $product->category = $request->category;
            $product->price = $request->price;
            $product->save();
        }
        return response()->json($product);
    }
}
