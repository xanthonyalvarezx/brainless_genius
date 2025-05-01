<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
// PAGE ROUTES
Route::get('/', [PageController::class,'landing']);
Route::get('/about', [PageController::class,'about']);
Route::get('/contact', [PageController::class,'contact']);

//AUTHENTICATON ROUTES

/**GET */
Route::get('/login', [PageController::class,'loginPage']);
Route::get('/register', [PageController::class,'registerPage']);

/**POST */
Route::get('/adminLogin', [AuthController::class,'loginAdmin']);
Route::get('/registerAdmin', [AuthController::class,'registerAdmin']);

