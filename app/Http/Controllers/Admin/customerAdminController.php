<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\customerModelAdmin as AdminCustomerModelAdmin;
use App\Models\customerModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customerAdminController extends Controller
{
    public function index()
    {
        $module = 'customer';
        return view('Admin.Customer.customer', ['module' => $module]);
    }

    public function getAllCustomers()
    {
        $data = DB::table('customer')->select('*')->get();
        return response()->json($data, 200);
    }

    public function deleteCustomer(Request $request)
    {
        $customer_id = $request->id;
        $res = DB::table('customer')->where('id', $customer_id)->delete();
        return response()->json($res, 200);
    }

    public function addCustomer(Request $request)
    {
        $user_id = $request->user_id;
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $gender = $request->gender;
        $emailAddress = $request->emailAddress;
        $phoneNumber = $request->phoneNumber;

        $customer = DB::table('customer')
            ->insert([
                [
                    'user_id' => $user_id,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'gender' => $gender,
                    'emailAddress' => $emailAddress,
                    'phoneNumber' => $phoneNumber,
                ]
            ]);
        return response()->json($customer, 200);
    }

    public function editCustomer(Request $request)
    {
        $customer_id = $request->id;
        $user_id = $request->user_id;
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $gender = $request->gender;
        $emailAddress = $request->emailAddress;
        $phoneNumber = $request->phoneNumber;

        $customer = DB::table('customer')
            ->where('id', $customer_id)
            ->update([
                'user_id' => $user_id,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'gender' => $gender,
                'emailAddress' => $emailAddress,
                'phoneNumber' => $phoneNumber,
            ]);
        return response()->json($customer, 200);
    }
}
