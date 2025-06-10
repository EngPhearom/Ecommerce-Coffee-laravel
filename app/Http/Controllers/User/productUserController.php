<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productUserController extends Controller
{
    //
    public function index(){
        $module = 'product';
        return view('User.componnets.product', ['module' => $module]);
    }
}
