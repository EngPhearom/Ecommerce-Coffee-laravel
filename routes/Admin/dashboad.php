<?php

use App\Http\Controllers\Admin\dashboadAdminController;
use Illuminate\Support\Facades\Route;

    Route::get('/admin/dashboad', [dashboadAdminController::class, 'index'])->name('dashboad');
?>
