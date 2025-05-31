<?php

use App\Http\Controllers\Admin\userAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/users', [userAdminController::class, 'index'])->name('user');
    Route::get('/admin/get-users', [userAdminController::class, 'getAllUsers']);
    Route::post('/admin/delete-user', [userAdminController::class, 'deleteUser']);
    Route::post('/admin/add-user', [userAdminController::class, 'addUser']);
    Route::post('/admin/edit-user', [userAdminController::class, 'editUser']);
?>
