<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userUserController extends Controller
{
    //
    public function index(){
        $module = 'user';
        return view('User.index', ['module' => $module]);
    }
}
