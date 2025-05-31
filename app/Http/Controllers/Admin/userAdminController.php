<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class userAdminController extends Controller
{
    //
    public function index()
    {
        $module = 'user';
        return view('Admin.User.user', ['module' => $module]);
    }

    public function getAllUsers()
    {
        $data = DB::table('users')->select('*')->get();
        return response()->json($data, 200);
    }

    public function deleteUser(Request $request)
    {
        $user_id = $request->id;
        $res = DB::table('users')->where('id', $user_id)->delete();
        return response()->json($res, 200);
    }

    public function addUser(Request $request)
    {
        $userName = $request->userName;
        $password = $request->password;
        $email = $request->email;
        $phoneNumber = $request->phoneNumber;
        $status = $request->status;
        $lastLogin = $request->lastLogin;

        $user = DB::table('users')
            ->insert([
                [
                    'userName' => $userName,
                    'password' => Hash::make($password),
                    'email' => $email,
                    'phoneNumber' => $phoneNumber,
                    'status' => $status,
                    'lastLogin' => $lastLogin
                ]
            ]);
        return response()->json($user, 200);
    }

    public function editUser(Request $request)
    {
        $user_id = $request->id;
        $userName = $request->userName;
        $password = $request->password;
        $email = $request->email;
        $phoneNumber = $request->phoneNumber;
        $status = $request->status;
        $lastLogin = $request->lastLogin;

        $user = DB::table('users')
            ->where('id', $user_id)
            ->update([
                'userName' => $userName,
                'password' => Hash::make($password),
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'status' => $status,
                'lastLogin' => $lastLogin
            ]);
        return response()->json($user, 200);
    }
}
