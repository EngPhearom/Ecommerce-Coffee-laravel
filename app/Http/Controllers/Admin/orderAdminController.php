<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\orderModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderAdminController extends Controller
{
    //
    public function index(){
        $module = 'order';
        return view('Admin.Order.order', ['module' => $module]);
    }

    public function getAllOrders(){
        $data = DB::table('order')->select('*')->get();
        return response()->json($data);
    }

    public function deleteOrder(Request $request){
        $order_id = $request->id;
        $res = DB::table('order')->where('id', $order_id)->delete();
        return response()->json($res);
    }

    public function addOrder(Request $request){
        $order = new orderModelAdmin();
        $order->customer_id = $request->customer_id;
        $order->orderDate = now();
        $order->totalAmount = $request->totalAmount;
        $order->paymentMethod = $request->paymentMethod;
        $order->status = $request->status;
        $order->employee_id = $request->employee_id;
        $order->orderDetails = $request->orderDetails;
        $order->save();
        return response()->json($order);
    }

    public function updateOrder(Request $request){
        $order = orderModelAdmin::find($request->id);
        if($order){
            $order->customer_id = $request->customer_id;
            $order->totalAmount = $request->totalAmount;
            $order->paymentMethod = $request->paymentMethod;
            $order->status = $request->status;
            $order->employee_id = $request->employee_id;
            $order->orderDetails = $request->orderDetails;
            $order->save();
        }
        return response()->json($order);
    }
}
