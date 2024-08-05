<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\category\categoryController;


Route::group(["prefix" => "admin"], function () {
    Route::post("/add-category", [categoryController::class, "addCategory"]);
});
