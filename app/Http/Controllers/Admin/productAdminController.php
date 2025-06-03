<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\productModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productAdminController extends Controller
{
    //
    public function index()
    {
        $module = 'product';
        return view('Admin.Product.product', ['module' => $module]);
    }

    public function getAllProducts()
    {
        $data = DB::table('product')->select('*')->get();
        return response()->json($data, 200);
    }

    public function deleteProduct(Request $request)
    {
        $product_id = $request->id;
        $res = DB::table('product')->where('id', $product_id)->delete();
        return response()->json($res, 200);
    }

    public function addProduct(Request $request)
    {
        $productName = $request->productName;
        $description = $request->description;
        $category = $request->category;
        $price = $request->price;

        $product = DB::table('product')
            ->insert([
                [
                    'productName' => $productName,
                    'description' => $description,
                    'category' => $category,
                    'price' => $price,
                ]
            ]);
        return response()->json($product, 200);
    }

    public function editProduct(Request $request)
    {
        $product_id = $request->id;
        $productName = $request->productName;
        $description = $request->description;
        $category = $request->category;
        $price = $request->price;

        $product = DB::table('product')
            ->where('id', $product_id)
            ->update([
                'productName' => $productName,
                'description' => $description,
                'category' => $category,
                'price' => $price,
            ]);
        return response()->json($product, 200);
    }
}
