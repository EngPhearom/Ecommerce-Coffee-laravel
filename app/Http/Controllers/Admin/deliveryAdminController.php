<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class deliveryAdminController extends Controller
{
    //
    public function index(){
        return view('Admin.Delivery.delivery');
    }

    public function create(){
        
    }
}
