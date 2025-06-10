<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminAdminController extends Controller
{
    //
    public function index(){
        $module = 'admin';
        return view('Admin.Dashboad.dashboad', ['module' => $module]);
    }
}
