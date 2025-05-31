<?php

use App\Http\Controllers\Admin\loginAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/login', [loginAdminController::class, 'index'])->name('login');
?>
