<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class menuUserController extends Controller
{
    //
    public function index(){
        $module = 'menu';
        return view('User.componnets.menu', ['module' => $module]);
    }
}
