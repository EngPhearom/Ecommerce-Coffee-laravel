<?php

use App\Http\Controllers\Admin\customerAdminController;
use App\Http\Controllers\Admin\employeeAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/employees', [employeeAdminController::class, 'getAllEmployees'])->name('employee');
?>
