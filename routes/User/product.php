<?php

use App\Http\Controllers\User\productUserController;
use Illuminate\Support\Facades\Route;

    Route::get('/coffee/product', [productUserController::class, 'index']);
?>
