<?php

use App\Http\Controllers\Admin\customerAdminController;
use App\Http\Controllers\Admin\employeeAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/employees', [employeeAdminController::class, 'index'])->name('employee');
    Route::get('/admin/get-employees', [employeeAdminController::class, 'getAllEmployees']);
    Route::post('/admin/delete-employee', [employeeAdminController::class, 'deleteEmployee']);
    Route::post('/admin/add-employee', [employeeAdminController::class, 'addEmployee']);
    Route::post('/admin/edit-employee', [employeeAdminController::class, 'editEmployee']);
?>
