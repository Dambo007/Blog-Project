<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\View\BackendController;
use App\Http\Controllers\View\FrontendController;

Route::group(["prefix" => "admin"], function () {
    Route::get("/", [BackendController::class, "index"]);
    Route::get("/Category", [BackendController::class, "category"]);
});

