<?php

use App\Http\Controllers\CompareController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(["auth"])->group(function () {
    Route::get("/compare", [CompareController::class, "compare"])->name("compare");
    Route::post("/compare", [CompareController::class, "create"]);

    //------

    Route::get("/users", [UserController::class, "getAll"])->name("users");
    Route::post("/users/create", [UserController::class, "create"]);
    Route::get("/user/{id}", [UserController::class, "get"]);
    Route::post("/user/{id}", [UserController::class, "edit"]);
    Route::get("/user/{id}/delete", [UserController::class, "delete"]);

    //------

    Route::get("/prods", [ProductController::class, "getAll"])->name("prods");
    Route::post("/prods/create", [ProductController::class, "create"]);
    Route::get("/prod/{id}", [ProductController::class, "get"]);
    Route::post("/prod/{id}", [ProductController::class, "edit"]);
    Route::get("/prod/{id}/delete", [ProductController::class, "delete"]);

    //------

    Route::get("/forms", [FormController::class, "getAll"])->name("forms");
    Route::get("/form/{id}", [FormController::class, "get"]);
    Route::post("/form/{id}", [FormController::class, "edit"]);
    Route::get("/form/{id}/delete", [FormController::class, "delete"]);

});
require __DIR__.'/auth.php';
