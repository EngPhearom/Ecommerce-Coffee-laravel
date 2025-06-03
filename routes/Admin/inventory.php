<?php

use App\Http\Controllers\Admin\inventoryAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/inventories', [inventoryAdminController::class, 'index'])->name('inventory');
    Route::get('/admin/get-inventories', [inventoryAdminController::class, 'getInventories']);
    Route::post('/admin/add-inventory', [inventoryAdminController::class, 'addInventory']);
    Route::post('/admin/delete-inventory', [inventoryAdminController::class, 'deleteInventory']);
    Route::post('/admin/edit-inventory', [inventoryAdminController::class, 'editInventory']);
?>
