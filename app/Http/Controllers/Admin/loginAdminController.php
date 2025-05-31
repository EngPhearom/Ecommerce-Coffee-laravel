<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginAdminController extends Controller
{
    //
    public function index(){
        $module = 'login';
        return view('Admin.Login.login', ['modul' => $module]);
    }
}
