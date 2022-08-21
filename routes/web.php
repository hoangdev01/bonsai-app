<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PendingStyleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PotController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/{any}', [ApplicationController::class, 'index'])->where('any', '.*');

Route::post("/test", [ApplicationController::class, "test"]);

Route::resource("/category", CategoryController::class)->except(["create", "edit"]);
Route::resource("/customer", CustomerController::class)->except(["create", "edit"]);
Route::resource("/design", DesignController::class)->except(["create", "edit"]);
Route::resource("/image", ImageController::class)->except(["create", "edit"]);
Route::resource("/order", OrderController::class)->except(["create", "edit"]);
Route::resource("/pending-style", PendingStyleController::class)->except(["create", "edit"]);
Route::resource("/post", PostController::class)->except(["create", "edit"]);
Route::resource("/pot", PotController::class)->except(["create", "edit"]);
Route::resource("/species", SpeciesController::class)->except(["create", "edit"]);
Route::resource("/tag", TagController::class)->except(["create", "edit"]);
Route::resource("/tree", TreeController::class)->except(["create", "edit"]);
Route::resource("/type", TypeController::class)->except(["create", "edit"]);

// Route::get("get-csrf", [ApplicationController::class, "getCsrf"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
