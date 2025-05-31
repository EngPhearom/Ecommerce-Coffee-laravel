<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class singupAdminController extends Controller
{
    //
    public function index(){
        $module = 'singup';
        return view('Admin.Singup.singup', ['modul' => $module]);
    }
}
