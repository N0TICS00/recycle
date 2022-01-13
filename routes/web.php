<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandlingController;
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
//GET
Route::get('/', function () {
    return view('welcome');
});
Route::get("/add", [HandlingController::class, "add"]);
Route::get("/all", [HandlingController::class, "all"]);
//POST
Route::post("/add",[HandlingController::class, "addRetire"] );


//DELETE
Route::delete("/delete/{id}", [HandlingController::class, "deleteRetire"])->name("withdrawals.destroy");
