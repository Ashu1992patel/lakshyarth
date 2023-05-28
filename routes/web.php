<?php

use App\Http\Controllers\AcquirementController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FarmerAcquirementController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\GuestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [GuestController::class, 'home'])->name("home");
Route::get('about', [GuestController::class, 'about'])->name("about");
Route::get('products', [GuestController::class, 'products'])->name("products");
Route::get('blogs', [GuestController::class, 'blogs'])->name("blogs");
Route::get('contact', [GuestController::class, 'contact'])->name("contact");
Route::post('contact', [ContactUsController::class, 'store'])->name("contact");

// Route After Authentication i.e LOGIN
Route::middleware(['auth'])->group(function () {
    // Dahsboard Route
    Route::get("dashboard", [AdminPagesController::class, "dashboard"])->name("dashboard");
    // Farmers CRUD Route
    Route::get('farmer/{id}/records', [FarmerAcquirementController::class, 'records'])->name("farmers.records");
    Route::post('farmer/{id}/records', [FarmerAcquirementController::class, 'recordsStore'])->name("farmers.records");
    Route::resource('farmers', FarmerController::class);
    // Acquirement CRUD Route
    Route::resource('acquirements', AcquirementController::class);
});

require __DIR__ . '/auth.php';
