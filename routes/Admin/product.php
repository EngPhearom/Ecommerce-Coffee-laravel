<?php

use App\Http\Controllers\Admin\productAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/products', [productAdminController::class, 'getAllProducts'])->name('product');
?>
