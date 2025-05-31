<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class inventoryAdminController extends Controller
{
    //
    public function index(){
        $module = 'inventory';
        return view('Admin.Inventory.inventory', ['module' => $module]);
    }
}
