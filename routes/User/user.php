<?php

use App\Http\Controllers\User\userUserController;
use Illuminate\Support\Facades\Route;

    Route::get('/coffee', [userUserController::class, 'index']);
?>
