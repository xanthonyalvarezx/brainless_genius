<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
// PAGE ROUTES
Route::get('/', [PageController::class, 'landing']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

//AUTHENTICATON ROUTES

/**GET */
Route::get('/login', [PageController::class, 'loginPage']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [PageController::class, 'registerPage'])->middleware('auth');

/**POST */
Route::post('/adminLogin', [AuthController::class, 'loginAdmin']);
Route::post('/registerAdmin', [AuthController::class, 'registerAdmin']);


/**ADMIN ROUTES */
//GET
Route::get('/dashboard/messages/{tab}', [PageController::class, 'adminDash'])->middleware('auth');
Route::get('/dashboard/messages/{tab}', [PageController::class, 'adminDash'])->middleware('auth');
Route::get('/dashboard/messages/{tab}', [PageController::class, 'adminDash'])->middleware('auth');
// POST
Route::put('/handle/message/submit/{message}', [DashboardController::class, 'checkboxSubmit']);
Route::delete('/delete/message/{id}', [DashboardController::class, 'deleteMessage']);
