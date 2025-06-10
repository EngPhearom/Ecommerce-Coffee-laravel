<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\paymentModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paymentAdminController extends Controller
{
    //
    public function index(){
        $module = 'payment';
        return view('Admin.Payment.payment', ['module' => $module]);
    }

    public function getAllPayment(){
        $data = DB::table('payment')->select('*')->get();
        return response()->json($data);
    }

    public function deletePayment(Request $request){
        $payment_id = $request->id;
        $res = DB::table('payment')->where('id', $payment_id)->delete();
        return response()->json($res);
    }

    public function addPayment(Request $request){
        $payment = new paymentModelAdmin();
        $payment->order_id = $request->order_id;
        $payment->customer_id = $request->customer_id;
        $payment->paymentDate = now();
        $payment->paymentMethod = $request->paymentMethod;
        $payment->amountPaid = $request->amountPaid;
        $payment->status = $request->status;
        $payment->save();
        return response()->json($payment);
    }

    public function updatePayment(Request $request){
        $payment = paymentModelAdmin::find($request->id);
        if($payment){
            $payment->order_id = $request->order_id;
            $payment->customer_id = $request->customer_id;
            $payment->paymentMethod = $request->paymentMethod;
            $payment->amountPaid = $request->amountPaid;
            $payment->status = $request->status;
            $payment->save();
        }
        return response()->json($payment);
    }
}
