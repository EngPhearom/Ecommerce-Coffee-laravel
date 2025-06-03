<?php

use App\Http\Controllers\Admin\productAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/products', [productAdminController::class, 'index'])->name('product');
    Route::get('/admin/get-products', [productAdminController::class, 'getAllProducts']);
    Route::post('/admin/delete-product', [productAdminController::class, 'deleteProduct']);
    Route::post('/admin/add-product', [productAdminController::class, 'addProduct']);
    Route::post('/admin/edit-product', [productAdminController::class, 'editProduct']);
?>
