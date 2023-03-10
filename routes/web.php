<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["prefix" => "/"], function () {
    Route::get("/", [AuthController::class, "index"]);
    Route::post("login", [AuthController::class, "login"]);
    Route::get("/register", [AuthController::class, "register"]);
    Route::post("/sign", [AuthController::class, "registration"]);
    
});

Route::group(["prefix"=>"/"],function(){
    Route::get("/dashboard", [ProductsController::class, "index"]);
    Route::get("/logout", [ProductsController::class, "logout"]);
    Route::get("delete/{id}", [ProductsController::class, "delete"]);
    Route::get("/create", [ProductsController::class, "createpage"]);
    Route::post("/insert", [ProductsController::class, "create"]);
    Route::get("edit/{id}", [ProductsController::class, "edit"]);
    Route::post("/update", [ProductsController::class, "update"]);
});



