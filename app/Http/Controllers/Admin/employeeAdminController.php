<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\employeeModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeAdminController extends Controller
{
    //
    public function getAllEmployees(){
        $data = DB::table('employees')->select('*')->get();
        return view('Admin.Employee.employee', ['employee' => $data]);
    }

    public function deleteEmpoyee(Request $request){
        $employee_id = $request->id;
        $res = DB::table('employees')->where('id', $employee_id)->delete();
        return response()->json($res);
    }

    public function addEmployeee(Request $request){
        $employee = new employeeModelAdmin();
        $employee->firstName = $request->firstName;
        $employee->lastName = $request->lastName;
        $employee->gender = $request->gender;
        $employee->email = $request->email;
        $employee->phoneNumber = $request->phoneNumber;
        $employee->position = $request->position;
        $employee->hireDate = $request->hireDate;
        $employee->salary = $request->salary;
        $employee->save();
        return response()->json($employee);
    }

    public function updateEmployee(Request $request){
        $employee = employeeModelAdmin::find($request->id);
        if($employee){
            $employee->firstName = $request->firstName;
            $employee->lastName = $request->lastName;
            $employee->gender = $request->gender;
            $employee->email = $request->email;
            $employee->phoneNumber = $request->phoneNumber;
            $employee->position = $request->position;
            $employee->hireDate = $request->hireDate;
            $employee->salary = $request->salary;
            $employee->save();
        }
        return response()->json($employee);
    }
}
