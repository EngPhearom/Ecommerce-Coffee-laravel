<?php

use App\Http\Controllers\Admin\adminAdminController;
use App\Http\Controllers\Admin\dashboadAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin', [adminAdminController::class, 'index'])->name('admin');
?>
