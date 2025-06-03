<?php

use App\Http\Controllers\Admin\loginAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/login', [loginAdminController::class, 'index'])->name('login');
    Route::post('/do-login', [loginAdminController::class, 'doLogin']);
?>
