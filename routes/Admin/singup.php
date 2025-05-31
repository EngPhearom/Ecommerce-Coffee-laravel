<?php

use App\Http\Controllers\Admin\singupAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/singup', [singupAdminController::class, 'index'])->name('singup');
?>
