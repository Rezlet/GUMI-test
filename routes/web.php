<?php

use App\Http\Controllers\TestController;
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

Route::get("test/1", [TestController::class, "test_1"])->name("test_1");
Route::get("test/2", [TestController::class, "test_2"])->name("test_2");
Route::get("test/3", [TestController::class, "test_3"])->name("test_3");
