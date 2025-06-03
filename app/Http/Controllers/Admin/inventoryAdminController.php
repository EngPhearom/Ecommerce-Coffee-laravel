<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inventoryAdminController extends Controller
{
    //
    public function index()
    {
        $module = 'inventory';
        return view('Admin.Inventory.inventory', ['module' => $module]);
    }

    public function getInventories()
    {
        $data = DB::table('inventory')->select('*')->get();
        return response()->json($data, 200);
    }

    public function addInventory(Request $request)
    {
        $product_id = $request->product_id;
        $stockQuantity = $request->stockQuantity;
        $costPrice = $request->costPrice;
        $sellingPrice = $request->sellingPrice;

        $inventory = DB::table('inventory')
            ->insert([
                [
                    'product_id' => $product_id,
                    'stockQuantity' => $stockQuantity,
                    'costPrice' => $costPrice,
                    'sellingPrice' => $sellingPrice,
                ]
            ]);
        return response()->json($inventory, 200);
    }

    public function deleteInventory(Request $request)
    {
        $inventory_id = $request->id;

        $inventory = DB::table('inventory')
            ->where('id', $inventory_id)
            ->delete();
        return response()->json($inventory, 200);
    }

    public function editInventory(Request $request)
    {
        $id = $request->id;
        $product_id = $request->product_id;
        $stockQuantity = $request->stockQuantity;
        $costPrice = $request->costPrice;
        $sellingPrice = $request->sellingPrice;

        $inventory = DB::table('inventory')
            ->where('id', $id)
            ->update([
                'product_id' => $product_id,
                'stockQuantity' => $stockQuantity,
                'costPrice' => $costPrice,
                'sellingPrice' => $sellingPrice,
            ]);
        return response()->json($inventory, 200);
    }
}
