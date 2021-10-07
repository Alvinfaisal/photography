<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardUserController;

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


Route::get("/", [HomeController::class, 'index']);
Route::get("/services", [HomeController::class, 'services']);
Route::get("/about", [HomeController::class, 'about']);

// Route redirect after login
Route::get("/redirects", [HomeController::class, "redirects"]);

// Route Dashboard Users
Route::resource('/dashboard/users', DashboardUserController::class)->middleware('auth');
// Route::get("/users", [AdminController::class, "user"]);
// Route::get("/users/create", [AdminController::class, "usercreate"]);
// Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);










//Route default laravel jetstream 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
