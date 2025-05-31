<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\employeeModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeAdminController extends Controller
{
    //
    public function index()
    {
        $module = 'employee';
        return view('Admin.Employee.employee', ['module' => $module]);
    }

    public function getAllEmployees()
    {
        $data = DB::table('employees')->select('*')->get();
        return response()->json($data, 200);
    }

    public function deleteEmployee(Request $request)
    {
        $employee_id = $request->id;
        $res = DB::table('employees')->where('id', $employee_id)->delete();
        return response()->json($res, 200);
    }

    public function addEmployee(Request $request)
    {
        $firstName = $request->firstName;
        $lastName = $request->lastname;
        $gender = $request->gender;
        $email = $request->email;
        $phoneNumber = $request->phoneNumber;
        $position = $request->position;
        $hireDate = $request->hireDate;
        $salary = $request->salary;

        $employee = DB::table('employees')
            ->insert([
                [
                    'firstName' => $firstName,
                    'lastname' => $lastName,
                    'gender' => $gender,
                    'email' => $email,
                    'phoneNumber' => $phoneNumber,
                    'position' => $position,
                    'hireDate' => $hireDate,
                    'salary' => $salary,
                ]
            ]);
        return response()->json($employee, 200);
    }

    public function editEmployee(Request $request)
    {
        $employee_id = $request->id;
        $firstName = $request->firstName;
        $lastName = $request->lastname;
        $gender = $request->gender;
        $email = $request->email;
        $phoneNumber = $request->phoneNumber;
        $position = $request->position;
        $hireDate = $request->hireDate;
        $salary = $request->salary;

        $employee = DB::table('employees')
            ->where('id', $employee_id)
            ->update([
                'firstName' => $firstName,
                'lastname' => $lastName,
                'gender' => $gender,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'position' => $position,
                'hireDate' => $hireDate,
                'salary' => $salary,
            ]);
        return response()->json($employee, 200);
    }
}
