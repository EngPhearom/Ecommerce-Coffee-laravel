<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboadAdminController extends Controller
{
    public function index(Request $request){
        return view('Admin.Dashboad.dashboad');
    }
}
