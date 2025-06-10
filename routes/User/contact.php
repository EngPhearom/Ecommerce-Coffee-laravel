<?php

use App\Http\Controllers\User\contactUserController;
use Illuminate\Support\Facades\Route;

    Route::get('/coffee/contact', [contactUserController::class, 'index']);
?>
