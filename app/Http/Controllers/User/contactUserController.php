<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactUserController extends Controller
{
    //
    public function index(){
        $module = 'contact';
        return view('User.componnets.contact', ['module' => $module]);
    }
}
