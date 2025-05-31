<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\customerModelAdmin as AdminCustomerModelAdmin;
use App\Models\customerModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customerAdminController extends Controller
{
    // public function index(){
    //     $module = 'customer';
    //     return view('Admin.Customer.customer', ['module' => $module]);
    // }

    public function getAllCustomers(){
        $data = DB::table('customer')->select('*')->get();
        return view('Admin.Customer.customer', ['customer' => $data]);
    }

    public function deleteCustomer(Request $request){
        $customer_id = $request->id;
        $res = DB::table('customer')->where('id', $customer_id)->delete();
        return response()->json($res);
    }

    public function addCustomer(Request $request){
        $customer = new AdminCustomerModelAdmin();
        $customer->user_id = $request->user_id;
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->gender = $request->gender;
        $customer->emailAddress = $request->emailAddress;
        $customer->phoneNumber = $request->phoneNumber;
        $customer->save();
        return response()->json($customer);
    }

    public function updateCustomer(Request $request){
        $customer = AdminCustomerModelAdmin::find($request->id);
        if($customer){
            $customer->user_id = $request->user_id;
            $customer->firstName = $request->firstName;
            $customer->lastName = $request->lastName;
            $customer->gender = $request->gender;
            $customer->emailAddress = $request->emailAddress;
            $customer->phoneNumber = $request->phoneNumber;
            $customer->save();
        }
        return response()->json($customer);
    }
}
