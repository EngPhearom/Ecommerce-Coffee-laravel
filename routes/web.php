<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User block

// Route::get('/', function () {
//     return view('User.user');
// });

// Admin block
Route::get('/', function () {
    return redirect('/login');
});

include "Admin/login.php";

Route::middleware('auth')->group(function () {
    include "Admin/admin.php";
    include "Admin/singup.php";
    include "Admin/dashboad.php";
    include "Admin/user.php";
    include "Admin/customer.php";
    include "Admin/employee.php";
    include "Admin/product.php";
    include "Admin/inventory.php";

    // User
    include "User/user.php";
    include "User/product.php";
    include "User/menu.php";
    include "User/contact.php";
});
