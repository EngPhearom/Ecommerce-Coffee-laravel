<?php

use App\Http\Controllers\Admin\customerAdminController;
use App\Http\Controllers\Admin\inventoryAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/inventories', [inventoryAdminController::class, 'index'])->name('inventory');
?>
