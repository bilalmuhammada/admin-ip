<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\InfluencerController;



use App\Http\Controllers\UserController;

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

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/edit-profile', [AuthController::class, 'editProfile']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset/{password_reset_code}', [AuthController::class, 'checkForgotPasswordCode']);

Route::middleware('auth_check')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::prefix('/admins')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
    });

    Route::prefix('/categories')->group(function () {
         Route::get('/', [CategoryController::class, 'index']);
    });

    Route::prefix('/vendors')->group(function () {
        Route::get('/', [VendorController::class, 'index']);
        Route::get('/create', [VendorController::class, 'create']);
        Route::get('/transactions', [VendorController::class, 'transactions']);
        Route::get('/reviews', [VendorController::class, 'reviews']);
    });

    Route::prefix('/influencers')->group(function () {
        Route::get('/', [InfluencerController::class, 'index']);
        Route::get('/create', [InfluencerController::class, 'create']);
        Route::get('/transactions', [InfluencerController::class, 'transactions']);
        Route::get('/reviews', [InfluencerController::class, 'reviews']);
    });

    Route::get('/faqs', function () {
        return view('faq')->with(['menu' => 'faqs']);
    });

    Route::get('/change-password', [AuthController::class, 'resetPassword']);
});
