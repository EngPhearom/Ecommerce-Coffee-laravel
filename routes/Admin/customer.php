<?php

use App\Http\Controllers\Admin\customerAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/customers', [customerAdminController::class, 'index'])->name('customer');
    Route::get('/admin/get-customers', [customerAdminController::class, 'getAllCustomers']);
    Route::post('/admin/delete-customer', [customerAdminController::class, 'deleteCustomer']);
    Route::post('/admin/add-customer', [customerAdminController::class, 'addCustomer']);
    Route::post('/admin/edit-customer', [customerAdminController::class, 'editCustomer']);
?>
