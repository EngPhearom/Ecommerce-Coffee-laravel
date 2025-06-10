<?php

use App\Http\Controllers\User\menuUserController;
use Illuminate\Support\Facades\Route;

    Route::get('/coffee/menu', [menuUserController::class, 'index']);
?>
