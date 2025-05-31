<?php

use App\Http\Controllers\Admin\customerAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/customers', [customerAdminController::class, 'getAllCustomers'])->name('customer');
?>
