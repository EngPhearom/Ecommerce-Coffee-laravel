<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class loginAdminController extends Controller
{
    //
    public function index(){
        $module = 'login';
        return view('Admin.Login.login', ['module' => $module]);
    }

    public function doLogin(Request $request){
        $credentials = $request->only('username', 'password');
        if (FacadesAuth::attempt($credentials)) {
            return redirect('/admin/dashboad');
        } else {
            return redirect('/login')
                ->with('status', 'Incorrect Username or password !');
        }
    }
}
